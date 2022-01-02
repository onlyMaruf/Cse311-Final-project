<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:../index.php');
}
include('../dbconfig.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Grocery Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }

    img:hover {
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}
   
  </style>
</head>


<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom:0;background:darkslategray">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php" style="color:#FFFFFF">Online Grocery Shop</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php?info=search" style="color:#FFFFFF"><span class="glyphicon glyphicon-search"></span>Search Products</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown">Your Account<span class="caret"></a>
          <ul class="dropdown-menu" style="background-color: #FFFFFF">
            <li><a href="index.php?info=contact">Contact Admin</a></li>
            <li><a href="index.php?info=update">Edit profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
        <li><a href="index.php?info=cart" style="color:#FFFFFF"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php 
  @$info=$_GET['info'];
  if($info!=""){
    if($info=="about"){
      include('../about.php');
    } 
    else if($info=="update"){
      include('update.php');
    }
    else if($info=="contact"){
      include('contact.php');
    }
    else if($info=="cart"){
      include('cart.php');
    }
    else if($info=="search"){
      include('search.php');
    }
  }
  else
    { ?>

<div class="container" style="margin-top:60px">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading" style="background:darkslategray">FRUITS AND VEGETABLES</div>
        <div class="panel-body"><a href="product.php?varname=fruit"><img src="../images/veg.jpg" onclick="myFunction(this);" class="img-responsive" style="width:100%" alt="Image"></a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading" style="background:darkslategray">MEAT AND FISH</div>
        <div class="panel-body"><a href="product.php?varname=meat"><img src="../images/meat.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading" style="background:darkslategray">MILK & DAIRY</div>
        <div class="panel-body"><a href="product.php?varname=milk"><img src="../images/milk.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
      </div>
    </div>
  </div>
</div>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading" style="background:darkslategray">BREAD & CAKES</div>
        <div class="panel-body"><a href="product.php?varname=bread"><img src="../images/bread.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        
        <div class="panel-heading" style="background:darkslategray">COOKING ESSENTIALS</div>
        <div class="panel-body"><a href="product.php?varname=cook"><img src="../images/cook.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading" style="background:darkslategray">SNACKS & INSTANT FOOD</div>
        <div class="panel-body"><a href="product.php?varname=snack"><img src="../images/snack.jpg" class="img-responsive" style="width:100%;" alt="Image"></a></div>
      </div>
    </div>
  </div>
</div><br><br>

<?php } ?>


   <div class="navbar-fixed-bottom nav navbar-inverse text-right" style="padding:2px;height:20px; background:darkslategray">
          <span style="color:#FFFFFF">CSE411 project</span>
              <a href="index.php?info=about">About</a>
         </div>
</script>


</body>
</html>