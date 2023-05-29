<?php
require_once("../include/Header.php");
require_once("../include/Navigation.php");
require_once("../../connect.php");
function getRoomById($id)
{
    global $connection;
$fetchRoom = mysqli_query($connection,"SELECT *FROM `rooms` where RoomId='$id';");
$room = mysqli_fetch_assoc($fetchRoom);
return $room;

}
$roomId=$_GET['id'];
$room=getRoomById($roomId);

?>

<form action="" method="post">
    <div class="container mt-4" style="width: 100vw; display: flex; align-items: center;">
        <div class="card shadow-lg" style="display: flex; align-items: center;">
            <div class="card-header">
                <h1 class="card-title">Edit Room 
                </h1>
            </div>

            <div class="card-body">
                <div class="row">
                <div class="col-md-6 mb-3>
                
                <label for="room">Room Name</label>
                <input type="text" name="roomname" value="<?=$room['RoomName']?>">
                </div>

                <div class="col-md-6 mb-3>
                <label for="category">Room Category</label>
                <input type="text" name="category" value="<?=$room['RoomType']?>">
                </div>
                
                

            </div>
            </div>

            <div class="card-footer">
                <button  name="edit" type="submit">Edit</button>
            </div>
        </div>
    </div>
</form>

<?php
if(isset($_POST['edit']))
{
   

    $Category=$_POST['category'];
    $RoomName=$_POST['roomname'];
    $result=mysqli_query($connection,"select * from rooms where `RoomName`='$RoomName'");
    $Room=mysqli_num_rows($result);
     $sql="UPDATE `rooms` SET `RoomName` = '$RoomName', `RoomType` = '$Category' WHERE `rooms`.`RoomId` = '$roomId'";
    if($Room>0)
    {
      ?>
      <div class="alert alert-danger" role="alert">
      Cannot edit!!!  The room Name is already taken!!!!
      </div>
      <?php 
    }
    else
    {
       mysqli_query($connection,$sql) or die (mysqli_errno($connection));
      ?>
      
      <script>location.assign("Rooms.php?Edited");</script>
       
       <?php
   }
}
?>
<?php
require_once("../include/Footer.php");
?>