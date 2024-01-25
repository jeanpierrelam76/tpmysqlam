<?php

$id = $_GET["id"] ;  
$trier = $_GET["trier"] ;



$servername = 'localhost';
$username = 'root';
$password = 'demo';
    
$conn = new PDO("mysql:host=$servername;dbname=module6", $username, $password);
var_dump($conn);



$sql = "SELECT *
        FROM etudiants
        WHERE id > $id
        ORDER BY $trier ASC
        ";
$stmt = $conn->query($sql);

var_dump($stmt);

$id = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($id);



if ($id > 10){
    echo "l'étudiant est présent dans la base de données";
}else{
    echo "l'étudiant n'est pas présent dans la base de données";
}









