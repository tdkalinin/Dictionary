<?php
/* Smarty version 4.2.1, created on 2022-12-13 15:11:08
  from 'D:\Погромирование\php\dictus\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_639887fc134ad8_41876664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2c56f217d6073f697f819ab7960ed9eee8db3d7' => 
    array (
      0 => 'D:\\Погромирование\\php\\dictus\\template\\index.tpl',
      1 => 1670940666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639887fc134ad8_41876664 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="word">
        <form action="../find_word.php" method="post">
        Введите слово: <input type="text" name="word">
            <input type="submit" name="findWord" value="Посмотреть значение">
        </form>
    </div>
    <br>
    <?php if ($_smarty_tpl->tpl_vars['status']->value == 'SUCCESS') {?>
    <div class="translation">
        <p>Значение слова: <?php echo $_smarty_tpl->tpl_vars['data']->value['meaning'];?>
</p>
    </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == 'NO_WORD') {?>
    <div class="no_word">
        <p>Простите, этого слова еще нет в словаре</p>
    </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == 'NO_INPUT') {?>
    <div class="no_data">
        <p>Вы не ввели слово</p>
    </div>
    <?php }?>
    
    <!-- Удалите слово:<br> -->
    <!-- <form action="../detete_word.php" method="post">
        <input type="text" name="word_to_delete">  
        <input type="submit" name="delete_Word" value="Удалить">
    </form> -->
    <a href="login.php">Войти</a>
    <a href="add_word.php">Добавить слово</a>
    <a href="find_word.php">Посмотреть слово</a>
    <a href="register.php">Зарегистрироваться</a>
</body>
</html><?php }
}
