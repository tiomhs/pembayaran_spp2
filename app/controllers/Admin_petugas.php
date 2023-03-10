<?php 

class Admin_petugas extends Controller{
    public function index(){
        $petugas = $this->model('Petugas_model')->getAllPetugas();

        $data = [
            'judul' => 'petugas',
            'petugas' => $petugas
        ];

        $this->view('templates/header',$data);
        $this->view('admin/admin_petugas/index',$data);
        $this->view('templates/footer');
    }

    public function tambah(){
        $Pengguna = $this->model('Pengguna_model')->getAllPengguna();
        $data = [
            'judul' => 'Form Tambah petugas',
            'pengguna' => $Pengguna
        ];

        $this->view('templates/header',$data);
        $this->view('admin/admin_petugas/tambah',$data);
        $this->view('templates/footer');
    }

    public function add(){
        $tambah = $this->model('Petugas_model')->tambahpetugas($_POST);

        if($tambah > 0){
            redirect("/admin_petugas/index");
        }else {
            redirect("/admin_petugas/index");
        }
    }

    public function edit($id){

        $petugas = $this->model('Petugas_model')->getPetugasById($id);
        $Pengguna = $this->model('Pengguna_model')->getAllPengguna();
        $data = [
            'judul' => 'edit',
            'petugas' => $petugas,
            'pengguna' => $Pengguna
        ];

        $this->view('templates/header', $data);
        $this->view('admin/admin_petugas/edit', $data);
        $this->view('templates/footer');
    }

    public function update(){
        $update = $this->model('Petugas_model')->ubahPetugas($_POST);

        if($update){
            redirect("/admin_petugas/index");
        }else{
            redirect("/admin_petugas/index");
        }
    }

    public function delete($id){
        $hapus = $this->model('Petugas_model')->hapuspetugas($id);
        if($hapus){
            redirect("/admin_petugas/index");
        }
    }
}