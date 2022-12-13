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
        <p>Вы успешно зарегистрировались!</p>
    {else}
        <form action="../register.php" method="POST">
            Придумайте логин: <input type="text" name="login"><br>
            Придумайте пароль: <input type="password" name="pass">
            <input type="submit" name="sign_up" value="Зарегистрироваться">
        </form>
        {if $status eq "NO_INPUT"}
            <p>Вы не ввели логин или пароль. Повторите попытку</p>
        {elseif $status eq "WRONG_LOGIN"}
            <p>Пользователь с таким логином уже существует. Выберите другой.</p>
        {/if}
    {/if}

    <a href="login.php">Войти</a>
    <a href="add_word.php">Добавить слово</a>
    <a href="find_word.php">Посмотреть слово</a>
    <a href="register.php">Зарегистрироваться</a>
</body>
</html>