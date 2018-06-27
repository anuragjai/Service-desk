<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager_model extends CI_Model  {


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
	public function signin()
	{

		$username = $this->input->post('userid');
		$password = $this->input->post('password');
		
		return $this->db->query('select * from users where EmpId = "'.$username.'" AND password ="'. $password.'"')->result_array();
		
	}

	public function get_username($email){
		return $this->db->query('select EmpId,name,pic from users where EmpId = "'.$email.'"')->result_array();
	}
	public function getOperationalData(){
		return $this->db->query('select * from ot')->result_array();
	}
	public function trainerHouseData(){
		return $this->db->query('select * from th')->result_array();
	}

	public function get_comments($EmpId){
		
		$messages = [];
		$result = $this->db->query('select msg from comments where EmpId = "'.$EmpId.'"')->result_array();
		foreach ($result as $key => $value) {
			array_push($messages, $value['msg']);
		}
		return $messages;
	}



	public function get_shift($EmpId){
	
		$messages1 = [];
		$result = $this->db->query('select * from users where mgr = "'.$EmpId.'"' )->result_array();
		 return $result;
	}

	public function get_login($EmpId){
		$result = $this->db->query('select * from employee_login where mgr = "'.$EmpId.'"')->result_array();

		 return $result;
	}

	public function get_quiz(){
		return $this->db->query('select * from quiz')->result_array();
	}

	public function get_metrics($EmpId){
		$result = $this->db->query('select * from metrics where mgr = "'.$EmpId.'"')->result_array();

		 return $result;
	}	

}