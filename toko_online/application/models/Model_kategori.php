<?php 
class Model_kategori extends CI_Model{
    public function tampil_data(){
       return $this->db->get('kategori');

    }

    public function tambah_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function filter($where,$table){
        $this->db->where($where);
        return $this->db->get($table);
    }
}


?>
