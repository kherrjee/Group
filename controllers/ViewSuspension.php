<?php 
	if(!defined('BASEPATH')) exit('No direct script access allowed!');

class ViewSuspension extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('suspension_form_model');
	}

	public function index(){
		if($this->session->userdata('emp_id')){
			if($this->session->userdata('type')==='1'){
			$data['title'] = "Dashboard";
			$data['proposals'] = "";
			$data['proposalsList'] = "";
			$data['active201'] = "";
			$data['activeDash'] = "";
			$data['active201View']= ""; 
			$data['salaryConfig']= ""; 
			$data['leaveRequest']= "";
			$data['leaveHistory']= "";
			$data['leaveIncentives']= "";
			$data['leaveSummary']= "";
			$data['OtRequest']= "";
			$data['OtHistory']= "";
			$data['viewSuspension']= "active";
			$data['suspendEmployee']= "";
			$data['cashAdvance']= "";
			$data['cashAdvanceHistory']= "";
			$data['otherLoans']= "";
			$data['otherLoansHistory']= "";
			$data['calendar']= "";
			$data['holiday']= "";
			$data['holidayList']= "";
			$data['activity']= "";
			$data['activityList']= "";
			$data['item']= "";
			$data['itemList']= "";
			$data['supervisor']= "";
			$data['department']= "";
			$data['sess_email'] = $this->session->userdata('email');
			$data['email'] = $this->session->userdata('email');
			$this->load->view("common/head",$data);
			$this->load->view("common/header");
			$this->load->view("common/nav");
			$data['data'] = $this->getAll();
			$this->load->view('pages/suspension_module/suspension_list_view',$data);
			$this->load->view('common/foot');
			$this->load->view('common/footer');
			}else{
			redirect('userDashboard');
		}

	}else{
			redirect('/');
		}
	}

	public function getAll(){

		return $this->suspension_form_model->getAll();
	}

}
?>
