<?php /* Smarty version Smarty-3.1.14, created on 2013-08-11 22:32:03
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303652064eb465e0a7-90500229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1376249523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303652064eb465e0a7-90500229',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52064eb479e5f0_03747247',
  'variables' => 
  array (
    'resume' => 0,
    'news' => 0,
    'news_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52064eb479e5f0_03747247')) {function content_52064eb479e5f0_03747247($_smarty_tpl) {?>
<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="templates/css/style.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">

<div id="resume">
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rows'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rows']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['name'] = 'rows';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['resume']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rows']['total']);
?>
        <p><?php echo $_smarty_tpl->tpl_vars['resume']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rows']['index']];?>
</p>
    <?php endfor; endif; ?>
</div>

    <img src="templates/images/man.jpg" alt=""/>
    <div class="clear"></div>
    <a href="#" id="comment_link">Add Comment</a>

    <div id="comment_form">
        <form action="index.php" method="POST">
            <p>Name</p>
           <p class="span"><input type="text" name='user' id="user"/></p>
            <span class="name_error"></span>
            <p>Message</p>
           <p>
               <textarea name="news" id="news" cols="50" rows="5"></textarea>

           </p>
            <span class="text_error"></span>
            <a href="#" id="hide">Submit message</a>
            <input type="submit" id='submit' name="submit" value="submit"/>
        </form>
    </div>

    <?php if (isset($_smarty_tpl->tpl_vars['news']->value)){?>
        <?php  $_smarty_tpl->tpl_vars['news_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news_item']->key => $_smarty_tpl->tpl_vars['news_item']->value){
$_smarty_tpl->tpl_vars['news_item']->_loop = true;
?>
            <div class="message_item">
                <p class="user"><?php echo $_smarty_tpl->tpl_vars['news_item']->value['user'];?>
</p>
                <div class="create_date"><?php echo $_smarty_tpl->tpl_vars['news_item']->value['create_date'];?>
</div>
                <div class="text"><?php echo $_smarty_tpl->tpl_vars['news_item']->value['text'];?>
</div>
            </div>
        <?php } ?>
    <?php }?>

</div>
<script type="text/javascript" src="templates/script.js"></script>
</body>
</html>
<?php }} ?>