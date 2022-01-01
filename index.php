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

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom:0;background:darkslategray">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">Online Grocery Shop</a>
            </div>

            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a style="color:#FFFFFF" href="index.php?info=employee">Employe list</a></li>
                    
                    <li class="dropdown">
                        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#">User
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background-color: #FFFFFF">
                            <li><a href="index.php?info=display_user">Manage User</a></li>
                        </ul>
                    </li>                 
                    
                    <li class="dropdown">
                        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#">Admin
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background-color: #FFFFFF">
                            <li><a href="index.php?info=update_password">Change Password</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <?php 
                        @$id=$_GET['id'];
                        @$info=$_GET['info'];
                        if($info!=""){
                            if($info=="display_user"){
                                include('display_user.php');
                            }
                            elseif($info=="employee"){
                                include('display_employee.php');
                            }   
                            else if($info=="update_password"){
                                include('update_password.php');
                            }
                        }else{
                            include('home.php');
                        }
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
