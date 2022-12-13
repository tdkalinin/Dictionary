<?php
    require_once("smarty/libs/Smarty.class.php");
    $smarty = new Smarty();
    $smarty->setTemplateDir("template");
    $smarty->setCompileDir('compile');
    $smarty->setConfigDir('conf');
    $smarty->setCacheDir('cache');
    // $smarty->testInstall();

    $smarty->assign("status", "DEFAULT");
    $smarty->display("index.tpl");
?>