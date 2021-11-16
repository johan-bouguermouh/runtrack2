<?php

$i=0;
foreach($_POST as $key => $value)
{
    echo $key."=>".$value.'<br>';
    $i++;
}
echo $i;
?>
<html>
<body>

<form action="index.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit"><br>
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
</form>

</body>
</html>