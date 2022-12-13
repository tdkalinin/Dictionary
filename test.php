<?php
    require_once "smarty/libs/Smarty.class.php";
    
    $smarty = new Smarty();
    $smarty->setTemplateDir(getcwd());
    $smarty->setCompileDir('compile');
    $smarty->setConfigDir('conf');
    $smarty->setCacheDir('cache');
    // $smarty->testInstall();

    $smarty->assign("name", "Timur");
    $smarty->display("index.tpl");
?>