<?php

class Kategori extends CI_Controller
{
    public function news()
    {
        $data['news'] = $this->model_kategori->news()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('news', $data);
        $this->load->view('templates_admin/footer');
    }

    public function hot()
    {
        $data['hot'] = $this->model_kategori->hot()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('hot', $data);
        $this->load->view('templates_admin/footer');
    }

    public function health()
    {
        $data['health'] = $this->model_kategori->health()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('health', $data);
        $this->load->view('templates_admin/footer');
    }

    public function inet()
    {
        $data['inet'] = $this->model_kategori->inet()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('inet', $data);
        $this->load->view('templates_admin/footer');
    }
    public function food()
    {
        $data['food'] = $this->model_kategori->food()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('food', $data);
        $this->load->view('templates_admin/footer');
    }

    public function oto()
    {
        $data['oto'] = $this->model_kategori->oto()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('oto', $data);
        $this->load->view('templates_admin/footer');
    }
    public function sport()
    {
        $data['sport'] = $this->model_kategori->sport()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sport', $data);
        $this->load->view('templates_admin/footer');
    }
}
