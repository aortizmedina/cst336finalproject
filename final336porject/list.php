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
        <title>User List</title>
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
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="list.php">User List</a></li>
          <li><a href="wishlist.php">Wish List</a></li>
          <li><a href="add.php">Add to Wishlist</a></li>
          <li><a href="admin.php">Update/Delete Wishlist</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <!--<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
        </ul>
      </div>
    </nav>
    <!--Navigation Bar End-->
    
    <h2>Welcome <?=$_SESSION['fullName']?>!</h2>
    
    
    <table align="center" border=2>
    <th><b>ID</b></th>
    <th><b>FIRST NAME</b></th>
    <th><b>LAST NAME</b></th>
    <th><b>USERNAME</b></th>
    <?php
    include'./functions.php';
    //   echo'<table align="center" border=2>';
        // echo'<tr>';
        // echo'<th><b>ID</b></th>';
        // echo'<th><b>FIRST NAME</b></th>';
        // echo'<th><b>lastname</b></th>';
        // echo'<th><b>USERNAME</b></th>';
        // echo'</tr>';
      $display = displayUsers();
      foreach($display as $d)
      {
        echo'<tr>';
        echo'<td>'.$d['userId'].'</td>';
        echo'<td>'.$d['firstname'].'</td>';
        echo'<td>'.$d['lastname'].'</td>';
        echo'<td>'.$d['username'].'</td>';
        echo'</tr>';
      }
    //   echo'</table>';
    ?>
    </table>
    </body>
</html>