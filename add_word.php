<?php
    $status = "DEFAULT";
    if(isset($_POST['addWord'])){
        if(!isset($_POST['new_word']) || empty($_POST['new_word'])
                    || !isset($_POST['new_word_meaning']) || empty($_POST['new_word_meaning'])){
            $status = "NO_INPUT";
        }
        else{
            require_once("db_connect.php");

            $sql = "SELECT * FROM words WHERE word = '{$_POST['new_word']}'";
            $res = $db->prepare($sql);
            $res->execute();
            if(($res->fetch()) !== false){
                $status = "ALREADY_EXISTS";
            }
            else{
                $sql = "INSERT INTO words (word, meaning) VALUES ('{$_POST['new_word']}', '{$_POST['new_word_meaning']}')";
                $db->exec($sql);
                $status = "SUCCESS";
            }
        }
    }

    require_once("smarty/libs/Smarty.class.php");
    $smarty = new Smarty();
    $smarty->setTemplateDir("template");
    $smarty->setCompileDir('compile');
    $smarty->setConfigDir('conf');
    $smarty->setCacheDir('cache');
    // $smarty->testInstall();

    $smarty->assign("status", $status);
    $smarty->display("add_word.tpl");
?>