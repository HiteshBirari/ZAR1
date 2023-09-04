<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminTraining extends CI_Controller {

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
		$this->load->view('admintraining_message');
		$this->load->view('partials/footer');
	}
	public function uploadData2()
	{
	
		
		$this->load->model('upload_model');
		$res = $this->upload_model->upload_Data2();
		echo ($res);

	}

	//deleteData
	public function deleteData2()
	{
		$id = $_POST['I'];
		$this->load->model('upload_model');
		$this->upload_model->delete_data2($id);
	}
	
}
