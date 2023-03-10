<?php 

class Admin_Siswa extends Controller{
    public function index(){
        $siswa = $this->model('Siswa_model')->getSiswaWithRelation();

        $data = [
            'judul' => 'Siswa',
            'siswa' => $siswa
        ];

        $this->view('templates/header',$data);
        $this->view('admin/admin_siswa/index',$data);
        $this->view('templates/footer');
    }

    public function tambah(){
        $Pengguna = $this->model('Pengguna_model')->getPenggunaByRole('2');
        $kelas = $this->model('Kelas_model')->getAllKelas();
        $Pembayaran = $this->model('Pembayaran_model')->getAllPembayaran();

        $data = [
            'judul' => 'Form Tambah petugas',
            'pengguna' => $Pengguna,
            'kelas' => $kelas,
            'pembayaran' => $Pembayaran
        ];

        $this->view('templates/header',$data);
        $this->view('admin/admin_siswa/tambah',$data);
        $this->view('templates/footer');
    }

    public function add(){
        $tambah = $this->model('Siswa_model')->tambahSiswa($_POST);

        if($tambah > 0){
            redirect("/admin_siswa/index");
        }else {
            redirect("/admin_siswa/index");
        }
    }

    public function edit($id){
        $Pengguna = $this->model('Pengguna_model')->getPenggunaByRole('2');
        $kelas = $this->model('Kelas_model')->getAllKelas();
        $Pembayaran = $this->model('Pembayaran_model')->getAllPembayaran();
        $Siswa = $this->model('Siswa_model')->getSiswaById($id);
        $data = [
            'judul' => 'edit',
            'siswa' => $Siswa,
            'pengguna' => $Pengguna,
            'kelas' => $kelas,
            'pembayaran' => $Pembayaran
        ];

        $this->view('templates/header', $data);
        $this->view('admin/admin_siswa/edit', $data);
        $this->view('templates/footer');
    }

    public function update(){
        $update = $this->model('Siswa_model')->ubahSiswa($_POST);

        if($update){
            redirect("/admin_siswa/index");
        }else{
            redirect("/admin_siswa/index");
        }
    }

    public function delete($id){
        $hapus = $this->model('Siswa_model')->hapusSiswa($id);
        if($hapus){
            redirect("/admin_siswa/index");
        }
    }
}