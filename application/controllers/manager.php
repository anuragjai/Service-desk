<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager extends CI_Controller {



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
		$this->load->model('Manager_model');
	}


	public function index()
	{		
		//$this->load->view('welcome_message');
		 $this->load->helper('url'); 
		$this->getDateTime();
		$this->load->view('access');


// $ddate = "2012-10-18";
// $date = new DateTime($ddate);
// $week = $date->format("W");
// echo "Weeknummer: $week";



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

public function manager_dashboard(){

	$EmpId = $this->session->userdata('userDetails')[0]['EmpId'];

	$username = $this->session->userdata('userDetails');

	$comments = $this->Manager_model->get_comments($EmpId);
				// print_r($comments);die();

	$data['comments'] = ($comments);
	$data['username'] = $username;
	$data['userDetails'] = json_encode($this->session->userdata('userDetails'));
	$operationalData = $this->Manager_model->getOperationalData();
	$trainerHouseData = $this->Manager_model->trainerHouseData();
			// var_dump($operationalData);
	$data['ot'] = $operationalData;
	$data['th'] = $trainerHouseData;
	$data['q'] = "";
	$data['users']=$this->Manager_model->get_shift($EmpId);
	$data['emp']=$this->Manager_model->get_login($EmpId);
	$data['metrics']=$this->Manager_model->get_metrics($EmpId);

	$quizdata= $this->Manager_model->get_quiz();
	$data['quizdata']=$quizdata;

	$this->load->helper('date');
	$this->load->view('manager_header',$data);
	$this->load->view('manager_dashboard');


// adding code



// echo count($quizdata);
// foreach ($quizdata as $value) {

// 	echo $value['question'];
// 	echo $value['options1'];
// 	echo $value['options2'];
// 	echo $value['options3'];
// 	echo $value['options4'];
// 	echo $value['answer'];
// 	echo'<br>';

}



		public function logout(){
			$this->session->unset_userdata('username');
			redirect('/index.php/Account/user', 'refresh');
			$this->session->sess_destroy();
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