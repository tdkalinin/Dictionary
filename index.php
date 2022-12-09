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
            if(isset($_POST['findWord'])){
                if(!isset($_POST['word']) || empty($_POST['word'])){
                    echo "<p>";
                    echo "Вы не ввели слово!";
                    echo "</p>";
                }
                else{
                    require_once("db_connect.php");
                    $word = $_POST['word'];
                    
                    $sql = "SELECT meaning FROM words WHERE word = :word";
                    $res = $db->prepare($sql);
                    $res->execute(['word' => $word]);
                    $row = $res->fetch();
                    if($row === false){
                        echo "<p>";
                        echo "Простите, этого слова еще нет в словаре";
                        echo "</p>";
                    }
                    else {
                        echo "Значение: " . "{$row['meaning']}";
                    }
                }
            }
        ?>
    </div>
    <br>
    <div class="adding">
        Добавьте новое слово в словарь:<br>
        <form action=<?=$_SERVER['PHP_SELF']?> method="post">
            Слово: <input type="text" name="new_word"><br>
            Значение: <input type="text" name="new_word_meaning"><br>
            <input type="submit" name="addWord" value="Добавить!">
        </form>
        <?php
            if(isset($_POST['addWord'])){
                if(!isset($_POST['new_word']) || empty($_POST['new_word']) 
                          || !isset($_POST['new_word_meaning']) || empty($_POST['new_word_meaning'])){
                    echo "<p>";
                    echo "Вы не ввели слово или его значение!";
                    echo "</p>";
                }
                else{
                    require_once("db_connect.php");

                    $sql = "SELECT * FROM words WHERE word = '{$_POST['new_word']}'";
                    $res = $db->prepare($sql);
                    $res->execute();
                    if(($res->fetch()) !== false){
                        echo "<p>";
                        echo "Это слово уже есть в словаре";
                        echo "<p>";
                    }
                    else{
                        $sql = "INSERT INTO words (word, meaning) VALUES ('{$_POST['new_word']}', '{$_POST['new_word_meaning']}')";
                        $db->query($sql);
                        echo "<p>Ваше слово добавлено!<p>";
                    }
                }
            }
        ?>
    </div>
    <form>
        
    </form>
</body>
</html>