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

}

?>