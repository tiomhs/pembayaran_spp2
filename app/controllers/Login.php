<?php 

class Login extends Controller{

    public function index(){
        $data = [
            'judul' => 'Login'
        ];
        $this->view('login/index',$data);
    }

    public function do_login(){
        $login = $this->model("Pengguna_model")->login($_POST);
        $siswa = $this->model("Siswa_model")->getIdSiswaBySession($login['id']);
        $petugas = $this->model("Petugas_model")->getIdPetugasBySession($login['id']);
        if($login){
            switch ($login['role']) {
                case 0:
                    $_SESSION['login'] = true;
                    $_SESSION['role'] = 0;
                    $_SESSION['id_pengguna'] = $login['id'];
                    $_SESSION['id_petugas'] = $petugas['id'];
                    redirect("/admin/index");
                    break;
                case 1:
                    $_SESSION['login'] = true;
                    $_SESSION['role'] = 1;
                    $_SESSION['id_pengguna'] = $login['id'];
                    $_SESSION['id_petugas'] = $petugas['id'];
                    redirect("/admin/index");
                    break;
                default:
                    $_SESSION['login'] = true;
                    $_SESSION['role'] = 2;
                    $_SESSION['id_pengguna'] = $login['id'];
                    $_SESSION['id_siswa'] = $siswa['id'];
                    redirect("/home/index");
                    break;
            }
        }else{
            Flasher::setFlash('Username Atau Password', 'Salah', 'danger');
            redirect("");
            
        }
    }
}