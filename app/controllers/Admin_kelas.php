<?php 

class Admin_kelas extends Controller{

    public function index(){
        $kelas = $this->model('Kelas_model')->getAllKelas();

        $data = [
            'judul' => 'Manajemen Kelas',
            'kelas' => $kelas
        ];

        $this->view('templates/header',$data);
        $this->view('admin/admin_kelas/index', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        $data = [
            'judul' => 'Form Tambah Kelas'
        ];
        $this->view('templates/header',$data);
        $this->view('admin/admin_kelas/tambah', $data);
        $this->view('templates/footer');
    }

    public function add(){
        $tambah = $this->model('Kelas_model')->tambahKelas($_POST);
        if ($tambah > 0) {
            echo "<script>alert('Tambah Berhasil');</script>";
            redirect("/admin_kelas/index");
        }else {
            echo "<script>alert('Tambah Gagal');</script>";
            redirect("/admin_kelas/index");
        }
    }

    public function edit($id){
        $edit = $this->model('Kelas_model')->editKelas($id);

        $data = [
            'judul' => 'Form Edit Kelaas',
            'kelas' => $edit
        ];

        $this->view('templates/header',$data);
        $this->view('admin/admin_kelas/edit', $data);
        $this->view('templates/footer');
    }

    public function update(){
        $update = $this->model('Kelas_model')->updateKelas($_POST);
        if ($update > 0) {
            echo "<script>alert('Update Berhasil');</script>";
            redirect("/admin_kelas/index");
        }else {
            echo "<script>alert('Update Gagal');</script>";
            redirect("/admin_kelas/index");
        }
    }

    public function delete($id){
        $delete = $this->model('Kelas_model')->deleteKelas($id);
        if ($delete) {
            echo "<script>alert('Delete Berhasil');</script>";
            redirect("/admin_kelas/index");
        }else {
            echo "<script>alert('Delete Gagal');</script>";
            redirect("/admin_kelas/index");
        }
    }

} 