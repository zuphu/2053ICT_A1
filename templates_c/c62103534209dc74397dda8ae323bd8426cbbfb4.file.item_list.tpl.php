<?php /* Smarty version Smarty-3.1.16, created on 2014-04-19 03:04:01
         compiled from "./templates/item_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:544544933534d18305f4e31-70885232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c62103534209dc74397dda8ae323bd8426cbbfb4' => 
    array (
      0 => './templates/item_list.tpl',
      1 => 1397876519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '544544933534d18305f4e31-70885232',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534d183065cb45_17942953',
  'variables' => 
  array (
    'query' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534d183065cb45_17942953')) {function content_534d183065cb45_17942953($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Show item list</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/wp.css">
</head>

<body>
<?php if ($_smarty_tpl->tpl_vars['query']->value) {?>
<h1>Items for '<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
'</h1>
<?php } else { ?>
<h1>Items</h1>
<?php }?>
    
<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
<ul>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <li><a href="item_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['summary'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
<?php } ?>
</ul>
<?php } else { ?>
<p>No items found.</p>
<?php }?>

<form method="get" action="item_list.php">
Search: <input type="text" name="query"> <input type="submit" value="Go">
</form>

<p><a href="add_item.php">Add a new item</a></p>

<?php if ($_smarty_tpl->tpl_vars['query']->value) {?>
<p><a href="item_list.php">Home</a></p>
<?php }?>
</body>
</html>
<?php }} ?>
