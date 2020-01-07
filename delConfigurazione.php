<?php 

$id=$_POST['id'];

$servername = 'localhost';
$username = 'root';
$pws = 'root';
$db = 'hotelDB';
$conn = new mysqli($servername, $username, $pws, $db); //instaura la connessione
if ($conn -> connect_errno) {
    echo "connection fail: " . $conn -> connect_errno;
}

$sql = "
    DELETE FROM `configurazioni` 
    WHERE `configurazioni`.`id` = ".$id."
";
$res = $conn -> query($sql);
$conn -> close();
?>