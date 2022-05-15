<?php

class Kategori extends CI_Controller{
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik',$data);
        $this->load->view('templates/footer');
    }

    public function pakaian_pria()
    {
        $data['pakaian_pria'] = $this->model_kategori->data_pakaian_pria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_pria',$data);
        $this->load->view('templates/footer');
    }

    public function pakaian_wanita()
    {
        $data['pakaian_wanita'] = $this->model_kategori->data_pakaian_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_wanita',$data);
        $this->load->view('templates/footer');
    }

    public function pakaian_anak_anak()
    {
        $data['pakaian_anak_anak'] = $this->model_kategori->data_pakaian_anak_anak()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_anak_anak',$data);
        $this->load->view('templates/footer');
    }

    public function alat_masak()
    {
        $data['alat_masak'] = $this->model_kategori->data_alat_masak()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('alat_masak',$data);
        $this->load->view('templates/footer');
    }

    public function alat_musik()
    {
        $data['alat_musik'] = $this->model_kategori->data_alat_musik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('alat_musik',$data);
        $this->load->view('templates/footer');
    }
}