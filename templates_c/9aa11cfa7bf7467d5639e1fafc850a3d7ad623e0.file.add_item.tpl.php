<?php /* Smarty version Smarty-3.1.16, created on 2014-04-24 04:57:02
         compiled from "./templates/add_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123827763534d184ed03779-70887627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aa11cfa7bf7467d5639e1fafc850a3d7ad623e0' => 
    array (
      0 => './templates/add_item.tpl',
      1 => 1398315371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123827763534d184ed03779-70887627',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534d184ed4a114_12860710',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534d184ed4a114_12860710')) {function content_534d184ed4a114_12860710($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Add item</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/wp.css">
</head>

<body>
<h1>Add new item</h1>

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
<?php }?>

<form method="post" action="add_item_action.php">
    <table>
    <tr><td>Summary:</td> <td><input type="text" name="summary"></td></tr>
    <tr><td>Details:</td> <td><textarea name="details"></textarea></td></tr>
    <tr><td colspan=2><input type="submit" value="Add item">
    </table>
</form>
</body>
</html>
<?php }} ?>
