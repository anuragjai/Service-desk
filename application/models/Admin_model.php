<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model  {

	public function addOpTip(){
		$tip_msg = $this->input->post('message');
		$tip_desc = $this->input->post('desc');
		$query = "INSERT INTO `ot` (`msg`, `desc`) VALUES('".$tip_msg."', '".$tip_desc."')";
		// return array('query'=> $query);
		$res = $this->db->query($query);
		if($res){
			return array('status'=> true, 'msg'=> 'Saved Successfully!');
		}else{
			// echo $res;
		
	return array('status'=> false, 'msg'=> 'Could not save. Please try again!');
		}
	}


	public function addThTip(){
		$tip_msg = $this->input->post('msg');
		$tip_desc = $this->input->post('des');
		$query = "INSERT INTO `th` (`msg`, `desc`) VALUES('".$tip_msg."', '".$tip_desc."')";
		// return array('query'=> $query);
		$res = $this->db->query($query);
		if($res){
			return array('status'=> true, 'msg'=> 'Saved Successfully!');
		}else{
			// echo $res;
		
		return array('status'=> false, 'msg'=> 'Could not save. Please try again!');
		}
	}



	public function addquiz(){
		$quiz_ques = $this->input->post('ques');
		$quiz_op1 = $this->input->post('op1');
		$quiz_op2 = $this->input->post('op2');
		$quiz_op3 = $this->input->post('op3');
		$quiz_op4 = $this->input->post('op4');
		$quiz_ans = $this->input->post('ans');
		$query = "INSERT INTO `quiz` (`question`,`options1`,`options2`,`options3`,`options4`,`answer`) VALUES('".$quiz_ques."', '".$quiz_op1."','".$quiz_op2."','".$quiz_op3."','".$quiz_op4."','".$quiz_ans."')";
		// return array('query'=> $query);
		$res = $this->db->query($query);
		if($res){
			return array('status'=> true, 'msg'=> 'Saved Successfully!');
		}else{
			// echo $res;
		
		return array('status'=> false, 'msg'=> 'Could not save. Please try again!');
		}
	}


	public function addlogin(){
		$empID = $this->input->post('emp_id');
		$ManID = $this->input->post('man_id');
		$sunday = $this->input->post('sun');
		$monday = $this->input->post('mon');
		$tuesday = $this->input->post('tue');
		$wednesday = $this->input->post('wed');
		$thursday = $this->input->post('thu');
		$friday = $this->input->post('fri');
		$saturday = $this->input->post('sat');
		
		$query = "INSERT INTO `employee_login` (`EmpId`,`mgr`,`Sun`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`) VALUES('".$empID."', '".$ManID."','".$sunday."','".$monday."','".$tuesday."','".$wednesday."','".$thursday."','".$friday."','".$saturday."')";
		// return array('query'=> $query);
		$res = $this->db->query($query);
		if($res){
			return array('status'=> true, 'msg'=> 'Saved Successfully!');
		}else{
			// echo $res;
		
		return array('status'=> false, 'msg'=> 'Could not save. Please try again!');
		}
	}



	public function addmetrics(){
		$emp = $this->input->post('empId');
		$man = $this->input->post('manId');
		$CSAT = $this->input->post('csat_metrics');
		$AHT = $this->input->post('aht_metrics');
		$RR = $this->input->post('rr_metrics');
		
		$query = "INSERT INTO `metrics` (`EmpId`,`mgr`,`csat`,`aht`,`rr`) VALUES('".$emp."', '".$man."','".$CSAT."','".$AHT."','".$RR."')";
		// return array('query'=> $query);
		$res = $this->db->query($query);
		if($res){
			return array('status'=> true, 'msg'=> 'Saved Successfully!');
		}else{
			// echo $res;
		
		return array('status'=> false, 'msg'=> 'Could not save. Please try again!');
		}
	}



	public function addComment(){
		$emp = $this->input->post('EID');
		$message = $this->input->post('msg');
		$comID = $this->input->post('com');
		
		$query = "INSERT INTO `comments` (`EmpId`,`msg`,`commentor`) VALUES('".$emp."', '".$message."','".$comID."')";
		// return array('query'=> $query);
		$res = $this->db->query($query);
		if($res){
			return array('status'=> true, 'msg'=> 'Saved Successfully!');
		}else{
			// echo $res;
		
		return array('status'=> false, 'msg'=> 'Could not save. Please try again!');
		}
	}


	public function addshift(){
		$employee = $this->input->post('Empid');
		$manager = $this->input->post('Manid');
		$shift_from = $this->input->post('shiftStart');
		$shift_to = $this->input->post('shiftEnd');
		
		$query = "INSERT INTO `users` (`EmpId`,`mgr`,`shiftFrom`,`shiftTo`) VALUES('".$employee."', '".$manager."','".$shift_from."','".$shift_to."')";
		// return array('query'=> $query);
		$res = $this->db->query($query);
		if($res){
			return array('status'=> true, 'msg'=> 'Saved Successfully!');
		}else{
			// echo $res;
		
		return array('status'=> false, 'msg'=> 'Could not save. Please try again!');
		}
	}



	public function addEmp(){
		$Emp_Id = $this->input->post('Id');
		$password = $this->input->post('password');
		$manager = $this->input->post('managerId');
		$user_name = $this->input->post('username');
		// $picture =  $this->input->post('image');
		$shift_from = $this->input->post('Sfrom');
		$shift_to = $this->input->post('Sto');
		

		$query = "INSERT INTO `users` (`EmpId`, `password`,`mgr`,`name`,`shiftFrom`,`shiftTo`) VALUES('".$Emp_Id."', '".$password."', '".$manager."', '".$user_name."', '".$shift_from."', '".$shift_to."')";
		// return array('query'=> $query);
		$res = $this->db->query($query);
		if($res){
			return array('status'=> true, 'msg'=> 'Saved Successfully!');
		}else{
			// echo $res;
		
			return array('status'=> false, 'msg'=> 'Could not save. Please try again!');
		}
	}


public function get_all_user(){
	
		$messages1 = [];
		$result = $this->db->query('select * from users')->result_array();
		 return $result;
	}


}