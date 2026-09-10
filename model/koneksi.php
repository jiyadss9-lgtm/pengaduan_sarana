<?php

class Koneksi {
    private $host = "localhost",
            $username = "root",
            $pass = "",
            $db = "pengaduan_sarana_sekolah";

    public $koneksi;

    function __construct() {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->username,
            $this->pass,
            $this->db
        );

        if (!$this->koneksi) {
            echo "Koneksi ke database gagal: " . mysqli_connect_error();
        } else {
            echo "konesi ke database berhasil";
        }
    }
}

// Menjalankan koneksi
$koneksi = new Koneksi();
$conn = $koneksi->koneksi;

?>