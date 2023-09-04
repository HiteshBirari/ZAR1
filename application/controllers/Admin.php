<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

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
		$this->load->view('admin_message');
		$this->load->view('partials/footer');
	}
	public function uploadData()
	{


		$this->load->model('upload_model');
		$res = $this->upload_model->upload_Data();
		echo ($res);

	}

	//deleteData
	public function deleteData()
	{
		$id = $_POST['I'];
		$this->load->model('upload_model');
		$this->upload_model->delete_data($id);
	}

	public function deleteData2()
	{
		$id2 = $_POST['I'];
		$this->load->model('upload_model');
		$this->upload_model->delete_data2($id2);
	}


	//updateData
	public function updateResearch1()
	{
		$this->load->model('upload_model');
		$this->upload_model->update_research1();
		echo true;
	}


	//updateData2
	public function updateResearch2()
	{
		$this->load->model('upload_model');
		$this->upload_model->update_research2();
		echo true;
	}

	//updateData
	public function updateTraining1()
	{
		$this->load->model('upload_model');
		$this->upload_model->update_training1();
		echo true;
	}


	//updateData2
	public function updateTraining2()
	{
		$this->load->model('upload_model');
		$this->upload_model->update_training2();
		echo true;
	}

}