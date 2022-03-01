<?php
$servername="localhost";
$loosername="root";
$password="12mii2018";
$dbname="magazin";
$conn=mysqli_connect($servername,$loosername,$password,$dbname);
if(!$conn)
{
    die("Conexiune imposibila".mysqli_connect_error());
}
?>


