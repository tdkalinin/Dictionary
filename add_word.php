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
                $db->exec($sql);
                echo "<p>Ваше слово добавлено!<p>";
            }
        }
    }
?>