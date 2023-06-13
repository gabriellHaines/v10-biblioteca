<?php


$host = '127.0.0.1';
$username = 'root'; 
$password = '';
$database = 'biblioteca';

$host = '10.67.22.216';
$username = 's222'; 
$password = 'web@2023';
$database = 's222_gabriell19';

$con = mysqli_connect($host,$username,$password,$database);
if (!$con) {
    echo "erro ao conectar com a base de dados: " . mysqli_connect_error();
}
?>
