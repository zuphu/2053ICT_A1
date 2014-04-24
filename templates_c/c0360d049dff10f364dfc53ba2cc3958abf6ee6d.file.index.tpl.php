<?php /* Smarty version Smarty-3.1.16, created on 2014-04-24 08:57:33
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1630426325351f64dce9508-31301224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1398329469,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1398325593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1630426325351f64dce9508-31301224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5351f64de78248_41329581',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5351f64de78248_41329581')) {function content_5351f64de78248_41329581($_smarty_tpl) {?><!DOCTYPE html>
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
    <title>Index</title>
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
            
<a class="ax" href="view_jobs.php">View All Jobs</a>
<br/><br/>
OR
<br/>
<h3>Search By Critera</h3>

<form name="Search" action="view_jobs.php" method="get">
  <div class="container">
    <div class="row">
      <div class="col-md-4 align-right">Industry:</div><div class="col-md-6"><input type="text" name="industry"></div>
    </div>
    <div class="row">
      <div class="col-md-4 align-right">Key Word:</div><div class="col-md-6"><input type="text" name="keywords"></div>
    </div>
    <div class="row">
      <div class="col-md-4 align-right">Location:</div><div class="col-md-6"><input type="text" name="location"></div>
    </div>
    <div class="row">
      <div class="col-md-4 align-right">Minimum Salary:</div><div class="col-md-6"><input type="text" name="minsalary"></div>
    </div>
    <div class="row">      
      <div class="col-md-4 align-right"><input type="submit" style="float:right;" value="Search"></div><div class="col-md-6"></div>
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
