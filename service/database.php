<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "aliefweb";

$db = mysqli_connect ($hostname, $username, $password, $database_name);

if ($db->connect_error) {
    echo "koneksi rusak bang";
    die("error!");
}
?>