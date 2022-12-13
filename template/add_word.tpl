<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="adding">
        Добавьте новое слово в словарь:<br>
        <form action="../add_word.php" method="post">
            Слово: <input type="text" name="new_word"><br>
            Значение: <input type="text" name="new_word_meaning">
            <input type="submit" name="addWord" value="Добавить!">
        </form>
    </div>
    {if $status eq 'NO_INPUT'}
        <p>Вы не ввели слово или значение</p>
    {/if}
    {if $status eq 'ALREADY_EXISTS'}
        <p>Такое слово уже есть в словаре</p> 
    {/if}
    {if $status eq 'SUCCESS'}
        <p>Ваше слово успешно добавлено!</p>
    {/if}

    <a href="login.php">Войти</a>
    <a href="add_word.php">Добавить слово</a>
    <a href="find_word.php">Посмотреть слово</a>
    <a href="register.php">Зарегистрироваться</a>
</body>
</html>