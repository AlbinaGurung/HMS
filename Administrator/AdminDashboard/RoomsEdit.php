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
                
                <label for="room">Room</label>
                <input type="text" name="roomid" value="<?=$room['RoomId']?>">
                </div>

                <div class="col-md-6 mb-3>
                <label for="category">Room Category</label>
                <input type="text" name="category" value="<?=$room['RoomType']?>">
                </div>
                
                

            </div>
            </div>

            <div class="card-footer">
                <button  name="edit">Edit</button>
            </div>
        </div>
    </div>
</form>

<?php
if(isset($_POST['edit']))
{
   

    $Category=$_POST['category'];
    $RoomId=$_POST['roomid'];

   $sql="UPDATE `rooms` SET `RoomId` = '$RoomId', `RoomType` = '$Category' WHERE `rooms`.`RoomId` = '$roomId'";
   mysqli_query($connection,$sql);
}
?>
<?php
require_once("../include/Footer.php");
?>