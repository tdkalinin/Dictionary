<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="word">
        <form action="../find_word.php" method="post">
        Введите слово: <input type="text" name="word">
            <input type="submit" name="findWord" value="Посмотреть значение">
        </form>
    </div>
    <br>
    {if $status eq 'SUCCESS'}
    <div class="translation">
        <p>Значение слова: {$data['meaning']}</p>
    </div>
    {elseif $status eq 'NO_WORD'}
    <div class="no_word">
        <p>Простите, этого слова еще нет в словаре</p>
    </div>
    {elseif $status eq 'NO_INPUT'}
    <div class="no_data">
        <p>Вы не ввели слово</p>
    </div>
    {/if}
    
    <!-- Удалите слово:<br> -->
    <!-- <form action="../detete_word.php" method="post">
        <input type="text" name="word_to_delete">  
        <input type="submit" name="delete_Word" value="Удалить">
    </form> -->
    <a href="login.php">Войти</a>
    <a href="add_word.php">Добавить слово</a>
    <a href="find_word.php">Посмотреть слово</a>
    <a href="register.php">Зарегистрироваться</a>
</body>
</html>