<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Mahasiswa extends RestController
{

	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->load->library('PHPRequests');
	}

	public function mahasiswa_get()
	{
		$response = Requests::get('http://localhost/service1/mahasiswa/mahasiswa');
    	echo $response->body;
	}

	public function mahasiswa_one_get($nim)
	{
		$response = Requests::get('http://localhost/service1/mahasiswa/mahasiswa_one/'.$nim);
    	echo $response->body;
	}

	public function mahasiswa_post()
	{
		$data = array(
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'no_hp' => $this->input->post('no_hp'),
		);

		$response = Requests::post('http://localhost/service1/mahasiswa/mahasiswa', array(), $data);
    	echo $response->body;
	}

	public function mahasiswa_delete($nim)
	{
		$response = Requests::delete('http://localhost/service1/mahasiswa/mahasiswa/'.$nim);
    	echo $response->body;
	}

	public function mahasiswa_all_delete()
	{
		$response = Requests::delete('http://localhost/service1/mahasiswa/mahasiswa_all');
    	echo $response->body;
	}

	public function mahasiswa_update_post($nim)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'no_hp' => $this->input->post('no_hp'),
		);

		$response = Requests::post('http://localhost/service1/mahasiswa/mahasiswa_update/'.$nim, array(), $data);
    	echo $response->body;
	}
}
