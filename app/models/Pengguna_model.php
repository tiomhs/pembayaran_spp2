<?php 

class Pengguna_model{
    protected $db ;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($data){
        $query = "SELECT * FROM pengguna WHERE username=:username AND password=:password";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        return $this->db->singleSet();
    }

    public function getAllPengguna(){
        $query = "SELECT * FROM pengguna";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function tambahPengguna($data){
        $query = "INSERT INTO pengguna VALUES(null, :username, :password, :role)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role', $data['role']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getPenggunaById($id){
        $query = "SELECT * FROM pengguna WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }

    public function getPenggunaByRole($role){
        $query = "SELECT * FROM pengguna WHERE role=:role";
        $this->db->query($query);
        $this->db->bind('role', $role);
        return $this->db->resultSet();
    }

    public function ubahPengguna($data){
        $query = "UPDATE pengguna SET username=:username, password=:password, role=:role WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role', $data['role']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusPengguna($id){
        $query = "CALL DeleteDataPengguna(:id)";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}