<template> 
<div> 
     <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>F</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">Fascinations</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                <!-- Messages: style can be found ixn dropdown.less-->
              
                <!-- Notifications: style can be found in dropdown.less -->
               
                <!-- Tasks: style can be found in dropdown.less -->
               
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                    <span class="hidden-xs">Alexander Pierce</span>
                    </a>
                    <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                        <p>
                        Alexander Pierce - Web Developer
                        <small>Member since Nov. 2012</small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                        <div class="row">
                        <div class="col-xs-4 text-center">
                            <a href="#">Followers</a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <a href="#">Sales</a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <a href="#">Friends</a>
                        </div>
                        </div>
                        <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                    </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
                </ul>
            </div>
            </nav>
        </header>
         <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                <p>Admin</p>
                <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
                </div>
            </div>
            <!-- search form -->
           
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
            <li><router-link to="/admin/dashboard">
                 <i class="fa fa-th"></i> <span>Dashboard</span>
                <span class="pull-right-container"></span>
             </router-link>
            </li>
               <li>
                <router-link to="/admin/create-coupon">
                <i class="fa fa-th"></i> <span>Create Coupon</span>
                <span class="pull-right-container"></span>
               </router-link>
                </li>
                  <li>
                <router-link to="/admin/create-shopkeeper">
                    <i class="fa fa-user"></i> <span>Add ShopKeeper</span>
                    <span class="pull-right-container">
                    
                    </span>
                </router-link>
                  </li>
                  <li>
                <router-link to="/admin/manage-banner">
                    <i class="fa fa-user"></i> <span>Manage Banners</span>
                    <span class="pull-right-container">
                    
                    </span>
                </router-link>
                </li>
               
               
               
               

              
               
             
            </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        </div>
</template>

<script>
    export default {
      name: 'Sidebar'
    }
</script>
