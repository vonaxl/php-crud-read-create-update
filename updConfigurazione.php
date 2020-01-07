<?php 
  header('Content-Type: application/json'); //imposta la lingua di communicazione js e php
    list($id, $title, $description)=[
        $_POST['id'],
        $_POST['title'],
        $_POST['description']
    ];
    
    if(!$title || !$description || !$id){
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
        UPDATE configurazioni
        SET title='?',
            description='?'
            WHERE id=?
    ";
    $stmt = $conn -> prepare($sql);
    $stmt -> bind_param('ssi', $title, $description,$id);
    $res = $stmt ->execute();

    echo json_encode($res);
?>