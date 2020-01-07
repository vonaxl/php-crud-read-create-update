<?php 
  header('Content-Type: application/json'); //imposta la lingua di communicazione js e php
    list($title, $description)=[
        $_POST['title'],
        $_POST['description']
    ];
    
    if(!$title || !$description){
        echo json_encode(-2);
        return;
    }

    $servername = 'localhost';
    $username = 'root';
    $pws = 'root';
    $db = 'hotelDB';
    $conn = new mysqli($servername, $username, $pws, $db); //instaura la connessione
    if ($conn -> connect_errno) {
        echo "connection fail: " . $conn -> connect_errno;
    }

    $sql = "
        INSERT INTO configurazioni(title, description)
        VALUES ( ? , ? )
    ";
    $stmt = $conn -> prepare($sql);
    $stmt -> bind_param('ss', $title, $description);
    $res = $stmt ->execute();

    echo json_encode($res);
?>