<?php 

class Admin_pengguna extends Controller{
    public function index(){
        $pengguna = $this->model('Pengguna_model')->getAllPengguna();

        $data = [
            'judul' => 'Pengguna',
            'pengguna' => $pengguna
        ];

        $this->view('templates/header',$data);
        $this->view('admin/admin_pengguna/index',$data);
        $this->view('templates/footer');
    }

    public function tambah(){
        $data = [
            'judul' => 'Form Tambah Pengguna'
        ];

        $this->view('templates/header',$data);
        $this->view('admin/admin_pengguna/tambah');
        $this->view('templates/footer');
    }

    public function add(){
        $tambah = $this->model('Pengguna_model')->tambahPengguna($_POST);

        if($tambah > 0){
            redirect("/admin_pengguna/index");
        }else {
            redirect("/admin_pengguna/index");
        }
    }

    public function edit($id){

        $pengguna = $this->model('Pengguna_model')->getPenggunaById($id);
        $data = [
            'judul' => 'edit',
            'pengguna' => $pengguna
        ];

        $this->view('templates/header', $data);
        $this->view('admin/admin_pengguna/edit', $data);
        $this->view('templates/footer');
    }

    public function update(){
        $update = $this->model('Pengguna_model')->ubahPengguna($_POST);

        if($update){
            redirect("/admin_pengguna/index");
        }else{
            redirect("/admin_pengguna/index");
        }
    }

    public function delete($id){
        $hapus = $this->model('Pengguna_model')->hapusPengguna($id);
        if($hapus){
            redirect("/admin_pengguna/index");
        }
    }
}