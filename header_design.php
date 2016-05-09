<?php
echo '
		<header class="main-header">
        <!-- Logo -->
        <a href="dashboard.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>T</b>Pred</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Traffic</b>Prediction</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">3</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 3 notifications</li>
                
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="images/manju.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Manju</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="images/manju.jpg" class="img-circle" alt="User Image">
                    <p>
                      Manjunath Gowda
                      <small></small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="land1/index.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
             
            </ul>
          </div>
        </nav>
      </header>

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="images/manju.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Manjunath Gowda</p>
              <a href="#"><i class="fa fa-circle text-success"></i>Active User</a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            
            <li class="active treeview">
              <a href="dashboard.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="dashboard.php"><i class="fa fa-circle-o"></i>Chart Visualisation</a></li>
                
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Prediction</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="map_form.php"><i class="fa fa-circle-o"></i>Route Traffic Predcition</a></li>
                <li><a href="quant_traffic.php"><i class="fa fa-circle-o"></i>Traffic Prediction Events</a></li>
                <li><a href="event_visual.php"><i class="fa fa-table"></i>Events Visualisation</a></li>
                 <li><a href="event_correlate.php"><i class="fa fa-circle-o"></i>Event Correlation</a></li>
              </ul>
            </li>
            
            <li><a href="documentation/index.php"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


      ';


?>