<?php 
	if(!defined('BASEPATH')) exit('No direct script access allowed!');

class UserDashboard extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('MdDash');
	}

	public function index(){
		if($this->session->userdata('emp_id')){
			if($this->session->userdata('type')!='1'){
			$data['title'] = "Dashboard";
			$data['proposals'] = "";
			$data['proposalsList'] = "";
			$data['payslip'] = "";
			$data['active201'] = "";
			$data['activeDash'] = "active";
			$data['active201View']= ""; 
			$data['salaryConfig']= ""; 
			$data['leaveRequest']= "";
			$data['leaveHistory']= "";
			$data['leaveIncentives']= "";
			$data['leaveSummary']= "";
			$data['OtRequestForm']= "";
			$data['OtHistory']= "";
			$data['viewSuspension']= "";
			$data['suspendEmployee']= "";
			$data['cashAdvance']= "";
			$data['cashAdvanceHistory']= "";
			$data['otherLoans']= "";
			$data['otherLoansHistory']= "";
			$data['calendar']= "";
			$data['holiday']= "";
			$data['holidayList']= "";
			$data['leaveHistoryForm']= "";
			$data['OtRequestFormHIstory']= "";
			$data['setting']= "";
			$data['sess_email'] = $this->session->userdata('email');
			$data['point'] = $this->MdDash->getPoint();
			$data['pointOwner'] = $this->MdDash->getPointOwner($this->session->userdata('emp_id'));
			$data['item'] = $this->MdDash->getItem();
			$data['profile'] = $this->MdDash->getProfile();
			$this->load->view("common/head",$data);
			$this->load->view("common/header");
			$this->load->view("common/userNav");
			$this->load->view('users/index');
			$this->load->view('common/foot');
			$this->load->view('common/footer');
		}else{
			redirect('Dashboard');
		}

	}else{
			redirect('/');
		}
	
}
	public function claimPrice(){
		date_default_timezone_set('Asia/Manila');
     	$date=date('Y-m-d');

     	$array = array(
     		'emp_id' => $this->session->userdata('emp_id'),
     		'item_id' => $_GET['id'],
     		'date' => $date
     	);
     	$array1 = array(
     		'points' => '0',
     	);

     	$query = $this->MdDash->insertHistory($array);
     	$query1 = $this->MdDash->updatePoints($this->session->userdata('emp_id'),$array1);

     	if($query && $query1){
     		echo '1';
     	}else{
     		echo '0';
     	}
	}	
}
?>
