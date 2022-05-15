<?php

class Data_barang extends CI_Controller{

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
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi()
    {
        $nama_barang    = $this->input->post('nama_barang');
        $kategori    = $this->input->post('kategori');
        $detail_barang  =$this->input->post('detail_barang');
        $harga   = $this->input->post('harga');
        $stok   = $this->input->post('stok');
        $gambar    = $_FILES['gambar']['name'];
        if ($gambar = ''){}else{
            $config ['upload_path'] = './upload';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar gagal di upload";
            }else {
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_barang'   =>$nama_barang,
            'kategori'      =>$kategori,
            'detail_barang' =>$detail_barang,
            'harga'         =>$harga,
            'stok'          =>$stok,
            'gambar'        =>$gambar
        );

        $this->model_barang->tambah_barang($data, 'barang');
        redirect('admin/data_barang/index');
    }
    public function edit($id)
    {
        $where = array('kode_barang' =>$id);
        $data['barang'] = $this->model_barang->edit_barang($where, 'barang')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }

        public function update(){
            $id                     = $this->input->post('kode_barang');
            $nama_barang            = $this->input->post('nama_barang');
            $kategori               = $this->input->post('kategori');
            $detail_barang          = $this->input->post('detail_barang');
            $harga                  = $this->input->post('harga');
            $stok                   = $this->input->post('stok');

            $data = array(
                'nama_barang'       => $nama_barang,
                'kategori'          => $kategori,
                'detail_barang'     => $detail_barang,
                'harga'             => $harga,
                'stok'              => $stok
            );

            $where = array(
                'kode_barang' => $id
            );

            $this->model_barang->update_data($where, $data, 'barang');
            redirect('admin/data_barang/index');
        }

        public function hapus ($id){
            $where = array('kode_barang' => $id);
            $this->model_barang->hapus_data($where, 'barang');
            redirect('admin/data_barang/index');
        }

        public function detail($id){
            $data['barang'] = $this->model_barang->detail_barang($id);
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/detail_barang',$data);
            $this->load->view('templates_admin/footer'); 
        }
}