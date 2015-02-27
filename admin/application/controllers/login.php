<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('login');
	}

	public function submit()
	{
		/* 接收表单数据 */
		if (!session_id()) session_start();

	    $submitInfo = array();
	    $submitInfo["username"] = $this->input->post('username');
	    $submitInfo["password"] = $this->input->post('password');

	    $this->load->model('loginModel');

	    $info = $this->loginModel->existUser($submitInfo["username"], $submitInfo["password"]);

	    if ($info) {
	    	redirect('homepage');
	    }

	    $data['info'] = "登陆失败，请检查用户名和密码";
	    $this->load->view('login', $data);
	}
}

