<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->model('model_artikel');
		$data['artikel'] = $this->model_artikel->getDataArtikel();
		if ($this->input->post('keyword')) {
			$data['artikel'] = $this->model_artikel->cariDataArtikel();
		}
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}
}
