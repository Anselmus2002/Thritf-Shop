<?php

class Model_barang extends CI_Model{
    public function tampil_data(){
        return $this->db->get('barang');
    }

    public function tambah_barang($data,$table){
        $this->db->insert($table,$data);
    }

        public function edit_barang($where,$table){
            return $this->db->get_where($table,$where);
        }

        public function update_data($where, $data, $table){
            $this->db->where($where);
            $this->db->update($table, $data);
        }

        public function hapus_data($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        } 
        
        public function find($id){
            $result = $this->db->where('kode_barang', $id)->limit(1)->get('barang');
            if($result->num_rows() > 0){
                return $result->row();
            }else{
                return array();
            }
        }

        public function detail_barang($id){
            $result = $this->db->where('kode_barang', $id)->get('barang');
            if($result->num_rows() > 0){
                return $result->result();
            }else{
                return false;
            }
        }

        public function tampil_user(){
            return $this->db->get('user');
        }

        public function hapus_user($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        } 
    }