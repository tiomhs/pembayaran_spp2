<?php 

class Logout extends Controller{
    public function index(){
        session_reset();
        session_destroy();
        redirect("/login/index");
    }
}