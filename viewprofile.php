<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php

if (isset($_GET['UserID'])) {
 	$userid = $_GET['UserID']; 
 $sql = "SELECT * FROM userss WHERE UserID = '$userid'";
      $rsd = mysql_query($sql) or trigger_error(mysql_error()." in ".$sql);
      while ($row = mysql_fetch_array($rsd)) {
     echo  '<h6> '.$_SESSION['username'].'Member since '.$row['time'].'</h6>';

      echo 'last logged in '. $row['logout'];
      echo '<br>UserID is '. $row['UserID'];
      echo '<br>Your Username is '. $row['username'];
      echo '<br>Your password is'. $row['password'];
      echo '<br>Your First Name is '. $row['firstname'];
      echo '<br>Your Last name is '. $row['lastname'];
      echo '<br>Your Salt is '. $row['salt'];
      echo '<br>Your account was made on '. $row['time'];
      echo '<br>Your email is '. $row['email'];
      echo '<br>last logged in '. $row['login'];
      echo '<br>last logged out '. $row['logout'];
      $row['total'] = (int)$row['login'] - (int)$row['logout'];
      echo '<br>total time logged in '. $row['total'];}

      }?>