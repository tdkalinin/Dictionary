<?php
/* Smarty version 4.2.1, created on 2022-12-13 13:24:26
  from 'D:\Погромирование\php\template\add_word.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63986efab75177_45190399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baf24f230da60163211ebfdad67fca8c4cffb61d' => 
    array (
      0 => 'D:\\Погромирование\\php\\template\\add_word.tpl',
      1 => 1670934254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63986efab75177_45190399 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="adding">
        Добавьте новое слово в словарь:<br>
        <form action="add_word.php" method="post">
            Слово: <input type="text" name="new_word"><br>
            Значение: <input type="text" name="new_word_meaning">
            <input type="submit" name="addWord" value="Добавить!">
        </form>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['status']->value == 'NO_INPUT') {?>
        <p>Вы не ввели слово или значение</p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['status']->value == 'ALREADY_EXISTS') {?>
        <p>Такое слово уже есть в словаре</p> 
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['status']->value == 'SUCCESS') {?>
        <p>Ваше слово успешно добавлено!</p>
    <?php }?>

    <a href="login.php">Войти</a>
    <a href="add_word.php">Добавить слово</a>
    <a href="find_word.php">Посмотреть слово</a>
</body>
</html><?php }
}
