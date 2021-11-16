<?php

if(($_POST['username']=='John')&&($_POST['password']==Rambo))
{
    echo 'C’est pas ma guerre'.'<br>';
}
else echo 'Votre pire cauchemar';
?>
<html>
<body>

<form action="index.php" method="post">
Username: <input type="text" name="username"><br>
Password: <input type="text" name="password"><br>
<input type="submit"><br>
</form>

</body>
</html>