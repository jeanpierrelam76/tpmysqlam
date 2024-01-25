<?php

$servername = 'localhost';
$username = 'root';
$password = 'demo';
    
$conn = new PDO("mysql:host=$servername;dbname=module6", $username, $password);
var_dump($conn);

$id = 8;

$departEtudiant =  $conn->exec("DELETE FROM etudiants WHERE id = $id ");

var_dump($departEtudiant);

if( $departEtudiant > 0 ){
    echo "suppression etudiant $id de la base de données"; 
} else {
    echo "l'étudiant $id n'est pas présent dans la base de données"; 
}






