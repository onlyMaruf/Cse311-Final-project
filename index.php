<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:login.php');
}
include('../dbconfig.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/metisMenu.min.css" rel="stylesheet">
    <link href="../css/sb-admin-2.css" rel="stylesheet">

</head>

<body>
	<div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0;background:darkslategray">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:white">Online Grocery Shop</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white"><i class="fa fa-caret-down"></i>Employee</a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="index.php?info=update_password">Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation" style="background:darkslategray">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                       <a href="index.php?info=sales">Sales Department<span class="fa arrow"></span></a>
                        </li>
						
                    </ul>
                </div>
            </div>
        </nav>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">       
<?php 
    @$id=$_GET['id'];
    @$info=$_GET['info'];
    if($info!=""){
        if($info=="sales"){
            include('sales.php');
        }
        elseif($info=="acc"){
            include('accounts.php');
        }   
        else if($info=="update_password"){
            include('update_pass.php');
        }
    }else{  ?>
                            
<div class="container" style="margin-top:60px">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <a href="prod.php">
        <div class="panel-heading" style="background:darkslategray">Add Products</div>
        <div class="panel-body"><img src="../images/add.png" class="img-responsive" style="width:100%" alt="Image"></div></a>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <a href="display_prod.php">
        <div class="panel-heading" style="background:darkslategray">View All Products</div>
        <div class="panel-body"><img src="../images/inv.jpg" class="img-responsive" style="width:100%" alt="Image"></div></a>
      </div>
    </div>
  </div>
</div><br>
        <?php }
            ?>

        </div>
    </div>
</div>

    </div>
    <script src="../css/jquery.min.js"></script>

    <script src="../css/bootstrap.min.js"></script>

    <script src="../css/metisMenu.min.js"></script>

    <script src="../css/sb-admin-2.js"></script>
</body>
</html>
