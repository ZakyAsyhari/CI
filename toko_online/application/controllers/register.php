<?php 
class Register extends CI_Controller{
    public function tambah(){
        $nama   = $this->input->post('nama');
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');
        $role_id    = 2;

        $data = array(
            'nama'      =>$nama,
            'username'  =>$username,
            'password'  =>$password,
            'role_id'   =>$role_id
        );
        $this->model_register->tambah($data,'user');
        redirect('auth/login');
    }
}
?>