<?php 

class Admin_transaksi extends Controller{
    public function index(){
        $siswa = $this->model('Siswa_model')->getSiswaWithRelation();

        $data = [
            'judul' => 'Manajemen Transaksi',
            'siswa' => $siswa
        ];

        $this->view('templates/header',$data);
        $this->view('admin/admin_transaksi/index', $data);
        $this->view('templates/footer');
    }

    public function history($id){
        $history = $this->model('Transaksi_model')->getTransaksiById($id);

        $data = [
            'judul' => 'History Pembayaran',
            'history' => $history
        ];

        $this->view('templates/header',$data);
        $this->view('admin/admin_transaksi/history', $data);
        $this->view('templates/footer');
    }

    public function add($id){
        $siswa = $this->model('Siswa_model')->getSiswaWithRelationId($id);
        $history = $this->model('Transaksi_model')->getTransaksiById($id);
        $bulan = [
            '6','7','8','9','10','11','12','1','2','3','4','5',
        ];

        $bulan_dibayar = [];
        foreach ($history as $h) {
            array_push($bulan_dibayar, $h['bulan_dibayar']);
        }

        $data = [
            'judul' => 'Bayar SPP',
            'history' => $history,
            'bulan_dibayar' => $bulan_dibayar,
            'bulan' => $bulan,
            'siswa' => $siswa
        ];
        
        $this->view('templates/header',$data);
        $this->view('admin/admin_transaksi/bayar', $data);
        $this->view('templates/footer');

    }

    public function bayar(){
        // var_dump($_POST);
        $tambah = $this->model('Transaksi_model')->tambahTransaksi($_POST);
        if ($tambah) {
            redirect('/admin_transaksi/index');
        }
    }

    public function cetakLaporan(){
        $siswa = $this->model('Siswa_model')->getSiswaWithRelation();
        $bulan = [
            '6','7','8','9','10','11','12','1','2','3','4','5',
        ];

        $transaksi = [];
        foreach ($siswa as $s) {
            $transaksi[$s['id']] = [];
            $x = $this->model('Transaksi_model')->getTransaksiById($s['id']);
            foreach ($x as $h) {
                array_push($transaksi[$s['id']], $h['bulan_dibayar']);
            }
        }

        $data = [
            'judul' => 'Cetak Laporan',
            'bulan' => $bulan,
            'transaksi' => $transaksi,
            'siswa' => $siswa
        ];

        $this->view('admin/admin_transaksi/cetakLaporan',$data);
    }
}