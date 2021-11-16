<?php
$conn = mysqli_connect('localhost','root','','jour08');
$requete =  mysqli_query($conn,"SELECT * FROM `etudiants`");
$etudiant = mysqli_fetch_all($requete,MYSQLI_ASSOC);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  var_dump($etudiant);
  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <?php foreach($etudiant[0] as $key => $value)
                {
                    echo "<td><b>$key</b></td>";
                };
                ?>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach($etudiant as $key)
                {
                    echo "<tr><td>".$key['id']."</td>";
                    echo "<td>".$key['prenom']."</td>";
                    echo "<td>".$key['nom']."</td>";
                    echo "<td>".$key['nassance']."</td>";
                    echo "<td>".$key['sexe']."</td>";
                    echo "<td>".$key['email']."</td></tr>";

                };
                ?>
        
        </tbody>
    </table>
</body>
</html>


