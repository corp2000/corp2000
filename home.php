
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="complementos/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="complementos/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="complementos/framework_key/adminlte.css?v=3.2.0"> 
  
    <!-- DATATABLES -->
  <link rel="stylesheet" href="complementos/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="complementos/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="complementos/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="complementos/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="complementos/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="complementos/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">


</head>
<?php

// index.php


echo'<body class="hold-transition sidebar-mini layout-fixed">';
  /* Site wrapper */
  echo'<div class="wrapper">';

    /* Navbar */   
    include "view/head/head.php"; 
    /* /.navbar */

    /* Main Sidebar Container */

    /* Aside */   
    include "view/aside/aside.php";  
    /* /.Aside */

    /* Content Wrapper. Contains page content */
    include "view/body/sede/sede.php"; 
    /* /.content-wrapper */

    /* Footer */    
    include "view/footer/footer.php"; 
    /* /.Footer */

    /* Control Sidebar */
    echo'<aside class="control-sidebar control-sidebar-dark">';
      /* Control sidebar content goes here */
      echo'</aside>';
    /* /.control-sidebar */

    echo'</div>';
  /* ./wrapper */

  echo'

  
  




  <!-- jQuery -->
  <script src="complementos/framework_key/jquery.js"></script>
  <!-- Bootstrap 4 -->
  <script src="complementos/framework_key/bootstrap.bundle.js"></script>
  <script src="complementos/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="complementos/framework_key/adminlte.js"></script>
  
  <!-- JavaScript USUARIO-->
  <script src="complementos/js/usuario/usuario.js"></script> 
  <!-- JavaScript DATATABLE -->
  <script src="complementos/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="complementos/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="complementos/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="complementos/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="complementos/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="complementos/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="complementos/plugins/jszip/jszip.min.js"></script>
  <script src="complementos/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="complementos/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="complementos/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="complementos/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="complementos/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <!-- Select2 -->
<script src="complementos/plugins/select2/js/select2.full.min.js"></script>


</body>

</html>';