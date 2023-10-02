<?php

include "index.php";
$connx=index();

if(isset($_POST['id']))

{
    $id=$_POST['id'];
}
else return;

$query= " DELETE FROM `user_table` WHERE uid= '$id'";

$exe=mysqli_query($connx,$query);
$arr=[];
if($exe)
{
    $arr['success'] = 'true';
}
else{
    $arr['success']= 'false';
}

print(json_encode($arr));


?>