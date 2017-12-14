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
        <title>Wishlist</title>
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
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
        </ul>
      </div>
    </nav>
    <!--Navigation Bar End-->
    
    <h2>Welcome <?=$_SESSION['fullName']?>!</h2>
    
    <table align="center" border=2>
    <th><b>Name of Person</b></th>
    <th><b>Wishlist ID</b></th>
    <th><b>Wishlist Name</b></th>
    <th><b>Wishlist Price</b></th>
    <th><b>Wishlist Description</b></th>
    
    <?php
    include'./functions.php';
    //   echo'<table align="center" border=2>';
        // echo'<tr>';
        // echo'<th><b>ID</b></th>';
        // echo'<th><b>FIRST NAME</b></th>';
        // echo'<th><b>LASTNAME</b></th>';
        // echo'<th><b>USERNAME</b></th>';
        // echo'</tr>';
      $display = displayWishList();
      foreach($display as $d)
      {
        echo'<tr>';
        echo'<td>'.$d['wishUser'].'</td>';
        echo'<td>'.$d['wishId'].'</td>';
        echo'<td>'.$d['wishName'].'</td>';
        echo'<td>$'.$d['wishPrice'].'</td>';
        echo'<td>'.$d['description'].'</td>';
        echo'</tr>';
      }
    //   echo'</table>';
    ?>
    </table>
    </body>
</html>