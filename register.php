<?php
    $status = "DEFAULT";
    if(isset($_POST['sign_up'])){
        if(empty($_POST['login']) || empty($_POST['pass'])){
            $status = "NO_INPUT";
        }
        else{
            require_once("db_connect.php");

            $result = $db->prepare("SELECT *
                          FROM users 
                          WHERE nickname = :login");
            $result->execute(['login' => $_POST['login']]);
            if($result->fetch() !== false){
                $status = "WRONG_LOGIN";
            }
            else{
                $result = $db->prepare("INSERT INTO users(nickname, password) 
                              VALUES(:login, :password)");
                $result->execute(['login' => $_POST['login'], 'password' => $_POST['pass']]);
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

    $smarty->assign("status", $status);
    $smarty->display("register.tpl");
?>