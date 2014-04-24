<?php /* Smarty version Smarty-3.1.16, created on 2014-04-24 08:06:33
         compiled from "./templates/list_jobs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123201606753522107551273-46043641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33674532e2b73645366e3de3877184c0e5f7fe3a' => 
    array (
      0 => './templates/list_jobs.tpl',
      1 => 1398324649,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1398325593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123201606753522107551273-46043641',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535221075c1640_03632648',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535221075c1640_03632648')) {function content_535221075c1640_03632648($_smarty_tpl) {?><!DOCTYPE html>
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
    <title>List Jobs</title>
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
            

<H1>Jobs</H1>
<a class="ax" href="create_job.php?empID=<?php echo $_smarty_tpl->tpl_vars['empID']->value;?>
"><strong>+</strong> Add new job</a>
    <?php if (!empty($_smarty_tpl->tpl_vars['jobs']->value)) {?>
      <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
      <H2><?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
</H2>
      <ul>  
        <li><a class="ay" href="job_details.php?id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
&amp;empID=<?php echo $_smarty_tpl->tpl_vars['empID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['description'];?>
</a><br/>
        </li>
      </ul>
      <?php } ?>
    <?php } else { ?>
      No Jobs Available
    <?php }?>


          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p class="text-muted credit">Anthony Guevara<br/><a href="./docs/doc.html">Documentation</p>
    </div>
  </body>
</html><?php }} ?>
