<?php
require_once("../include/Header.php");
?>
<?php
require_once("../include/Navigation.php")
?>
<div  style="min-height:70vh" >
      <div class="text-center margin-auto">
    <button type="button" class="btn btn-primary btn-lg">Bookings</button>
   <a href="Rooms.php" class="btn btn-success">Rooms</a>
    </div>
</div>

<?php
if (isset($_POST['room']))
{
 require_once("../../Administrator/AdminDashboard/Rooms.php"); 
}
?>
<?php
require_once("../include/Footer.php");
?>