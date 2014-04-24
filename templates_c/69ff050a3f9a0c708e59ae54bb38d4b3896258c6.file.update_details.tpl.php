<?php /* Smarty version Smarty-3.1.16, created on 2014-04-24 08:25:19
         compiled from "./templates/update_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113092106353523cfc039e59-99234775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69ff050a3f9a0c708e59ae54bb38d4b3896258c6' => 
    array (
      0 => './templates/update_details.tpl',
      1 => 1398324948,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1398325593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113092106353523cfc039e59-99234775',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53523cfc160566_25546844',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53523cfc160566_25546844')) {function content_53523cfc160566_25546844($_smarty_tpl) {?><!DOCTYPE html>
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
    <title>Update Job</title>
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
            

<h1>Update Job</h1>
<form method="post" action="update_details_action.php">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['details']->value['id'];?>
">
    <div class="container">
      <div class="row">
        <div class="col-md-4 align-right">Title:</div><div class="col-md-6" style="width: 100%';"><textarea name="title"><?php echo $_smarty_tpl->tpl_vars['details']->value['title'];?>
</textarea></div>
      </div>
      <div class="row">
        <div class="col-md-4 align-right">Description:</div><div class="col-md-6"><textarea name="description"><?php echo $_smarty_tpl->tpl_vars['details']->value['description'];?>
</textarea></div>
      </div>
      <div class="row">
        <div class="col-md-4 align-right">Location:</div><div class="col-md-6"><textarea name="location"><?php echo $_smarty_tpl->tpl_vars['details']->value['location'];?>
</textarea></div>
      </div>
      <div class="row">
        <div class="col-md-4 align-right">Salary:</div><div class="col-md-6"><textarea name="salary"><?php echo $_smarty_tpl->tpl_vars['details']->value['salary'];?>
</textarea></div>
      </div>
      <div class="row">
        <div class="col-md-4 align-right"><input type="submit" value="Update item"></div>
      </div>       
    </div>
</form>

          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p class="text-muted credit">Anthony Guevara<br/><a href="./docs/doc.html">Documentation</p>
    </div>
  </body>
</html><?php }} ?>
