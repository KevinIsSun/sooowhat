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

		$this->load->view('homepage', $this->getAllData());
	}

	public function editIntroduce()
	{
		$submitInfo = array($this->input->post('introduce1'), 
			           		$this->input->post('introduce2'),
			           		$this->input->post('introduce3'),
			           		$this->input->post('introduce4'),
			           		$this->input->post('introduce5'));

	    $this->load->model('homeModel');

	    for ($i=0; $i < 5; $i++) { 
	    	if ($submitInfo[$i]) {
	    		$this->homeModel->editIntroduce($submitInfo[$i], $i);
	    	}
	    }

	    $this->load->view('homepage', $this->getAllData());
	}

	public function editProject()
	{
		$submitInfo = array($this->input->post('project1'), 
			           		$this->input->post('project2'),
			           		$this->input->post('project3'),
			           		$this->input->post('project4'),
			           		$this->input->post('project5'));

	    $this->load->model('homeModel');

	    for ($i=0; $i < 5; $i++) { 
	    	if ($submitInfo[$i]) {
	    		$this->homeModel->editProject($submitInfo[$i], $i);
	    	}
	    }

	    $this->load->view('homepage', $this->getAllData());
	}

	public function editEvaluation()
	{
		$submitInfo = array($this->input->post('evaluation1'), 
			           		$this->input->post('evaluation2'),
			           		$this->input->post('evaluation3'),
			           		$this->input->post('evaluation4'),
			           		$this->input->post('evaluation5'));

	    $this->load->model('homeModel');

	    for ($i=0; $i < 5; $i++) { 
	    	if ($submitInfo[$i]) {
	    		$this->homeModel->editEvaluation($submitInfo[$i], $i);
	    	}
	    }

	    $this->load->view('homepage', $this->getAllData());
	}

	public function getAllData()
	{
		$this->load->model('homeModel');
		$data['introduce'] = $this->homeModel->getIntroduceData();
		$data['project'] = $this->homeModel->getProjectData();
		$data['evaluation'] = $this->homeModel->getEvaluationData();

		return $data;
	}
}

?>