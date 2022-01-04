<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:../index.php');
}
include('../dbconfig.php');
?>

<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_prod.php?id='+id;
     }
}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add products</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../css/bootstrap.min.css" rel="stylesheet">

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
        </nav>
    </div>
    <script src="../css/jquery.min.js"></script>

    <script src="../css/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
        <div class="col-lg-12" style="margin-top:60px;margin-bottom:20px">
				<h2 style="color:darkslategray">Product List</h2>
		</div>
	</div>
</div>

<div class="container">
<?php
$db = mysqli_connect("localhost", "root", "", "Online grocery shop");
	
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr class='success'>";
	
	echo "<th>ID</th>";
	echo "<th>Product name</th>";
	echo "<th>Category</th>";
	echo "<th>Description</th>";
	echo "<th>Price</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	
	$i=1;
	$sql = "SELECT * FROM products";
	
            $result = mysqli_query($db, $sql);
	
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td>".$row['pid']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['cat']."</td>";
		echo "<td>".$row['des']."</td>";
		echo "<td>".$row['price']."</td>";
		echo "<td class='text-center'><a href='#' onclick='deletes($row[pid])'><span style=color:red;>delete</span></a></td>";
		
		echo "</tr>";
	}
?>
</div>

</body>