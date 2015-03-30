
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kevin Somers">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>asset/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url()?>asset/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">后台管理</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview</a></li>
            <li><a href="#">介绍</a></li>
            <li><a href="#">项目</a></li>
            <li><a href="#">客户评价</a></li>
          </ul>
        </div>
        <form class="form-signin" role="form" method="post" action="<?php echo site_url('homepage/edit')?>">
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
              <input name="original" type="text" class="form-control" placeholder="Original Box">
              <input name="strategy" type="text" class="form-control" placeholder="Strategy Box">
              <input name="thebox" type="text" class="form-control" placeholder="Out of the Box">
            <h2 class="sub-header">介绍</h2>
            <div>
              <input name="introduce1" type="text" class="form-control" placeholder="introduce">
              <input name="introduce2" type="text" class="form-control" placeholder="introduce">
              <input name="introduce3" type="text" class="form-control" placeholder="introduce">
              <input name="introduce4" type="text" class="form-control" placeholder="introduce">
            </div>
            <h2 class="sub-header">项目</h2>
            <div >
              <input name="project1" type="text" class="form-control" placeholder="project">
              <input name="project2" type="text" class="form-control" placeholder="project">
              <input name="project3" type="text" class="form-control" placeholder="project">
              <input name="project4" type="text" class="form-control" placeholder="project">
              <input name="project5" type="text" class="form-control" placeholder="project">
            </div>
            <h2 class="sub-header">客户评价</h2>
            <div>
              <input name="evaluation1" type="text" class="form-control" placeholder="evaluation">
              <input name="evaluation2" type="text" class="form-control" placeholder="evaluation">
              <input name="evaluation3" type="text" class="form-control" placeholder="evaluation">
              <input name="evaluation4" type="text" class="form-control" placeholder="evaluation">
              <input name="evaluation5" type="text" class="form-control" placeholder="evaluation">
            </div>
          </div>
          <div class="col-md-3 col-md-offset-6">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
          </div>
          
        </form>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/docs.min.js"></script>
  </body>
</html>
