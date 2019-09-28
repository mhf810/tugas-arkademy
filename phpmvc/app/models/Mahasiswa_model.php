<?php

class Mahasiswa_model {
    /*
    private $mhs = [
        [ // mirip json
            "nama" => "Aditya Warman",
            "nim" => "123456",
            "jurusan" => "Matematika",
            "email" => "aw@yahoo.com"
        ],
        [
            "nama" => "Adhityawarman",
            "nim" => "654321",
            "jurusan" => "Teknik Sipil",
            "email" => "adhiet@gmail.com"
        ],
        [
            "nama" => "Adiet Doank",
            "nim" => "135790",
            "jurusan" => "Ekonomi",
            "email" => "adiet_ajaah@adiet.id"
        ]
    ];

    di public getSemua:
    return $this->mhs;
    */

    // koneksi ke database : PDO
    // DBH: database handler
    
    private $table = 'mahasiswa',$db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getSemua() {
        $this->db->query('SELECT * from ' . $this->table);
        return $this->db->resultSet();
        
    }

    public function getDetail($id) {
        $this->db->query('SELECT * from ' . $this->table . ' WHERE id=:id');
        // binding type
        $this->db->bind('id',$id);
        return $this->db->single();
        
    }

    public function tambahData($data) {
        $insert = "INSERT into " . $this->table ." values 
        ('',:nama, :nim, :jurusan, :email) ";

        $this->db->query($insert);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();
        return $this->db->rowAffected();
    }

    public function hapusData($id) {
        $delete = "DELETE from mahasiswa where id= :id";
        $this->db->query($delete);
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowAffected();
    }

    public function cariMahasiswa() {
        $keyword = $_POST['keyword'];
        $search = "SELECT * from mahasiswa where nama like :keyword";
        $this->db->query($search);
        $this->db->bind('keyword',"%$keyword%");
        return $this->db->resultSet();
    }

}