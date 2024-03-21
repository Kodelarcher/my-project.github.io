<html>
<head> <meta charset="UTF-8"></head>
<body>
<form action="aut.php" method="POST">
<label>Номер телефона:</label>
<input type="text" id='phone' name="phone" required>
<br>
<label>Пароль:</label>
<input type="password" id='password' name="password" required>
<br>
<input type="submit" value="Авторизироваться">
</form>
</body>
</html>
<?php
require_once('connect.php');
if (!empty($_REQUEST['phone']) && !empty($_REQUEST['password'])){

    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql="SELECT * FROM `users1` WHERE phone='$phone'";
    $result = $db-> query($sql);
    if ($result-> num_rows > 0) {
        $username = $result -> fetch_assoc();
        if (password_verify($password, $username['password']))
        {
            echo "Добро пожаловать!" .$username['login']."!";
        }
        else {
            echo "Такого пользователя не существует..";
        }
    }
}