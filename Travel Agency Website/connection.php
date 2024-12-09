<?php
//error_reporting(0);
$servername ="localhost";
$username = "root";
$password="";
$dbnname = "tour travel agency";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo "connection successful";
}
else{
    echo "connection failed" .mysqil_connect_error();
}
?>