<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {



	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
		parent::__construct();
		$this->load->model('Account_model');
	}


	public function index()
	{		

	//$this->load->view('welcome_message');
		$this->load->helper('url'); 
		$this->load->view('access');
	}

	public function user( $error = false){
		//echo "this is testing";
		$data['error'] = $error;
		$this->load->view('login',$data);
	}

	public function signin(){
		$result = $this->Account_model->signin();
		//echo "<pre>";print_r($result);
		if(empty($result)){
			$error =true;
			$this->user($error);
		}else{
			$this->session->set_userdata('userDetails', $result);
			redirect('/index.php/Account/user_dashboard', 'refresh');
		}
	}

	public function user_dashboard(){

		$params = $this->input->post();
		$sdate = null;
		$edate = null;
		
		if($params){
			$sdate = $params['start_date'];
			$edate = $params['end_date'];
			//var_dump($sdate); var_dump($edate);
			// $operationalData = $this->Account_model->getOperationalData($sdate,$edate);
			//var_dump($operationalData); die();
			//var_dump($params); die();
		}

		$trainerHouseData = $this->Account_model->trainerHouseData($sdate,$edate);
		$operationalData = $this->Account_model->getOperationalData($sdate,$edate);
		
		$EmpId = $this->session->userdata('userDetails')[0]['EmpId'];
		$userType = $this->session->userdata('userType');
		
		if(!empty($EmpId)){
			$username = $this->Account_model->get_username($EmpId);
			$userType= $EmpId[0];

			if ($userType[0] == 'E'){
				$comments = $this->Account_model->get_comments($EmpId);
				// print_r($comments);die();

				$data['comments'] = ($comments);

				$data['username'] = $username;
				$data['userDetails'] = json_encode($this->session->userdata('userDetails'));
				
				// $trainerHouseData = $this->Account_model->trainerHouseData();
				$data['ot'] = $operationalData;
				$data['th'] = $trainerHouseData;

			// $data['quiz'] = "";
			// print_r($data);die();
			// $data['users']=$this->Account_model->get_shift($EmpId);
			
				$data['shift']=$this->Account_model->get_shift($EmpId,$sdate,$edate);
				$data['emp']=$this->Account_model->get_login($EmpId);
				$data['metrics']=$this->Account_model->get_metrics($EmpId);

				$quizdata= $this->Account_model->get_quiz();
				$data['quizdata']=$quizdata;

				$data['users']=$this->Account_model->get_all_user($EmpId);

				$this->load->helper('date');
				$this->load->view('main_header', $data);
				$this->load->view('user_dashboard');





			}
			elseif($userType[0] == 'M'){
			// $comments = $this->Account_model->get_comments($EmpId);
			// 	// print_r($comments);die();

			// $data['comments'] = ($comments);
			// $data['username'] = $username;
			// $data['userDetails'] = json_encode($this->session->userdata('userDetails'));
			// $operationalData = $this->Account_model->getOperationalData();
			// $trainerHouseData = $this->Account_model->trainerHouseData();
			// // var_dump($operationalData);
			// $data['ot'] = $operationalData;
			// $data['th'] = $trainerHouseData;
			// $data['q'] = "";
			// $this->load->view('manager_header', $data);
			// $this->load->view('manager_dashboard');
				redirect('/index.php/Manager/manager_dashboard', 'refresh');


			}elseif($userType[0] == 'A'){
				// $data['username'] = $username;
				// $data['userDetails'] = json_encode($this->session->userdata('userDetails'));
				// $this->load->view('admin_header', $data);

			// $data['users']=$this->Account_model->get_all_user();
				//echo print_r($data['users']);
				redirect('/index.php/Admin/admin_dashboard', 'refresh');

			// $this->load->view('admin_dashboard',$data);

			}

		}else{
			redirect('/index.php/Account/user', 'refresh');
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		redirect('/index.php/Account/user', 'refresh');
	}

		public function getDateTime(){
        //load date helper
        $this->load->helper('date');

        $format = "%Y-%m-%d %h:%i %A";
		echo mdate($format);
    }

	public function add(){
		$correctAns = 0;
		$quizAnswer=$this->input->post('quiz-content');
		$quizAnswer = json_decode($quizAnswer, true);
		$dbData= $this->Account_model->get_quiz();
		$dbAnswer = array();		
		foreach ($dbData as $index => $value) {
			$dbAnswer[$value['s_no']] = $value['answer'];
		}
		
		foreach ($quizAnswer as $qNo => $ans) {
			if($dbAnswer[$qNo] == $ans){
				$correctAns += 1;
			}
		}

		$percentage = $correctAns*100/5;
		echo json_encode($percentage);
	}


}