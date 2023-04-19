<?php
require_once("../../connect.php");


    $RoomId=$_GET['id'];
    $query="select * from `rooms` inner join `checked_in` where `checked_in`.`RoomId`=$RoomId";
    $result=mysqli_query($connection,$query);
    if(mysqli_num_rows($result)>0)
    {
      ?>
   
   <div class="alert alert-danger" role="alert">
    The room no cannot be deleted!!!
    </div>
   <?php  
  
    }
    else
    {
    $sql="DELETE FROM rooms WHERE RoomId = '$RoomId'";
    $result= mysqli_query($connection,$sql);
    if($result)
    {
?>
<script>location.assign("Rooms.php?Deleted");</script>
   

<?php


   }
   else
   {
     die(mysqli_error($connection));
    
   }
}
?>