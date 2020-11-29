<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Dosen extends RestController
{

	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->load->library('PHPRequests');
	}

	public function dosen_get()
	{
		$response = Requests::get('http://localhost/service2/dosen/dosen');
    	echo $response->body;
	}

	public function dosen_one_get($nip)
	{
		$response = Requests::get('http://localhost/service2/dosen/dosen_one/'.$nip);
    	echo $response->body;
	}

	public function dosen_post()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'nip' => $this->input->post('nip')

		);

		$response = Requests::post('http://localhost/service2/dosen/dosen', array(), $data);
    	echo $response->body;
	}

	public function dosen_delete($nip)
	{
		$response = Requests::delete('http://localhost/service2/dosen/dosen/'.$nip);
    	echo $response->body;
	}

	public function dosen_all_delete()
	{
		$response = Requests::delete('http://localhost/service2/dosen/dosen_all');
    	echo $response->body;
	}

	public function dosen_update_post($nip)
	{
		$data = array(
			'nama' => $this->input->post('nama'),

		);

		$response = Requests::post('http://localhost/service2/dosen/dosen_update/'.$nip, array(), $data);
    	echo $response->body;
	}
}
