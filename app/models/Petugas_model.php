<?php 

class Petugas_model{
    protected $db ;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getIdPetugasBySession($id_pengguna){
        $query = "SELECT * FROM petugas WHERE pengguna_id = :pengguna_id";
        $this->db->query($query);
        $this->db->bind('pengguna_id', $id_pengguna);
        return $this->db->singleSet();
    }
    public function getPetugasById($id){
        $query = "SELECT * FROM petugas WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }

    public function getAllPetugas(){
        $query = "SELECT petugas.id, petugas.nama,petugas.pengguna_id, pengguna.username  FROM petugas INNER JOIN pengguna on petugas.pengguna_id = pengguna.id";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function tambahPetugas($data){
        $query = "INSERT INTO petugas VALUES(null, :nama, :pengguna_id)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('pengguna_id', $data['pengguna_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahPetugas($data){
        // var_dump($data);die;
        $query = "UPDATE petugas SET nama=:nama, pengguna_id=:pengguna_id WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('pengguna_id', $data['pengguna_id']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusPetugas($id){        
        $query = "CALL DeleteDataPetugas(:id)";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}