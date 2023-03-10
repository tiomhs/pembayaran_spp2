<?php 

class Transaksi_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTransaksiById($id){
        $query = "SELECT transaksi.id, transaksi.tanggal_bayar, transaksi.bulan_dibayar, transaksi.tahun_dibayar, siswa.id AS siswa_id, siswa.nisn, siswa.nama, petugas.nama AS petugas_nama, pembayaran.nominal FROM `transaksi` INNER JOIN siswa ON transaksi.siswa_id = siswa.id INNER JOIN petugas ON transaksi.petugas_id = petugas.id INNER JOIN pembayaran ON transaksi.pembayaran_id = pembayaran.id WHERE transaksi.siswa_id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        return $this->db->resultSet();
    }

    public function getAllTransaksi(){
        $query = "SELECT transaksi.id, transaksi.tanggal_bayar, transaksi.bulan_dibayar, transaksi.tahun_dibayar, siswa.nisn, siswa.nama, petugas.nama AS petugas_nama, pembayaran.nominal FROM `transaksi` INNER JOIN siswa ON transaksi.siswa_id = siswa.id INNER JOIN petugas ON transaksi.petugas_id = petugas.id INNER JOIN pembayaran ON transaksi.pembayaran_id = pembayaran.id";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function tambahTransaksi($data){
        $date = date("Y-m-d H:i:s");
        $year = date("Y");
        foreach ($data['bulan_dibayar'] as $bulan) {
            // var_dump($bulan);die;
            $query = "INSERT INTO transaksi VALUES(null, :tanggal_bayar, :bulan_dibayar, :tahun_dibayar, :siswa_id, :petugas_id, :pembayaran_id)";
            $this->db->query($query);
            $this->db->bind('tanggal_bayar', $date);
            $this->db->bind('bulan_dibayar', $bulan);
            $this->db->bind('tahun_dibayar', $year);
            $this->db->bind('siswa_id', $data['siswa_id']);
            $this->db->bind('petugas_id', $data['petugas_id']);
            $this->db->bind('pembayaran_id', $data['pembayaran_id']);
            $this->db->execute();
        }
        return $this->db->rowCount();
    }

}