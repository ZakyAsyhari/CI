<?php 
class Admin extends CI_Controller {
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
    public function index() {
        $this->load->view('admin/templates/aheader');
        $this->load->view('admin/templates/asidebar');
        $this->load->view('admin/dashadmin');
        $this->load->view('admin/templates/afooter');
    }
    public function datakategori() {
        $this->load->view('admin/templates/aheader');
        $this->load->view('admin/templates/asidebar');
        $this->load->view('admin/datakategori');
        $this->load->view('admin/templates/afooter');
    }
}
?>