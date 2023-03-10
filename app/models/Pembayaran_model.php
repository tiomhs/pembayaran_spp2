<?php 

class Pembayaran_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPembayaran(){
        $query = "SELECT * FROM pembayaran";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getPembayaranById($id){
        $query = "SELECT * FROM pembayaran WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }

    public function tambahPembayaran($data){
        $query = "INSERT INTO pembayaran VALUES(null, :tahun_ajaran, :nominal)";
        $this->db->query($query);
        $this->db->bind('tahun_ajaran', $data['tahun_ajaran']);
        $this->db->bind('nominal', $data['nominal']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahPembayaran($data){
        $query = "UPDATE pembayaran SET tahun_ajaran=:tahun_ajaran, nominal=:nominal WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('tahun_ajaran', $data['tahun_ajaran']);
        $this->db->bind('nominal', $data['nominal']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusPembayaran($id){
        $query = "CALL DeleteDataPembayaran(:id)";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}