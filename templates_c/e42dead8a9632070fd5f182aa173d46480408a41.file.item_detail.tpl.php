<?php /* Smarty version Smarty-3.1.16, created on 2014-04-19 03:09:08
         compiled from "./templates/item_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:971403735534d1833441d04-65395595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e42dead8a9632070fd5f182aa173d46480408a41' => 
    array (
      0 => './templates/item_detail.tpl',
      1 => 1397876519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '971403735534d1833441d04-65395595',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534d183349dc20_22424572',
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534d183349dc20_22424572')) {function content_534d183349dc20_22424572($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Show item detail</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/wp.css">
</head>

<body>
<h1><?php echo $_smarty_tpl->tpl_vars['item']->value['summary'];?>
</h1>
    
<p>
<?php echo $_smarty_tpl->tpl_vars['item']->value['details'];?>


<p>
<a href="delete_item_action.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Delete this item</a> (not yet implemented)

<p>
<a href="update_item.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Update this item</a> (not yet implemented)

<p>
<a href="item_list.php">Home</a>
</body>
</html>
<?php }} ?>
