<?php
$SERVERNAME = "localhost";
$databse ="digiblitz";
$username= "root";
$password= "";
$conn = mysqli_connect($SERVERNAME, $username,$password,$databse );

if(!$conn){
    die("koneksi gagal: " . mysqli_coonect_error());
} else{
    echo "koneksi berhasil";
}