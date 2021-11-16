<?php
$conn = mysqli_connect('localhost','root','','jour08');
$requete =  mysqli_query($conn,"SELECT COUNT(*) AS Nb_etudiant FROM `etudiants` ");
$salles = mysqli_fetch_all($requete);

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
  }
  echo "Connected successfully";

  var_dump($salles);
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
                <td>Nb_etudiant</td><br>
                
            </tr>
        </thead>
        <tbody>
            
            <?php foreach($salles[0] as $key => $value){
                echo "<tr><td>".$value."</td></tr>";
            }
                ?>
        
        </tbody>
        </tbody>
    </table>
</body>
</html>