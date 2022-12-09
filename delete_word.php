<?php
    if(isset($_POST['delete_Word'])){
        if(!isset($_POST['word_to_delete']) || empty($_POST['word_to_delete'])){
            echo "<p>";
            echo "Вы не ввели слово!";
            echo "</p>";
        }
        else{
            require_once("db_connect.php");
            $word = $_POST['word_to_delete'];
            
            $sql = "SELECT id FROM words WHERE word = :word";
            $res = $db->prepare($sql);
            $res->execute(['word' => $word]);
            $row = $res->fetch();
            if($row === false){
                echo "<p>";
                echo "Такого слова в словаре нет";
                echo "</p>";
            }
            else {
                $sql = "DELETE FROM words WHERE id = :id";
                $res = $db->prepare($sql);
                $res->execute(['id' => $row['id']]);
                echo "Слово удалено!";
            }
        }
    }
?>