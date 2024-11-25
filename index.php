<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "star";

    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    // var_dump($result->fetch_all());

    echo "<form>";
        echo "<input name='username' />";
        echo "<input type='password' name='password' />";
        echo "<input type='button' value='registrejie'>";
    echo "</form>";


?>