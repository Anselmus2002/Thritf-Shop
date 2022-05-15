<?php

class Data_user extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
           redirect('auth/login');
        }
    }

    public function index()
    {
        $data['user'] = $this->model_barang->tampil_user()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_user', $data);
        $this->load->view('templates_admin/footer');
    }

    public function hapus ($id){
        $where = array('id' => $id);
        $this->model_barang->hapus_data($where, 'user');
        redirect('admin/data_user/index');
    }
}