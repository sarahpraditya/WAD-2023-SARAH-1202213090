<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$Host = "localhost:3308";
$Username = "root";
$Password = "" ;
$database = "db_wad_modul3";    
$koneksi = mysql_connect("localhost:3308", "root", "", "db_wad_modul3");
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (koneksi->connect_error){
    die("Connection failed: .$conn->connection_error");
}
// 
?>