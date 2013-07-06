<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->load->view('admin/header');
		$this->load->view('admin/footer');
	}

	/**
	 * 问题列表 显示所有问题
	 * question list
	 *
	 */
	public function questions()
	{
		$this->load->model("QuestionModel");
		$data['query'] = $this->QuestionModel->get_last_ten_entries();


		$this->load->view('admin/header');
		print_r($data);
		$this->load->view('admin/footer');
	}


	/**
	 * 问题列表 显示所有问题
	 * level list
	 *
	 */
	public function levels()
	{

	}



	/**
	 * 问题列表 显示所有问题
	 * setting
	 *
	 */
	public function setting()
	{

	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */