  <?php
    //http://192.168.15.19/1_afficher-tout-etudiant.php

    

    $servername = 'localhost';
    $username = 'root';
    $password = 'demo';
    

    $conn = new PDO("mysql:host=$servername;dbname=module6", $username, $password);
    var_dump($conn);

    $stmt = $conn->query("SELECT * FROM etudiants;");
    var_dump($stmt);

    $tableau = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($tableau);

    echo "<table>
    <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>email</th>
        <th>cv</th>
        <th>dt_naissance</th>
       
        <th>dt_mis_a_jour</th>
    </tr>
";
foreach($tableau as $key => $value){
    echo "
        <tr>
            <td>$value[nom]</td>
            <td>$value[prenom]</td>
            <td>$value[email]</td>
            <td>$value[cv]</td>
            <td>$value[dt_naissance]</td>
            
            <td>$value[dt_mis_a_jour]</td>
        </tr>
    ";
}
echo "</table>"; 
    ?>

     