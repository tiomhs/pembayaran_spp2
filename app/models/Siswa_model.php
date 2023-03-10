<?php 

class Siswa_model{
    protected $db ;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getIdSiswaBySession($id_pengguna){
        $query = "SELECT * FROM siswa WHERE pengguna_id = :pengguna_id";
        $this->db->query($query);
        $this->db->bind('pengguna_id', $id_pengguna);
        return $this->db->singleSet();
    }

    public function getSiswaById($id){
        $query = "SELECT * FROM siswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        return $this->db->singleSet();
    }

    public function getSiswaWithRelation(){
        $query = 'SELECT siswa.id, siswa.nisn, siswa.nis, siswa.nama, siswa.alamat, siswa.telepon, kelas.nama AS nama_kelas, pengguna.username, pembayaran.tahun_ajaran FROM `siswa` INNER JOIN kelas ON siswa.kelas_id = kelas.id INNER JOIN pengguna ON siswa.pengguna_id = pengguna.id INNER JOIN pembayaran ON siswa.pembayaran_id = pembayaran.id';
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getSiswaWithRelationId($id){
        $query = 'SELECT siswa.id, siswa.nisn, siswa.nis, siswa.nama, siswa.alamat, siswa.telepon, kelas.nama AS nama_kelas, pengguna.username,pembayaran.id AS pembayaran_id, pembayaran.tahun_ajaran FROM `siswa` INNER JOIN kelas ON siswa.kelas_id = kelas.id INNER JOIN pengguna ON siswa.pengguna_id = pengguna.id INNER JOIN pembayaran ON siswa.pembayaran_id = pembayaran.id WHERE siswa.id = :id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }

    public function tambahSiswa($data){
        $query = "INSERT INTO siswa VALUES(null, :nisn, :nis, :nama, :alamat, :telepon, :kelas_id, :pengguna_id, :pembayaran_id)";
        $this->db->query($query);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('kelas_id', $data['kelas_id']);
        $this->db->bind('pengguna_id', $data['pengguna_id']);
        $this->db->bind('pembayaran_id', $data['pembayaran_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahSiswa($data){
        $query = "UPDATE siswa SET nisn=:nisn, nis=:nis, nama=:nama, alamat=:alamat, telepon=:telepon, kelas_id=:kelas_id, pengguna_id=:pengguna_id, pembayaran_id=:pembayaran_id WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('kelas_id', $data['kelas_id']);
        $this->db->bind('pengguna_id', $data['pengguna_id']);
        $this->db->bind('pembayaran_id', $data['pembayaran_id']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusSiswa($id){
        $query = "CALL DeleteDataSiswa(:id)";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}