<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {



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
		$this->load->model('Admin_model');
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

public function admin_dashboard(){
	$EmpId = $this->session->userdata('userDetails')[0]['EmpId'];
	$userType = $this->session->userdata('userType');
	$data['users']=$this->Admin_model->get_all_user();
	// print_r($data);return;
	$this->load->view('admin_dashboard', $data);
}

public function addOpTip(){
	$res = $this->Admin_model->addOpTip();
	echo json_encode($res);
}

public function addThTip(){
	$res = $this->Admin_model->addThTip();
	echo json_encode($res);
}

public function addquiz(){
	$res = $this->Admin_model->addquiz();
	echo json_encode($res);
}

public function addlogin(){
	$res = $this->Admin_model->addlogin();
	echo json_encode($res);
}

public function addmetrics(){
	$res = $this->Admin_model->addmetrics();
	echo json_encode($res);
}

public function addComment(){
	$res = $this->Admin_model->addComment();
	echo json_encode($res);
}

public function addshift(){
	$res = $this->Admin_model->addshift();
	echo json_encode($res);
}

public function addEmp(){
	$res = $this->Admin_model->addEmp();
	echo json_encode($res);
}


public function logout(){
	$this->session->unset_userdata('username');
	redirect('/index.php/Account/user', 'refresh');
}


}