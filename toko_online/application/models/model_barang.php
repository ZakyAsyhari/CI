<?php 
class Model_barang extends CI_Model{
    public function tampil_data(){
        return $this->db->get('barang');
    }

    public function tambah_barang($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id){
        $result = $this->db->where('id_barang',$id)
                            ->limit(1)
                            ->get('barang');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

}

?>