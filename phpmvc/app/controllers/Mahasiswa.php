<?php

class Mahasiswa extends Controller {
    public function index() {
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getSemua();

        $this->view('templates/header', $data) ;
        $this->view('mahasiswa/index', $data) ;
        $this->view('templates/footer') ;
    }

    public function detail($id) {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getDetail($id);

        $this->view('templates/header', $data) ;
        $this->view('mahasiswa/detail', $data) ;
        $this->view('templates/footer') ;
    }

    public function tambah() {
        if( $this->model('Mahasiswa_model')->tambahData($_POST) > 0 ) {
            // show notif
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location: ' . BASEURL. '/mahasiswa') ;
            exit;
        } 
        else {
            Flasher::setFlash('gagal','ditambahkan','danger');
            header('Location: ' . BASEURL. '/mahasiswa') ;
            exit;
        }
    }
    
    public function delete($id) {
        if( $this->model('Mahasiswa_model')->hapusData($id) > 0 ) {
            Flasher::setFlash('berhasil','dihapus!','success');
            header('Location: ' . BASEURL. '/mahasiswa') ;
            exit;
        } 
        else {
            Flasher::setFlash('gagal','dihapus','danger');
            header('Location: ' . BASEURL. '/mahasiswa') ;
            exit;
        }
    }

    public function getedit() {
        echo json_encode($this->model('Mahasiswa_model')->getDetail($_POST['id']));
    }

    public function search() {
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariMahasiswa();
        $this->view('templates/header', $data) ;
        $this->view('mahasiswa/index', $data) ;
        $this->view('templates/footer') ;
    }



}