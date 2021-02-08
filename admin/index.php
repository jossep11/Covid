<?php
include "../config/config.php";
include "../config/funciones.php";

if(isset($logear)){
  $username = clear($username);
  $password = clear($password);

  $q = $mysqli->query("SELECT * FROM admins WHERE username = '$username' AND password = '$password'");
  
  if(mysqli_num_rows($q)>0){
    $r = mysqli_fetch_array($q);
    $_SESSION['ID'] = $r['ID'];
    redir("./");
  }else{
    alert("Los datos no son validos");
    redir("./");
  }
  
}


if(!isset($_SESSION['ID'])){
  ?>


<!DOCTYPE html>
<html>

<head>
  <title>Admin Panel</title>
</head>

<body style="background: #26C194;color:#fff">
  <center>
    <form style="padding-top:10%;" method="post" action="">
      <div class="centrar_login">
        <label>
          <h2><i class="fa fa-key"></i> Iniciar Sesión Como Administrador</h2>
        </label>
        <div class="form-group">
          <input style="padding:10px;color:#333;width:40%" type="text" class="form-control" placeholder="Usuario"
            name="username" />
        </div>

        <div class="form-group">
          <input style="padding:10px;color:#333;width:40%" type="password" class="form-control" placeholder="Contraseña"
            name="password" />
        </div>
        <br><br>

        <div class="form-group">
          <button name="logear" type="submit"><i class="fa fa-sign-in"></i> Ingresar</button>
        </div>
      </div>
    </form>
  </center>

</body>

</html>
<?php
  die();
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin covid</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->

  
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../css/estilo.css">


</head>

<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">
  <!-- prueba-->
    <header class="main-header">
      <!-- Logo -->
      <a href="./?p=contenido" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>V</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>T</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>


      </nav>

    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">


          <div class="pull-left image">
          <!--    <img src="avatars/avatar.jpg" style="width:35px;height:35px;" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
      
          <p><?=admin_name_connected();    
       
          ?></p>
           
            -->
          </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <ul class="sidebar-menu">
          <li class="header">MENU</li>

          <li>
            <a href="./">
              <i class="fa fa-th"></i> <span>Principal</span>
            </a>
          </li>
          

       
          <li>
            <a href="./?p=contenido">
              <i class="fa fa-th"></i> <span>Contenido</span>
            </a>
          </li>


        </ul>
      </section>
 
    </aside>














    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <?php

    if(!isset($p)){
    ?>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
              
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="../" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>

            <div>
              <a href="?p=logout" class="btn btn-primary">Salir</a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->

    <!-- /.row -->
  </div>

  <!-- /.box -->

  </section>
  <!-- right col -->
  </div>
  <!-- /.row (main row) -->

  <?php
    }else{
      ?>
  <div style="padding:30px;">
    <?php
      if(file_exists("modulos/".$p.".php")){
        include "modulos/".$p.".php";
      }else{
        echo "El modulo solicitado no existe";
      }
      ?>
  </div>
  <?php

    }
    ?>

  </section>
  <!-- /.content -->
  </div>

  <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 2.2.0 -->
  <script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <!-- Bootstrap 3.3.6 -->
  <!-- Morris.js charts -->
  <!-- AdminLTE App -->
  <script src="dist/js/app.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
</body>


</html>


