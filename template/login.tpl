<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {if $status eq "SUCCESS"}
        <p>Вы успешно вошли!</p>
    {else}
        <form action="../login.php" method="POST">
            Логин: <input type="text" name="login"><br>
            Пароль: <input type="password" name="pass">
            <input type="submit" name="sign_in" value="Войти">
        </form>
        {if $status eq "NO_DATA"}
            <p>Вы не ввели логин или пароль. Повторите попытку</p>
        {elseif $status eq "WRONG_LOGIN"}
            <p>Неправильный логин или пароль</p>
        {/if}
    {/if}

    <a href="login.php">Войти</a>
    <a href="add_word.php">Добавить слово</a>
    <a href="find_word.php">Посмотреть слово</a>
    <a href="register.php">Зарегистрироваться</a>
</body>
</html>