<?php
    $status = "DEFAULT";
    if(isset($_POST["sign_in"])){
        if(empty($_POST['login']) || empty($_POST['pass'])){
            $status="NO_DATA";
        }
        else{
            require_once("db_connect.php");
            $sql = "SELECT * FROM users WHERE nickname = :nickname AND password = :pass";
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            $res = $db->prepare($sql);
            $res->execute(['nickname' => $login, 'pass' => $pass]);
            if($res->fetch() !== false){
                $status = "SUCCESS";
            }
            else{
                $status = "WRONG_LOGIN";
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
    $smarty->display("login.tpl");
?>
