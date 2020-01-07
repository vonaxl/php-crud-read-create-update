<?php
  header('Content-Type: application/json'); //imposta la lingua di communicazione js e php
  $servername = 'localhost';
  $username = 'root';
  $pws = 'root';
  $db = 'hotelDB';
  $conn = new mysqli($servername, $username, $pws, $db); //instaura la connessione
  if ($conn -> connect_errno) {
    echo "connection fail: " . $conn -> connect_errno;
  }
  $ospiti = [];
  $sql = "
    SELECT * 
    FROM `configurazioni`
  ";
  $res = $conn -> query($sql);
  if ($res -> num_rows > 0) {
    while($row = $res -> fetch_assoc()) {
      $ospiti[] = $row;
    }
  }
  $conn -> close();
  echo json_encode($ospiti);