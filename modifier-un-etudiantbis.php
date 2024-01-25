<?php


$servername = 'localhost';
$username = 'root';
$password = 'demo';
    
$conn = new PDO("mysql:host=$servername;dbname=module6", $username, $password);

if(!empty($_POST)){

    $id = htmlentities($_POST["id"]);
    $prenom = htmlentities($_POST["prenom"]);
    $nom = htmlentities($_POST["nom"]);
    $email = htmlentities($_POST["email"]);
    $cv = htmlentities($_POST["cv"]);
    $dt_naissance = htmlentities($_POST["dt_naissance"]);
    $is_Admin = htmlentities($_POST["is_Admin"]);
    
    
    $sql = "
        UPDATE etudiants 
        SET  id = $id, prenom = '$prenom' , nom = '$nom', email = '$email',
        cv = '$cv', dt_naissance = '$dt_naissance', is_Admin = '$is_Admin'
        WHERE id = $id ;
    ";

    $nbLigne = $conn->exec($sql);

    if($nbLigne == 1){
        echo "profil étudiant $id mis à jour <br>";
    }
}

$id = $_GET["id"];

$sql = "
    SELECT * 
    FROM etudiants 
    WHERE id = $id
";

$stmt = $conn -> query($sql);

$etudiants = $stmt->fetch(PDO::FETCH_ASSOC);


?>

<form method="post">
    <input type="hidden" name="id" value="<?php echo $etudiants["id"] ?>">
    <div>
        <label for="prenom">Prenom</label><br>
        <input type="text" name="prenom" id="prenom" value="<?php echo $etudiants["prenom"] ?>"><br>
    </div>
    <div>
        <label for="nom">Nom</label><br>
        <input type="text" name="nom" id="nom" value="<?php echo $etudiants["nom"] ?>"><br>
    </div>
    <div>
        <label for="email">Email</label><br>
        <input type="text" name="email" id="email" value="<?php echo $etudiants["email"] ?>"><br>
    </div>
    <div>
        <label for="cv">CV</label><br>
        <textarea type="text" name="cv" id="cv" value="<?php echo $etudiants["cv"] ?>"></textarea><br>
    </div>
    <div>
    <label for="date">Date de naissance</label><br>
    <input type="date" id="dt_naissance" name="dt_naissance" min="1900-01-01" max="3000-12-31" value="<?php echo $etudiants["dt_naissance"] ?>"><br>
    </div><br>
    <div>
        <label for="is_Admin">is_Admin</label><br>
        <input type="checkbox" id="is_Admin" name=is_Admin value="<?php echo $etudiants["is_Admin"] ?>"><br>
    </div><br>
    
    <input type="submit" value="Valider">
</form>


