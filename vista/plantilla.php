<?php include 'core/configGeneral.php'; ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practica 3</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo SERVERURL ?>vista/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo SERVERURL ?>vista/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="<?php echo SERVERURL ?>vista/plugins/fontawesome-free/css/all.min.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="<?php echo SERVERURL ?>vista/plugins/fullcalendar/main.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo SERVERURL ?>vista/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">


        <?php
        require_once "./controlador/vista.controlador.php";
        $vt = new VistaControlador();
        $vistas = $vt->CtrMostrarVistas();

        
        if ($vistas == "inicio" || $vistas == "404") :
            if ($vistas == "inicio") { 
                include 'modulos/sidebar.php';
            ?>
                

                <?php include 'modulos/navbar.php'; ?>
                <div class="content-wrapper">
                    <?php require_once "./vista/contenido/inicio-view.php"; ?>
                </div>

            <?php 
            } else {
                require_once "./vista/contenido/404-view.php";
            }
        else : ?>

            <!-- Content Wrapper. Contains page content -->
            <!-- NavBar --> 
           

            <?php 
            include 'modulos/sidebar.php'; 
            include 'modulos/navbar.php'; ?>
            <div class="content-wrapper">

                <!-- Content page -->

                <?php require_once $vistas; ?>




            </div>
            <!-- /.content-wrapper -->
        <?php endif; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <?php include 'modulos/scripts.php'; ?>
</body>

</html>