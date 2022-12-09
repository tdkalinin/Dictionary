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
        <form action=<?= $_SERVER['PHP_SELF']?> method="post">
        Введите слово: <input type="text" name="word">
            <input type="submit" name="findWord" value="Посмотреть значение">
        </form>
    </div>
    <br>
    <div class="translation">
        <?php
            require_once("find_word.php");
        ?>
    </div>
    <br>
    <div class="adding">
        Добавьте новое слово в словарь:<br>
        <form action=<?=$_SERVER['PHP_SELF']?> method="post">
            Слово: <input type="text" name="new_word"><br>
            Значение: <input type="text" name="new_word_meaning">
            <input type="submit" name="addWord" value="Добавить!">
        </form>
        <?php
            require_once("add_word.php");
        ?>
    </div>
    Удалите слово:<br>
    <form action=<?=$_SERVER['PHP_SELF']?> method="post">
        <input type="text" name="word_to_delete">  
        <input type="submit" name="delete_Word" value="Удалить">
    </form>
    <?php
        require_once("delete_word.php");
    ?>
    <a href="login.php">Войти</a>
</body>
</html>