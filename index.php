<?php
  function index()
  {
$host = 'localhost';
$user='id21221945_praticaflutter';
$password='Love-96333249';
$bd_name = 'id21221945_flutter'; 

$connx = mysqli_connect($host, $user, $password, $bd_name);
return $connx;
}
?>