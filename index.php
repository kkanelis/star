<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "star";

    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    // var_dump($result->fetch_all());

    echo "<form method='POST'>";
        echo "<label>Lietotaja vards: <input name='username' /></label>";
        echo "<label>Parole: <input type='password' name='password'/></label>";
        echo "<input type='button' value='registrejie'>";
    echo "</form>";




    // $masivs = [6, 8, 10];

    // $assoc_masivs = ["vecums"=> 6, "videja_atzime"=> 8, "ids"=> 10];




?>