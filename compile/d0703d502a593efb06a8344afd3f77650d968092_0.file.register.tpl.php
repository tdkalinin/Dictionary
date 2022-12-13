<?php
/* Smarty version 4.2.1, created on 2022-12-13 15:24:10
  from 'D:\Погромирование\php\template\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63988b0a7cefe2_72157909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0703d502a593efb06a8344afd3f77650d968092' => 
    array (
      0 => 'D:\\Погромирование\\php\\template\\register.tpl',
      1 => 1670941178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63988b0a7cefe2_72157909 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($_smarty_tpl->tpl_vars['status']->value == "SUCCESS") {?>
        <p>Вы успешно зарегистрировались!</p>
    <?php } else { ?>
        <form action="../register.php" method="POST">
            Придумайте логин: <input type="text" name="login"><br>
            Придумайте пароль: <input type="password" name="pass">
            <input type="submit" name="sign_up" value="Зарегистрироваться">
        </form>
        <?php if ($_smarty_tpl->tpl_vars['status']->value == "NO_INPUT") {?>
            <p>Вы не ввели логин или пароль. Повторите попытку</p>
        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "WRONG_LOGIN") {?>
            <p>Пользователь с таким логином уже существует. Выберите другой.</p>
        <?php }?>
    <?php }?>

    <a href="login.php">Войти</a>
    <a href="add_word.php">Добавить слово</a>
    <a href="find_word.php">Посмотреть слово</a>
    <a href="register.php">Зарегистрироваться</a>
</body>
</html><?php }
}
