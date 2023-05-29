<?php
require_once("../include/Header.php");
require_once("../include/Navigation.php");
require_once("../../connect.php");

if(isset($_POST['save']))
{
    $image=$_POST['image'];
    $room_category=$_POST['roomcategory'];
    $desc=$_POST['description'];
$sql="INSERT INTO `rooms_category` (`ID`, `Room_Category`, `Image`, `Description`) VALUES (NULL, '$room_category', '$image', '$desc')";
mysqli_query($connection,$sql) or mysqli_errno($connection);
}

if(isset($_POST['cancel']))
{
    
}
?>

<div class="container" style="min-height:70vh">
<div class="col-4">
    <form action="" method="post">
        <label for="RoomCategory">Room Category</label>
        <input type="text" placeholder="Room Category" name="roomcategory" required>
        <br>
        <label for="Image">Image</label>
        <input type="text" placeholder="Image" name="image" required>
        <br>
        <label for="Description">Description</label>
        <input type="text" placeholder="description" name="description" required>
        <br>
        <button name="save" class="btn btn-success">Save</button>
        <button name="cancel" class="btn btn-danger">Cancel</button>
    </form>
    </div>
</div>
<?php
require_once("../include/Footer.php");
?>