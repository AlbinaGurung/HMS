<?php
require_once("../../connect.php");


    $RoomId=$_GET['id'];
    $sql="DELETE FROM rooms WHERE RoomId = '$RoomId'";
   $result= mysqli_query($connection,$sql);
   if($result){
?>
<script>location.assign("Rooms.php?Deleted");</script>


<?php


   }
   else{
     die(mysqli_error($connection));
    
   }
    
?>