<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
		if (!$this->session->userdata('logged_in')){          		
			redirect('login');
			exit();
		}
    }

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('homepage');
	}

	public function editIntroduce()
	{
		if (!session_id()) session_start();

		$submitInfo = array($this->input->post('introduce1'), 
			           		$this->input->post('introduce1'),
			           		$this->input->post('introduce1'),
			           		$this->input->post('introduce1'),
			           		$this->input->post('introduce1'));

	    $this->load->model('homeModel');

	    var_dump($submitInfo);
	    
	    for ($i=0; $i < 5; $i++) { 
	    	
	    }
	}
}

?>