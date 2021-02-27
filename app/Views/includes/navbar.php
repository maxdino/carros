<body class="nav-md">
  <div class="container body">
    <div class="main_container">
    
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
          <a href="<?php echo base_url(); ?>/index.php/Principal" class="site_title"> <span >JOMHIA CAR</span></a>
        </div>
        
        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
          <div class="profile_pic">
            <img src="<?php echo  base_url().'/public/imagen/'.$_SESSION['imagen']; ?>" alt="..." class="img-circle profile_img">
          </div>
          <div class="profile_info">
            <span>Bienvenido,</span>
            <h2  style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis; "><?php echo $_SESSION['nombre']; ?></h2>
          </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
              <li><a href="<?php echo base_url(); ?>/index.php/Caracteristica"><i class="fa fa-tags"></i> Caracteristica </a>
              </li>
              <li><a href="<?php echo base_url(); ?>/index.php/Sub_caracteristica"><i class="fa fa-edit"></i> Sub Caracteristica </a>
              </li>
               <li><a href="<?php echo base_url(); ?>/index.php/Modelo"><i class="fa fa-bookmark"></i> Modelo </a></li>
              <li><a href="<?php echo base_url(); ?>/index.php/Marca"><i class="fa fa-barcode"></i> Marca </a></li>
              <li><a href="<?php echo base_url(); ?>/index.php/Color"><i class="fa fa-tachometer"></i> Color </a></li>
              <li><a href="<?php echo base_url(); ?>/index.php/Fabricacion"><i class="fa fa-wrench"></i> Fabricación </a></li>
              <li><a href="<?php echo base_url(); ?>/index.php/Motor"><i class="fa fa-cogs"></i> Motor </a></li>
              <li><a href="<?php echo base_url(); ?>/index.php/Vehiculo"><i class="fa fa-automobile"></i> Vehiculo </a></li>
              <?php if($_SESSION["id_usuario"]==1){ ?>
              <li><a href="<?php echo base_url(); ?>/index.php/Usuario"><i class="fa fa-user"></i> Usuario</a>
              </li>
              <?php } ?>
            </ul>
          </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
          <!--  <div class="sidebar-footer hidden-small">
              <a    >
                <span class="glyphicon  " aria-hidden="true"></span>
              </a>
              <a    >
                <span class="glyphicon  " aria-hidden="true"></span>
              </a>
              <a   disabled="true" >
                <span class="glyphicon  " aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Desconectar">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url().'/public/imagen/'.$_SESSION['imagen']; ?>" alt=""><nombre style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis; "><?php echo $_SESSION['nombre']; ?></nombre>
                    <span class=" fa fa-angle-down" ></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url(); ?>/index.php/Login/cerrar_session"><i class="fa fa-sign-out pull-right"></i> Desconectar</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->