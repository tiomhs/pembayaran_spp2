<?php 

function redirect($path){
    header("Location:".BASEURL.$path);
    exit;
}