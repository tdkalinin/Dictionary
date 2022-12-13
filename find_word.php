<?php
    $status = "DEFAULT";
    $data = [];
    if(isset($_POST['findWord'])){
        if(!isset($_POST['word']) || empty($_POST['word'])){
            $status = "NO_INPUT";
        }
        else{
            require_once("db_connect.php");
            $word = $_POST['word'];
            
            $sql = "SELECT meaning FROM words WHERE word = :word";
            $res = $db->prepare($sql);
            $res->execute(['word' => $word]);
            $row = $res->fetch();
            if($row === false){
                $status = "NO_WORD";
            }
            else {
                $status = "SUCCESS";
                $data['meaning'] = $row['meaning'];
            }
        }
    }

    require_once("smarty/libs/Smarty.class.php");
    $smarty = new Smarty();
    $smarty->setTemplateDir("template");
    $smarty->setCompileDir('compile');
    $smarty->setConfigDir('conf');
    $smarty->setCacheDir('cache');

    $smarty->assign("status", $status);
    $smarty->assign("data", $data);
    $smarty->display("index.tpl");
?>