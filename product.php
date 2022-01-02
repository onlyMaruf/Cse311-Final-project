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
        <li><a href="#" style="color:#FFFFFF"><span class="glyphicon glyphicon-search"></span>Search Products</a></li>
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
        <li><a href="#" style="color:#FFFFFF"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container" style="margin-top:60px"> 
	<?php
  $db = mysqli_connect("localhost", "root", "", "Online grocery shop");
  $sql = "SELECT * FROM products";
	
  $result = mysqli_query($db, $sql);

while($row = mysqli_fetch_assoc($result))
	{
		$a= $_GET['varname'];
		if($row['cat'] == $a){
			;?>

			<div class="col-sm-4">
      			<div class="panel panel-primary">
        			<div class="panel-heading" style="background:darkslategray"><?php echo $row['name']?><p style="text-align: right;"><a href="add_cart.php">Hot Line</p></a></div>
        			<div class="panel-body"><img src="../images/<?php echo $row['name']?>/<?php echo $row['img']?>" class="img-responsive" style="width:100%" alt="Image"></div>
        			<div class="panel-footer"><?php echo $row['des']?><p style="text-align: right;">Price :&nbsp<?php echo $row['price']?>&nbspTK</p></div>
      			</div>
    		</div>


	<?php
		}else{
			continue;
		}
	 }
	 ?>
</div>
</body>
</html>