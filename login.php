<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=<?=$_SERVER['PHP_SELF']?> method="POST">
        Логин: <input type="text" name="login"><br>
        Пароль: <input type="password" name="pass">
        <input type="submit" name="sign_up" value="Войти">
    </form>
    <?php
        if(isset($_POST["sign_up"])){
            if(empty($_POST['login']) || empty($_POST['pass'])){
                echo "<p>";
                echo "Вы не ввели логин или пароль";
                echo "</p>";
            }
            else{
                require_once("db_connect.php");
                $sql = "SELECT * FROM users WHERE nickname = :nickname AND password = :pass";
                $login = $_POST['login'];
                $pass = $_POST['pass'];
                $res = $db->prepare($sql);
                $res->execute(['nickname' => $login, 'pass' => $pass]);
                if($res->fetch() !== false){
                    echo "<p>";
                    echo "Вы успешно вошли";
                    echo "<p>";
                }
                else{
                    echo "<p>";
                    echo "Ошибка в логине или пароле";
                    echo "<p>";
                }
            }
        }
    ?>
</body>
</html>