<?php /* Smarty version Smarty-3.1.16, created on 2014-04-24 08:06:31
         compiled from "./templates/employers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8858483225351f738b020c1-61077251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f631e88d6c9bde0a3685c5cc9927ef539917f8fc' => 
    array (
      0 => './templates/employers.tpl',
      1 => 1398316660,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1398325593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8858483225351f738b020c1-61077251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5351f738bec4a6_28888884',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5351f738bec4a6_28888884')) {function content_5351f738bec4a6_28888884($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Shadows+Into+Light">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">   
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/wp.css">
    <title>Employers</title>
  </head>
  <body>
    <div id="wrap">
      <div id="main" class="container"> 
        <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand"
            style="font-family: 'Tangerine', serif; font-size: 30px;text-shadow: 4px 4px 4px #aaa;">Job Search</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">I'm looking for a job</a></li>
                <li><a href="employers.php">I'm an employer</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
  
        
        <div class="row">
          <div class="col-lg-3">
            <div class="list-group">
              <a class="list-group-item" href="employers.php">Employers</a>
              <a class="list-group-item" href="index.php">Users</a>
            </div>
          </div>
          <div class="col-lg-9">
            

<H1>Employers</H1>
    <?php  $_smarty_tpl->tpl_vars['emp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['emp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['employers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['emp']->key => $_smarty_tpl->tpl_vars['emp']->value) {
$_smarty_tpl->tpl_vars['emp']->_loop = true;
?>
    <ul>
      <li><a class="ay" href="list_jobs.php?empID=<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['emp']->value['name'];?>
</a></li>
    </ul>
    <?php } ?>


          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p class="text-muted credit">Anthony Guevara<br/><a href="./docs/doc.html">Documentation</p>
    </div>
  </body>
</html><?php }} ?>
