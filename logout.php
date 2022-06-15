<?php
session_start();
// Menghancurkan semua Sessions
if(session_destroy())
{
// Mengarahkan ke Home Page
header("Location: login.php");
}
?> 
