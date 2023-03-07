<?php 

//Koneksi Ke Database
$connect = mysqli_connect('localhost', 'Admin', 'Admin12.,3##', 'Data_siswa');

//Pengecekan
if($connect === false){
    die("ERROR: Database Tidak Terkoneksi" . mysqli_connect_error());
}