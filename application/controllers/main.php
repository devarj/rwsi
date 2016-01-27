<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('88help_helper');
		$this->load->model('Common_model', 'cmodel');
	}
	
	public function index()
	{
		$this->load->view('index');
	}
	
	public function whyus(){
		$this->load->view('whyus');
	}
	
	public function aboutus(){
		$this->load->view('location');
	}
	
	public function contact(){
		$this->load->view('contactus');
	}
	
	public function services($page){
		if($page == 'exterior'){
			$this->load->view($page);
		}
		else if($page == 'roof-restoration'){
			$this->load->view($page);
		}
		else if($page == 'interior'){
			$this->load->view($page);
		}
	}
	
	public function products($page){
		
		$this->load->view($page);
	
	}
	

	
	public function projects($filter){
		$where['status'] = $filter;
		$data['title'] = $filter;
		$data['projects'] = $this->cmodel->get_where('projects', $where, 1);
	//	$data['projects'] = $this->cmodel->get('projects');
		$this->load->view('projects', $data);
	
	}
	
	public function system(){
		$this->load->view('system');
	}
	
}