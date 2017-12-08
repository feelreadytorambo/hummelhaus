<!doctype html>

<html>
  <body>
    <?php
      $q = intval($_GET['q']);
      $con = mysqli_connect('localhost', 'root', '', 'hummelhaus');
      if(!$con){
        die('Could not connect: '. mysqli_error($con));
      }

      mysqli_select_db($con, "hummelhaus");
      $query = "SELECT * FROM temperature";
      $result = mysqli_query($con,$query);
      $row = mysqli_fetch_array($result);
      echo $row[$q];
      mysqli_close($con);
     ?>
  </body>
</html>
