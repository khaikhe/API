<?php

include "index.php";
$connx=index();

$query='SELECT `uid`, `uname`, `uemail`, `upassword` FROM `user_table` ';
$exe=mysqli_query($connx,$query);

$arr = [];

while($row=mysqli_fetch_array($exe))
{
    $arr[]=$row;
}

print(json_encode($arr));
?>

