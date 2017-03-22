<?php 
	if(!defined('BASEPATH')) exit('No direct script access allowed!');

class Calendar extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('common/head');
		$this->load->view('common/sidebar');
		$this->load->view('pages/configuration_module/calendar_view');
	}
}
?>
