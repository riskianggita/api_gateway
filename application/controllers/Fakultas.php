<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Fakultas extends RestController
{

	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->load->library('PHPRequests');
	}

	public function fakultas_get()
	{
		$response = Requests::get('http://localhost/service3/fakultas/fakultas');
    	echo $response->body;
	}

	public function fakultas_one_get($kode_fakultas)
	{
		$response = Requests::get('http://localhost/service3/fakultas/fakultas_one/'.$kode_fakultas);
    	echo $response->body;
	}

	public function fakultas_post()
	{
		$data = array(
			'kode_fakultas' => $this->input->post('kode_fakultas'),
			'nama_fakultas' => $this->input->post('nama_fakultas')

		);

		$response = Requests::post('http://localhost/service3/fakultas/fakultas', array(), $data);
    	echo $response->body;
	}

	public function fakultas_delete($kode_fakultas)
	{
		$response = Requests::delete('http://localhost/service3/fakultas/fakultas/'.$kode_fakultas);
    	echo $response->body;
	}

	public function fakultas_all_delete()
	{
		$response = Requests::delete('http://localhost/service3/fakultas/fakultas_all');
    	echo $response->body;
	}

	public function fakultas_update_post($kode_fakultas)
	{
		$data = array(
			'nama_fakultas' => $this->input->post('nama_fakultas'),

		);

		$response = Requests::post('http://localhost/service3/fakultas/fakultas_update/'.$kode_fakultas, array(), $data);
    	echo $response->body;
	}
}
