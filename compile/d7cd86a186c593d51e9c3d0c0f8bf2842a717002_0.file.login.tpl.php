<?php
/* Smarty version 4.2.1, created on 2022-12-13 15:01:04
  from 'D:\Погромирование\php\dictus\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_639885a0a907a4_26302820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7cd86a186c593d51e9c3d0c0f8bf2842a717002' => 
    array (
      0 => 'D:\\Погромирование\\php\\dictus\\template\\login.tpl',
      1 => 1670935772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639885a0a907a4_26302820 (Smarty_Internal_Template $_smarty_tpl) {
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
        <p>Вы успешно вошли!</p>
    <?php } else { ?>
        <form action="../login.php" method="POST">
            Логин: <input type="text" name="login"><br>
            Пароль: <input type="password" name="pass">
            <input type="submit" name="sign_in" value="Войти">
        </form>
        <?php if ($_smarty_tpl->tpl_vars['status']->value == "NO_DATA") {?>
            <p>Вы не ввели логин или пароль. Повторите попытку</p>
        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "WRONG_LOGIN") {?>
            <p>Неправильный логин или пароль</p>
        <?php }?>
    <?php }?>

    <a href="login.php">Войти</a>
    <a href="add_word.php">Добавить слово</a>
    <a href="find_word.php">Посмотреть слово</a>
    <a href="register.php">Зарегистрироваться</a>
</body>
</html><?php }
}
