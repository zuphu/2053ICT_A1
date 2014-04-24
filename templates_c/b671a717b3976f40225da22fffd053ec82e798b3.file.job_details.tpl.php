<?php /* Smarty version Smarty-3.1.16, created on 2014-04-24 08:14:09
         compiled from "./templates/job_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38027787053523334c5ee82-45405925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b671a717b3976f40225da22fffd053ec82e798b3' => 
    array (
      0 => './templates/job_details.tpl',
      1 => 1398325406,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1398325593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38027787053523334c5ee82-45405925',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53523334cd3687_83027225',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53523334cd3687_83027225')) {function content_53523334cd3687_83027225($_smarty_tpl) {?><!DOCTYPE html>
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
    <title>Job Details</title>
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
            

<H1>Job Details</H1>
    <?php  $_smarty_tpl->tpl_vars['detail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['detail']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['details']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['detail']->key => $_smarty_tpl->tpl_vars['detail']->value) {
$_smarty_tpl->tpl_vars['detail']->_loop = true;
?>
      <h2><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</h2>
        <div class="container">
          <div class="row">
            <div class="col-md-4 align-right">Title:</div><div class="col-md-6"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</div>
          </div>
          <div class="row">
            <div class="col-md-4 align-right">Description:</div><div class="col-md-6"><?php echo $_smarty_tpl->tpl_vars['detail']->value['description'];?>
</div>
          </div>
          <div class="row">
            <div class="col-md-4 align-right">Location:</div><div class="col-md-6"><?php echo $_smarty_tpl->tpl_vars['detail']->value['location'];?>
</div>
          </div>
          <div class="row">
            <div class="col-md-4 align-right">Salary:</div><div class="col-md-6"><?php echo $_smarty_tpl->tpl_vars['detail']->value['salary'];?>
</div>
          </div>
        </div>
      <br/>
      <a class="ax" href="update_details.php?id=<?php echo $_smarty_tpl->tpl_vars['detail']->value['id'];?>
">[Update]</a> <a class="ax" href="delete_job.php?id=<?php echo $_smarty_tpl->tpl_vars['detail']->value['id'];?>
&amp;empID=<?php echo $_smarty_tpl->tpl_vars['empID']->value;?>
">[Delete]</a>
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
