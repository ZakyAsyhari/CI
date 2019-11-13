<?php 
class Datakategori extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role_id') !='1'){
            $this->session->set_flashdata('pesan',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
               Anda Belum Login!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
          </div>');
          redirect('auth/login');
        }
    }
    public function index(){
        $data['kategori']=$this->model_kategori->tampil_data()->result();
        $this->load->view('admin/templates/aheader');
        $this->load->view('admin/templates/asidebar');
        $this->load->view('admin/datakategori',$data);
        $this->load->view('admin/templates/afooter');
    }

    public function tambah(){
        $kategori = $this->input->post('kategori');
        $data = array(
            'kategori ' => $kategori
        );
        $this->model_kategori->tambah_data($data,'kategori');
        redirect('admin/datakategori');
    }

    public function edit(){
        $id_kategori    = $this->input->post('id');
        $kategori       = $this->input->post('kategori');
        $data = array(
            'kategori'  => $kategori
        );
        $where = array(
            'id_kategori' => $id_kategori
        );
        $this->model_kategori->edit($where,$data,'kategori');
        redirect('admin/datakategori');
    }
    
    public function hapus($id){ 
        $where = array('id_kategori' => $id);
        $this->model_kategori->hapus($where,'kategori');
        redirect('admin/datakategori');
    }
}

?>