<?php

class Flasher {
    public static function setFlash($pesan, $aksi, $notif) {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'notif' => $notif
        ];
    }

    public static function flash() {
        // apakah ada session
        if( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-' .$_SESSION['flash']['notif'] . ' alert-dismissible fade show" role="alert"> Data Mahasiswa
                <strong>' .$_SESSION['flash']['pesan'] .'</strong> '.$_SESSION['flash']['aksi'].'!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            unset($_SESSION['flash']);
        }
    }
}