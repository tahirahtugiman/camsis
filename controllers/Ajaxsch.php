<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ajaxsch extends CI_Controller {
	public function index(){
	//echo 'testt';
		 $m = (($this->input->post('m')) < 10) ? '0'.$this->input->post('m') : $this->input->post('m');
	
	     $week2 = (($this->input->post('week2')) != '') ? $this->input->post('week2') : NULL;
	     $week4 = (($this->input->post('week4')) != '') ? $this->input->post('week4') : NULL;
		
        if(isset($_POST['week2']) || isset($_POST['week4'])){	
      
		   $date_cap = array('dept_code'=>$_POST['dept'],'week_2'=>$week2,'week_4'=>$week4,'month'=>$m,'year'=>$this->input->post('y'));
		   //echo "<pre>";
		   //print_r($date_cap);
		  //exit();
		    $this->load->model('insert_model');
			$this->insert_model->ins_schbi_weekly($date_cap);
			echo json_encode($date_cap);
			//redirect('sowr_joint_inspection?m='.$_POST['month'].'&y='.$_POST['year']);
			}
	}
	
}
?>