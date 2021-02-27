     <!DOCTYPE html>
     <html lang="en">
     <head>
     	<meta charset="utf-8">
     	<meta http-equiv="X-UA-Compatible" content="IE=edge">
     	<!-- Tell the browser to be responsive to screen width -->
     	<meta name="viewport" content="width=device-width, initial-scale=1">
     	<meta name="description" content="">
     	<meta name="author" content="">

     	<!-- Favicon icon -->
     	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/public/logo/logo0.png">
     	<title>JOMHIA CAR</title>
        <?php session_start(); ?> 
        <?php if (!$_SESSION['id_usuario']) {
               echo"<script language='javascript'>window.location='".base_url()."/index.php/Login'</script>;";
        }  ?> 
       <!-- Bootstrap -->
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
       <!-- Font Awesome -->
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
       <!-- NProgress -->
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/nprogress/nprogress.css" rel="stylesheet">
       <!-- Animate.css -->
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/animate.css/animate.min.css" rel="stylesheet">
       <!-- iCheck -->
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
       <link href="<?php echo base_url(); ?>/public/assets_1/dropify/css/dropify.css" rel="stylesheet">
       <!-- bootstrap-wysiwyg -->
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
       <!-- Select2 -->
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
       <!-- Switchery -->
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
       <!-- starrr -->
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/starrr/dist/starrr.css" rel="stylesheet">
       <!-- Datatables -->
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
       <!-- Select2 -->
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
       <!-- Custom Theme Style -->
       <link href="<?php echo base_url(); ?>/public/assets_1/build/css/custom.min.css" rel="stylesheet">
       <!-- PNotify -->
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
       <link href="<?php echo base_url(); ?>/public/assets_1/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

       <link rel="stylesheet" href="<?php echo base_url(); ?>/public/alertas/css/sweetalert.css">
       <style type="text/css">

          @media only screen and (max-width: 1200px) {
               .dataTables_filter{
                    width: 1000px;
               }
          }
          @media only screen and (max-width: 930px) {
               .dataTables_filter{
                    width: 800px;
               }
          }
          @media only screen and (max-width: 750px) {
               .dataTables_filter{
                    width: 100px;
               }
          }

          @media only screen and (max-width: 450px) {
               .dataTables_filter{
                    width: 200px;
               }
          }
          @media only screen and (max-width: 400px) {
               .dataTables_filter{
                    display: none;
               }
               .tamano{
                    width: 40px;
                    font-size: 7px;
               }
          }
          @media only screen and (max-width: 280px) {
               .dataTables_filter{
                    display: none;
               }

               .tamano{
                    display: none;
               }

          }



     </style>


