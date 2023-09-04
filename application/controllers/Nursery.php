<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nursery extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('partials/header');
		$this->load->view('nursery_message');
		$this->load->view('partials/footer');
	}

	public function uploadNursery()
	{


		$this->load->model('upload_model');
		$res = $this->upload_model->upload_Nursery();
		echo ($res);

	}
	// public function getData()
	// {
	// 	$this->load->model('get_model');
	// 	$getEmpDetails = $this->get_model->get_Data();
	// 	$data['data'] = $getEmpDetails;
	// 	$this->output->set_content_type('application/json')->set_output(json_encode($data));
	// }

	// public function getRes()
	// {
	// 	$this->load->model('get_model');
	// 	$getEmpDetails2 = $this->get_model->get_Research();
	// 	$data['data'] = $getEmpDetails2;
	// 	$this->output->set_content_type('application/json')->set_output(json_encode($data));
	// }
}
