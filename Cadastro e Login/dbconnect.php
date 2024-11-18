<?php

$conn = mysqli_connect("localhost", "root", "root", "bd_eptran_cadastro");

if (!$conn) {
    die("Connection Failed." . mysqli_connect_error());
} else {
    echo "OK";
}

?>