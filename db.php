<?php
// Masukkan Host, username, password, database anda di bawah.
$con = mysqli_connect("localhost","id18801461_root","12_Revierchristy","id18801461_signup",3307);
// Cek connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>