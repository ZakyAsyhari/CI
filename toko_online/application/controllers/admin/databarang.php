<?php 

class Databarang extends CI_Controller {
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
        $data['barang']=$this->model_barang->tampil_data()->result();
        $this->load->view('admin/templates/aheader');
        $this->load->view('admin/templates/asidebar');
        $this->load->view('admin/view_data_barang',$data);
        $this->load->view('admin/templates/afooter');
    }
    public function tambah(){
        $nama_brg   = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $stok       = $this->input->post('stok');
        $gambar     = $_FILES['gambar']['name'];
        if($gambar = ''){}else{
            $config ['upload_path'] = './upload/barang';
            $config ['allowed_types'] = 'jpg|png|jpeg|gif';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar gagal upload";
            }else{
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar
        );
        $this->model_barang->tambah_barang($data, 'barang');
        redirect('admin/databarang/index');
    }
    public function hapus($id){
        $where = array('id_barang'=> $id);
        $this->model_barang->hapus($where, 'barang');
        redirect('admin/databarang/');

    }
    public function edit_data(){
        $id_barang  = $this->input->post('id_barang');
        $nama_brg   = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $stok       = $this->input->post('stok');
        $gambar     = $_FILES['gambar']['name'];
        if($gambar = ''){}else{
            $config ['upload_path'] = './upload/barang';
            $config ['allowed_types'] = 'jpg|png|jpeg|gif';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar gagal upload";
            }else{
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array (
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar
        );
        $where = array(
            'id_barang' => $id_barang
        );
        $this->model_barang->edit_data($where,$data,'barang');
        redirect('admin/databarang/');
    }
}
?>