
<?php
 include "database-config.php";

 $sql = "SELECT * FROM passenger;";
 $output = mysqli_query($conn, $sql);


 if (isset($_POST['delete'])){
 
  $passid = $_POST['pass_id'];

  echo $passid;
 
  $qry = "DELETE FROM passenger WHERE pass_id = '{$passid}'";
 
  $res = $conn->query($qry);
 
  if($res==True){
     header("Location: admin-manage-passenger.php?key=deleted");
  }else{
     echo "Something wrong in your code";
  }

 }

?>
<?php
    if (isset($_GET['key'])) {
      if ($_GET['key']=='deleted') {
        echo "<div class='alert alert-primary' role='alert'>
        Successfully Deleted..!
      </div>";
      }
    }

  ?>
    

</body>


<!-- Mirrored from htmldemo.net/presiden/presiden/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Aug 2023 03:25:51 GMT -->
</html>
