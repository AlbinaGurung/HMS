<?php
require_once("../include/Header.php");
require_once("../include/Navigation.php");
require_once("../../connect.php");

function getCustomerById($id)
{
    global $connection;
$fetchcustomer = mysqli_query($connection,"SELECT *FROM `checked_in` where ID=$id;");
$customer = mysqli_fetch_assoc($fetchcustomer);
return $customer;

}
$customerId=$_GET['id'];
$customer=getCustomerById($customerId);

?>
<?php
if(isset($_POST['checkout_btn']))
{
 
  $date=mysqli_real_escape_string($connection,$_POST['check_out_date']);


  

mysqli_query($connection,"UPDATE `checked_in` SET `Status` = 'checked out' ,`Check_Out_Date`='$date' WHERE `checked_in`.`ID` = $customer[ID];");
  
}
?>

<form action="" method="post">
<div class="container-fluid my-4">
        <div class="container">
          <div class="card w-100">
               <div class="card-header">
                  <h1 class="card-title">Check Out</h1>
               </div>
                 <div class="card-body">
                   <div class="row">
                     
                      <div class="col-md-6">
                        <label for="name">Name</label>
                        <input type="text" placeholder="Name" name="name"  class="form-control" value="<?=$customer['Name']?>">
                      </div>
                     <div class="col-md-6">
                        <label for="roomno">Room No</label>
                        <?php
                        $RoomId=$customer['RoomId'];
                      
                        $sql="select *from `rooms`  where `rooms`.`RoomId`=$RoomId ";
                        $Result=mysqli_query($connection,$sql) or die(mysqli_error($connection));
                        $RoomName=mysqli_fetch_assoc($Result);
                        ?>
                        <input type="text" placeholder="Room no" name="roomno"  class="form-control" value="<?=$RoomName['RoomName']?>">
                        </div>
                        <div class="col-md-6">
                        <label for="roomtype">RoomType</label>
                        <input type="text" placeholder="RoomType" name="roomtype"  class="form-control" value="<?=$customer['RoomType']?>">
                        </div>
                        <div class="col-md-6">
                        <label for="date">Check in Date</label>
                        <input type="date" placeholder="Date" name="date"  class="form-control" value="<?=$customer['Check_In_Date']?>">

                        </div>
                        <label for="date">Check out Date</label>
                        <input type="date" placeholder="Date" name="check_out_date"  class="form-control">

                        </div>

                   </div>
                </div>
            
            <div class="card-footer">
             <button name="checkout_btn" class="btn btn-primary" >Check out</button>
            </div>
          </div>
        </div>
</div>
</form>

<?php
require_once("../include/Footer.php");
 ?>  