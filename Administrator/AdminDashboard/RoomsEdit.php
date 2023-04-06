<?php
require_once("../include/Header.php");
require_once("../include/Navigation.php");
require_once("../../connect.php");
function getRoomById($id)
{
    global $connection;
$fetchRoom = mysqli_query($connection,"SELECT *FROM `rooms` where ID=$id;");
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
                <div class="col-md-6 mb-3>
                <label for="id">ID</label>
                <input type="text" name="id" value="<?=$room['ID']?>">
                </div>
                <label for="room">Room</label>
                <input type="text" name="room" value="<?=$room['Room']?>">
                </div>

                <div class="col-md-6 mb-3>
                <label for="category">Room Category</label>
                <input type="text" name="category" value="<?=$room['Category']?>">
                </div>
                
                <div class="col-md-6 mb-3>
                <label for="availability">Availability</label>
                <input type="text" name="availability" value="<?=$room['Availability']?>">
                </div>

            </div>
            </div>

            <div class="card-footer">
                <button type="submit" name="edit">Edit</button>
            </div>
        </div>
    </div>
</form>

<?php
if(isset($_POST['edit']))
{
    $Id=$_POST['id'];
    $Room=$_POST['room'];
    $Category=$_POST['category'];
   $Availability=$_POST['availability'];

   $sql="UPDATE `rooms` SET `Room` = '$Room', `Category` = '$Category', `Availability` = '$Availability' WHERE `rooms`.`ID` = $Id";
   mysqli_query($connection,$sql);
}
?>
<?php
require_once("../include/Footer.php");
?>