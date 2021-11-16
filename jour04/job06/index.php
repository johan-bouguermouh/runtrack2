<?php

if($_POST['nombre']%2==0)
{
    echo $_POST['nombre'].' est paire'.'<br>';
}
else echo $_POST['nombre'].' est impaire'.'<br>';
?>
<html>
<body>

<form action="index.php" method="post">
Nombre: <input type="text" name="nombre"><br>
<input type="submit" required pattern = [0-9]><br>
</form>

</body>
</html>