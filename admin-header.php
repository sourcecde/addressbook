<?php 
session_start();
// if( !isset($_SESSION["user_id"]) ){
//     header("location:login.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Address Book</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.php">Address Book</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <!-- <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="dropdown-menu">
                  <li class="not-head">You have 4 new notifications.</li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li class="not-footer"><a href="#">See all notifications.</a></li>
                </ul>
              </li> -->
              <!-- User Menu-->
              <!-- <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">                  
                  <li><a href="profile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li> -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <!-- <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="images/user.png" alt="User Image"></div>
            <div class="pull-left info">
              <p>Admin</p>
              <p class="designation">Address Book</p>
            </div>
          </div> -->
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <!-- <li id="home"><a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li> -->
            <li id="borrowers" class="treeview"><a href="#"><i class="fa fa-user-circle-o"></i><span>Address</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li id="add-borrower"><a href="add-address.php"><i class="fa fa-user-plus"></i> Add Address</a></li>
                <li id="all-borrowers"><a href="index.php"><i class="fa fa-list"></i> All Address</a></li>                
              </ul>
            </li>
           <!-- <li id="lenders" class="treeview"><a href="#"><i class="fa fa-user-circle"></i><span>Item</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li id="add-lender"><a href="add-item.php"><i class="fa fa-user-plus"></i> Add Item</a></li>
                <li id="all-lenders"><a href="all-item.php"><i class="fa fa-list"></i> All Item</a></li>                
              </ul>
            </li> -->
            <!-- <li id="loans" class="treeview"><a href="#"><i class="fa fa-money"></i><span> Manage Party</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li id="add-loan"><a href="add-party.php"><i class="fa fa-plus"></i>Add Party</a></li>
                <li id="all-loans"><a href="all-party.php"><i class="fa fa-list"></i> View All Party</a></li>
              </ul>
            </li>   -->


            <!-- <li id="loans" class="treeview"><a href="#"><i class="fa fa-money"></i><span>  Orders</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li id="add-loan"><a href="add-order.php"><i class="fa fa-plus"></i>Add Orders</a></li>
                <li id="all-loans"><a href="all-order.php"><i class="fa fa-list"></i> View All Orders</a></li>
              </ul>
            </li>   -->         
          </ul>
        </section>
      </aside>