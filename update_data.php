<?php

include "index.php";
$connx = index();

if (isset($_POST["name"]))
{
    $name = $_POST["name"];    
} else return;
if (isset($_POST["email"]))
{
    $email = $_POST["email"];    
} else return;

if (isset($_POST["password"]))
{
    $password = $_POST["password"];    
} else return;

$query = "UPDATE `user_table` SET `uname`='$name',`upassword`='$password' 
WHERE `uemail`='$email'";
$exe = mysqli_query($connx, $query);
$arr = [];

if ($exe) {
    $arr["success"] = "true";
} else {
    $arr["success"] = "false";
}

print(json_encode($arr));

?>
