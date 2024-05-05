<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

<?php

  if(1==1){ // aqui validar si se tiene una session activa lo manda para el inicio que es el template

  
   include 'includes/navbar.php';

   include 'includes/menu.php';
  
  //  include 'includes/breadcump.php';
   
   ?>
    <!-- /.content-header -->
    
    <!-- Main content -->
   
        <?php 
          if(isset($_GET['ruta'])){
            $ruta = $_GET['ruta'];
            
            
            if ($_GET["ruta"] == "dashboard" || $_GET["ruta"] == 'inscripcion')
            {
              include "includes/".$ruta.".php";
            }
            else
            {
              include "pages/404.php";
            }
          }else{
            
            include "includes/dashboard.php";
            
          }
    
          include 'includes/footer.php';

        }else{
    
          include 'includes/login.php';
          
        }
        ?>
        <!-- /.row -->
        
        
</body>
</html>
