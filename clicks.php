<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "star";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         $tiri_data = $_POST['tiri'];

         $sql = "INSERT INTO clicks (clicks) VALUES ('$tiri_data')";
         $conn->query($sql);
    }