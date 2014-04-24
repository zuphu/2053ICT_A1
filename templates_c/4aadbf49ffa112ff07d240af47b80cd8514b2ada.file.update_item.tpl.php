<?php /* Smarty version Smarty-3.1.16, created on 2014-04-19 03:09:14
         compiled from "./templates/update_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1245213647534d185aba5b96-54129077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aadbf49ffa112ff07d240af47b80cd8514b2ada' => 
    array (
      0 => './templates/update_item.tpl',
      1 => 1397876519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1245213647534d185aba5b96-54129077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534d185abf9ef6_44619578',
  'variables' => 
  array (
    'error' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534d185abf9ef6_44619578')) {function content_534d185abf9ef6_44619578($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Update item</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/wp.css">
</head>

<body>
<h1>Update item</h1>
<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
<?php }?>

<form method="post" action="update_item_action.php">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
    <table>
    <tr><td>Summary:</td> <td><input type="text" name="summary" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['summary'];?>
"> <br></td></tr>
    <tr><td>Details:</td> <td><textarea name="details"><?php echo $_smarty_tpl->tpl_vars['item']->value['details'];?>
</textarea> <br></td></tr>
    <tr><td><input type="submit" value="Update item"></td></tr>
    </table>
</form>
</body>
</html>
<?php }} ?>
