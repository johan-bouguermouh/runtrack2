<?php
    $i=0;
    foreach($_GET as $key => $value)
    {
        echo $key."=>".$value.'<br>';
        $i++;
    }
    echo $i;
?>
<html>
<body>

<form action="index.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit"><br>
Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
</form>

</body>
</html>