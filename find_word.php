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