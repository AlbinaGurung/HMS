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
if(isset($_POST['edit']))
{
  
  $name=mysqli_real_escape_string($connection,$_POST['name']);
  $gender=mysqli_real_escape_string($connection,$_POST['gender']);
    $address=mysqli_real_escape_string($connection,$_POST['address']);
    $phone=mysqli_real_escape_string($connection,$_POST['phone']);
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $noofindividuals=mysqli_real_escape_string($connection,$_POST['noofindividuals']);
    $roomtype=mysqli_real_escape_string($connection,$_POST['roomtype']);
    $roomno=mysqli_real_escape_string($connection,$_POST['roomno']);
    $check_in_date=mysqli_real_escape_string($connection,$_POST['check_in_date']);
    $status=mysqli_real_escape_string($connection,$_POST['status']);
 
    
    $sql="UPDATE `checked_in` SET `Name` = '$name', `Gender` = '$gender', `Address` = '$address', `Phone` = '$phone', `No_Of_Individuals` = '$noofindividuals', 

`RoomNo` = '$roomno', `RoomType` = '$roomtype', `Check_In_Date` = '$check_in_date', `Status` = '$status' WHERE `checked_in`.`ID` = $customerId";


 mysqli_query($connection,$sql) or mysqli_errno($connection);
}

?>

<form action="" method="post">
<div class="container-fluid my-4">
        <div class="container">
          <div class="card w-100">
               <div class="card-header">
                  <h1 class="card-title">Edit</h1>
               </div>
                 <div class="card-body">
                   <div class="row">
                     
                      <div class="col-md-6">
                        <label for="name">Name</label>
                        <input type="text" placeholder="Name" name="name"  class="form-control" value="<?=$customer['Name']?>">
                      </div>
                      <div class="col-md-6">
                        <label for="gender">Gender</label><br>
                        <input type="radio" name="gender" id="gender" value="Male"> Male
                        <input type="radio" name="gender" id="gender" value="Female"> Female
                        <input type="radio" name="gender" id="gender" value="Other"> Other

                       </div>
                      <div class="col-md-6">
                        <label for="address">Address</label>
                        <input type="text" placeholder="Address" name="address" class="form-control" value="<?=$customer['Address']?>">
                      </div>

                      <div class="col-md-6">
                        <label for="Phone">Phone</label>
                        <input  class="form-control" type="phone" placeholder="Phone" name="phone" value="<?=$customer['Phone']?>">
                      </div>

                   
                      <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email"  class="form-control" placeholder="Email" name="email" value="<?=$customer['Email']?>">
                       </div>
                  
                      
                
                       <div class="col-md-6">
                        <label for="noofindividuals">No of Individuals</label>
                        <input type="number" placeholder="No of Individuals"  class="form-control" name="noofindividuals" value="<?=$customer['No_Of_Individuals']?>">
                       </div>
                
                       <div class="col-md-6">
                        <label for="roomno">Room No</label>
                        <input type="text" placeholder="Room no" name="roomno"  class="form-control" value="<?=$customer['RoomNo']?>">
                        </div>
                        <div class="col-md-6">
                        <label for="roomtype">RoomType</label>
                        <input type="text" placeholder="RoomType" name="roomtype"  class="form-control" value="<?=$customer['RoomType']?>">
                        </div>
                        <div class="col-md-6">
                        <label for="date">Check in Date</label>
                        <input type="date" placeholder="Date" name="check_in_date"  class="form-control" value="<?=$customer['Check_In_Date']?>">

                        </div>
                        <div class="col-md-6">
                        <label for="status">Status</label>
                        <input type="status" placeholder="status" name="status"  class="form-control" value="<?=$customer['Status']?>">

                        </div>


                   </div>
                </div>
            
            <div class="card-footer">
             <button name="edit" class="btn btn-primary" >Edit</button>
            </div>
          </div>
        </div>
</div>
</form>

<?php
require_once("../include/Footer.php");
 ?>  