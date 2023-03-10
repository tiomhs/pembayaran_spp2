<?php 

class Home extends Controller{
    public function index(){
        $transaksi = $this->model('Transaksi_model')->getTransaksiById($_SESSION['id_siswa']);
        $siswa = $this->model('Siswa_model')->getSiswaById($_SESSION['id_siswa']);

        $data = [
            'judul' => 'Home',
            'siswa' => $siswa,
            'transaksi' => $transaksi
        ];
        $this->view('templates/header', $data);
        $this->view('Home/index',$data);
        $this->view('templates/footer');
    }
}