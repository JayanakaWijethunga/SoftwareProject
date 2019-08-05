
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Control Panel</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">

  

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">


    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>CP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin </b>Control Panel</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        
          <p>{{ Auth::user()->username }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          
          
        </div>
        <br/><br/>
      </div>
      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Actions</li>
        <!-- Optionally, you can add icons to the links -->

        <li class="active"><a href="{{ route('user.records') }}">


        <i class="fa fa-tasks"></i> <span>Manage Users</span></a></li>
        
      

        <li class=""><a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        <i class="fa fa-sign-out"></i> <span>Sign-Out</span></a></li>
        
      </ul>

  
                                       
                                    

                                   

      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        Page Header
        <small>Optional description</small>
      </h1>

    </section>

 
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
 
  </div>


  <!-- Main Footer 
  <footer class="main-footer">

    <div class="pull-right hidden-xs">
      Anything you want
    </div>

    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>-->


  <div class="control-sidebar-bg"></div>
</div>



<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../dist/js/adminlte.min.js"></script>

</body>
</html>