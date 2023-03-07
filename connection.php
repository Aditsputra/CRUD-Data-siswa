<?php 

$connect = mysqli_connect('localhost', 'Admin', 'Admin12.,3##', 'Data_siswa');


if($connect === false){
    die("ERROR: Database Tidak Terkoneksi" . mysqli_connect_error());
}