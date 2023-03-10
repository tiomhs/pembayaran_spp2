<?php 

class Kelas_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKelas(){
        $query = "SELECT * FROM kelas";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function tambahKelas($data){
        $query = "INSERT INTO kelas VALUES(null, :nama, :kompetensi_keahlian)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kompetensi_keahlian', $data['kompetensi_keahlian']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editKelas($id){
        $query = "SELECT * FROM kelas WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }

    public function updateKelas($data){
        $query = "UPDATE kelas SET nama=:nama, kompetensi_keahlian=:kompetensi_keahlian WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kompetensi_keahlian', $data['kompetensi_keahlian']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteKelas($id){
        $query = "CALL DeleteDataKelas(:id)";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}