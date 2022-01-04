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

    <title>Add products</title>

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
        </nav>
    </div>
    <script src="../css/jquery.min.js"></script>

    <script src="../css/bootstrap.min.js"></script>



<?php 
$db = mysqli_connect("localhost", "root", "", "Online grocery shop");
extract($_POST);
if(isset($save))
{
//image
$imageName=$_FILES['img']['name'];

$query="insert into products values('$n','$cat','$d','$n','$imageName')";
mysqli_query($db,$query);

//upload image

mkdir("../images/$n");
move_uploaded_file($_FILES['img']['tmp_name'],"../images/$n/".$_FILES['img']['name']);


$err="<font color='blue'><h3 align='center'>Product Upload Complete!!<h3></font>";


}

?>


		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered" style="margin-bottom:50px">
	<caption><h2 align="center">Add products</h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				<tr>
					<td>Product Name</td>
					<Td><input  type="text" name="n" class="form-control" required/></td>
				</tr>
				<tr>
					<td>Category</td>
					<Td><select id="cat" name="cat">
    					<option value="fruit">FRUITS AND VEGETABLES</option>
    					<option value="meat">MEAT AND FISH</option>
    					<option value="milk">MILK & DAIRY</option>
    					<option value="bread">BREAD & CAKES</option>
    					<option value="cook">COOKING ESSENTIALS</option>
    					<option value="snack">SNACKS & INSTANT FOOD</option>
  					</select></td>
				</tr>
				<tr>
					<td>Product Description</td>
					<Td><input type="text" name="d" class="form-control" required/></td>
				</tr>
				<tr>
					<td>Price</td>
					<Td><input type="text" name="p" class="form-control" required/></td>
				</tr>
				<tr>
					<td>Product Image </td>
					<Td><input type="file" name="img" class="form-control" required/></td>
				</tr>
<tr>		
<td colspan="2" align="center">
<input type="submit" value="Save" class="btn btn-info" name="save"/>
<input type="reset" value="Reset" class="btn btn-info"/>
				
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html>