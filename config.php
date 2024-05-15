<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "formulario_gabriel";

    $conn = new mysqli($servername, $username, $password);

    if($conn->connect_errno)
    {    
        echo "erro";
    }
    else
    {
        echo "conexão efetuada";
    }

?>