<?php

class Flasher{
    public static function setFlash($pesan, $action, $type){
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'action' => $action,
            'type' => $type
        ];
    }

    public static function flash(){
        if(isset($_SESSION['flash'])){
            echo '
            <div class="card border-left-'.$_SESSION['flash']['type'].' shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-h2 font-weight-bold text-primary text-uppercase mb-1">
                                    '.$_SESSION['flash']['pesan']. ' '.$_SESSION['flash']['action'] .'
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>';

            unset($_SESSION['flash']);
        }
    }
}