<?php
//http://192.168.15.19/4_modifier-un-etudiant.php

$servername = 'localhost';
$username = 'root';
$password = 'demo';
    
$conn = new PDO("mysql:host=$servername;dbname=module6", $username, $password);


if(!empty($_POST))


{   $servername = 'localhost';
    $username = 'root';
    $password = 'demo';
    
    $conn = new PDO("mysql:host=$servername;dbname=module6", $username, $password);
    //var_dump($conn);


   
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $cv = $_POST['cv'];
    $dt_naissance = $_POST['dt_naissance'];
    $is_Admin = $_POST ['is_Admin'];
    
  

    $sql = "INSERT INTO etudiants
            (prenom, nom, email, cv, dt_naissance,is_Admin,dt_mis_a_jour) 
            VALUES 
            ('$prenom', '$nom', '$email', '$cv' ,'$dt_naissance',0,NOW())"; 

            $conn->exec( $sql); 



            
}
?>


<form method="post">
    <div>
        <label for="prenom">Prenom</label><br>
        <input type="text" name="prenom" id="prenom">
    </div>
    <div>
        <label for="nom">Nom</label><br>
        <input type="text" name="nom" id="nom">
    </div>
    <div>
        <label for="email">Email</label><br>
        <input type="text" name="email" id="email">
    </div>
    <div>
        <label for="cv">CV</label> <br>
        <textarea name="cv" id="cv" cols="30" rows="10"></textarea>
    </div>
    <div>
    <label for="date">Date de naissance</label><br>
    <input type="date" id="dt_naissance" name="dt_naissance" min="1900-01-01" max="3000-12-31" />
    </div>
    <div>
    <legend>Admin</legend>
    <label for="no">no</label><br>
    <input type="checkbox" name="is_Admin" id="is_Admin"><br>
    </div>

    <input type="submit" value="Valider Inscription">
</form>