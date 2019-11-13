<?php 
class Model_register extends CI_Model{
    public function tambah($data,$table){
        $this->db->insert($table,$data);

    }
}
?>