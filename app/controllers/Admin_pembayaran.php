<?php 

class Admin_pembayaran extends Controller{
    public function index(){
        $pembayaran = $this->model('Pembayaran_model')->getAllPembayaran();

        $data = [
            'judul' => 'Pembayaran',
            'pembayaran' => $pembayaran
        ];

        $this->view('templates/header',$data);
        $this->view('admin/admin_pembayaran/index',$data);
        $this->view('templates/footer');
    }

    public function tambah(){
        $data = [
            'judul' => 'Form Tambah Pembayaran'
        ];

        $this->view('templates/header',$data);
        $this->view('admin/admin_pembayaran/tambah');
        $this->view('templates/footer');
    }

    public function add(){
        $tambah = $this->model('Pembayaran_model')->tambahPembayaran($_POST);

        if($tambah > 0){
            redirect("/admin_pembayaran/index");
        }else {
            redirect("/admin_pembayaran/index");
        }
    }

    public function edit($id){

        $Pembayaran = $this->model('Pembayaran_model')->getPembayaranById($id);
        $data = [
            'judul' => 'edit',
            'pembayaran' => $Pembayaran
        ];

        $this->view('templates/header', $data);
        $this->view('admin/admin_pembayaran/edit', $data);
        $this->view('templates/footer');
    }

    public function update(){
        $update = $this->model('Pembayaran_model')->ubahPembayaran($_POST);

        if($update){
            redirect("/admin_pembayaran/index");
        }else{
            redirect("/admin_pembayaran/index");
        }
    }

    public function delete($id){
        $hapus = $this->model('Pembayaran_model')->hapusPembayaran($id);
        if($hapus){
            redirect("/admin_pembayaran/index");
        }
    }
}