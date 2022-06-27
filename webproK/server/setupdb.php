<?php
    define("DBHOST","127.0.0.1");
    define("DBUSER","root");
    define("DBPASCODE","");
    define("DBNAME","mahasiswa");
    define("DBPORT","3306");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME) or 
        die("Koneksi ke DBMS Mysql gagal<br>");
    if ($cnn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $mhs = "CREATE TABLE mhs(
        NIM VARCHAR(8) PRIMARY KEY,
        NAMA VARCHAR(25),
        JURUSAN VARCHAR(15),
        JK VARCHAR(1),
        TGLLAHIR date
    )";
    $ds = "CREATE TABLE dosen(
        NIDN INT(11) PRIMARY KEY,
        NAMA VARCHAR(50) NOT NULL,
        MK VARCHAR(30) NOT NULL,
        JK VARCHAR(50) NOT NULL
    )";
    $sql = "CREATE TABLE mk(
        KODE_MK VARCHAR(20) PRIMARY KEY,
        NAMA_MK VARCHAR(30) NOT NULL,
        NAMA_DOSEN VARCHAR(50) NOT NULL
    )";
    if(mysqli_query($cnn,$mhs,$ds,$sql)){
        echo "Tabel mhs berhasil dibuat";
    }else{
        echo "Tabel mhs tidak berhasil dibuat";
    }