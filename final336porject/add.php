<?php
session_start();
if(!isset($_SESSION['fullName']))// if(!isset($_SESSION['userName']) || !isset($_SESSION['adminName']))
{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add to Wishlist</title>
        <!--Needed for Bootstrap,Jquery,Javascript,and Ajax-->
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="styles.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Secret Santa</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="main.html">Home</a></li>
          <li><a href="list.php">User List</a></li>
          <li><a href="wishlist.php">Wish List</a></li>
          <li><a href="add.php">Add to Wishlist</a></li>
          <li><a href="admin.php">Update/Delete Wishlist</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <!--<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
          <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </div>
    </nav>
    <!--Navigation Bar End-->
    
    <?php
    include'./functions.php';
    ?>

    <form method="GET">
        <!-- REGISTRATION FORM -->
        <div class="text-center" style="padding:50px 0">
        	<div class="signup">Add Wishlist</div>
        	<!-- Main Form -->
        	<div class="login-form-1">
        		<form id="register-form" class="text-left">
        			<div class="login-form-main-message"></div>
        			<div class="main-login-form">
        				<div class="login-group">
        					<div class="form-group"> <!--first name-->
        						<label for="reg_username" class="sr-only"></label>
        						<input type="text" class="form-control" id="reg_username" name="wishName" placeholder="Name of Item">
        					</div>
        					<div class="form-group">    <!--last name-->
        						<label for="reg_password" class="sr-only">Password</label>
        						<input type="number" class="form-control" id="reg_password" name="wishPrice" placeholder="Price (Round up value)">
        					</div>
        					<div class="form-group">    <!--username-->
        						<label for="reg_password_confirm" class="sr-only">Password Confirm</label>
        						<input type="text" class="form-control" id="reg_password_confirm" name="description" placeholder="Comments">
        					</div>
        					
        					<div class="form-group">    <!--password-->
        						<label for="reg_email" class="sr-only">Email</label>
        						<input type="text" class="form-control" id="reg_email" name="wishUser" placeholder="Name of Person">
        					</div>
        				</div>
        				<button type="submit" name="addWish" class="login-button"><i class="fa fa-chevron-right"></i></button>
        			</div>
        		</form>
        	</div>
        	<!-- end:Main Form -->
        </div>
    </form>
    <?=addWishlist()?>
    </body>
</html>