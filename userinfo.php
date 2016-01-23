<?php     
 $sql = "SELECT * FROM userss WHERE username = '$_SESSION[username]'";
      $rsd = mysql_query($sql) or trigger_error(mysql_error()." in ".$sql);
      while ($row = mysql_fetch_array($rsd)) {
     echo  '<h6>Hello '.$_SESSION['username'].'Member since '.$row['time'].'</h6>';

      echo 'last logged in '. $row['logout'];
      }?>