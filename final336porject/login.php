<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <!--Needed for Bootstrap,Jquery,Javascript,and Ajax-->
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="styles.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!--NEEDED FOR LOGIN-->
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <!--END SOURCE-->
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
          <li><a href="wishlist.php">Wish list</a></li>
          <li><a href="add.php">Add to Wishlist</a></li>
          <li><a href="admin.php">Update/Delete Wishlist</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
        </ul>
      </div>
    </nav>
    <!--Navigation Bar End-->
    
    <?php
    include'./functions.php';
    ?>
    <!--<form method="POST">-->
    <!--    Username: <input type="text" name="username"/><br>-->
    <!--    Password: <input type="password" name="password"/><br>-->
    <!--    <input type="submit" name="login" value="Login!"/>-->
    <!--</form>-->
    <form method="POST">
    <div class="text-center" style="padding:50px 0">
    	<div class="userLogin"><h1>Login</h1></div>
    	<!-- Main Form -->
    	<div class="login-form-1">
    		<form id="login-form" class="text-left">
    			<div class="login-form-main-message"></div>
    			<div class="main-login-form">
    				<div class="login-group">
    					<div class="form-group">
    						<label for="lg_username" class="sr-only">Username</label>
    						<input type="text" class="form-control" id="lg_username" name="username" placeholder="username">
    					</div>
    					<div class="form-group">
    						<label for="lg_password" class="sr-only">Password</label>
    						<input type="password" class="form-control" id="lg_password" name="password" placeholder="password">
    					</div>
    				</div>
    				<button type="submit" name="login" class="login-button"><i class="fa fa-chevron-right"></i></button>
    			</div>
    		</form>
    	</div>
    	<!-- end:Main Form -->
    </div>
    </form>

    <?=loginProcess()?>
    <?=loginAdmin()?>
    
    </body>
</html>