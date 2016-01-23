
<?php  
// echo $_SESSION['UserId'];   
//    echo '<a href="edit_profile.php?UserId='.$_SESSION['UserID'].'>Edit Profile</a>';
 $sql = "SELECT * FROM userss WHERE username = '$_SESSION[username]'";
      $rsd = mysql_query($sql) or trigger_error(mysql_error()." in ".$sql);
      while ($row = mysql_fetch_array($rsd)) {
    $UserID = $row['UserID'];?>

    <a href="edit_profile.php?edit=<?php echo $UserID?>">Edit Profile</a><br><hr>
    <style>
    #profile{
      border: 1px solid black;
      display: inline-block;
    }
    #content{
    border: 1px solid red;
    }
    #usernav{
      float: right;
      padding-right: 50px;
    }
    </style>
    <div id='content'>
      content
      <div id = 'profile'>
    <?php

    echo $UserID;
     echo '<h6>Hello: '.$_SESSION['username'].'Member since: '.$row['time'].'</h6>';

      echo 'last logged in: '. $row['logout'];
      echo '<br>UserID is: '. $row['UserID'];
      echo '<br>Your Username is: '. $row['username'];
      //echo '<br>Your password is: '. $row['password'];
      echo '<br>Your First Name is: '. $row['firstname'];
      echo '<br>Your Last name is: '. $row['lastname'];
     // echo '<br>Your Salt is: '. $row['salt'];
      echo '<br>Your account was made on: '. $row['time'];
      echo '<br>Your email is: '. $row['email'];
      echo '<br>last logged in: '. $row['login'];
      echo '<br>last logged out: '. $row['logout'];
      $login  = $row['login'];
      $logout  = $row['logout'];
      }?>
    </div>  <!-- profile info -->
    <div id='usernav'>
      <aside>
        <ul>
          <li><a href="">my pics</a></li>
          <li><a href="">my mesages</a></li>
          <li><a href="">my friends</a></li>
          <li><a href="">my places</a></li>
          <li><a href="">my meetups</a></li>
        </ul>
      </aside>
    </div>
  </div>  <!-- content -->
  <!-- content -->
      <br><hr>
<a href="edit_profile.php?edit=<?php echo $UserID?>">Edit Profile</a>