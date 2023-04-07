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
if(isset($_POST['submit']))
{
    $id=mysqli_real_escape_string($connection,$_POST['id']);
    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $gender=mysqli_real_escape_string($connection,$_POST['gender']);
    $address=mysqli_real_escape_string($connection,$_POST['address']);
    $phone=mysqli_real_escape_string($connection,$_POST['phone']);
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $noofindividuals=mysqli_real_escape_string($connection,$_POST['noofindividuals']);
    $roomtype=mysqli_real_escape_string($connection,$_POST['roomtype']);
    $roomno=mysqli_real_escape_string($connection,$_POST['roomno']);
    $date=mysqli_real_escape_string($connection,$_POST['date']);
    
    $sql="UPDATE `checked_in` SET `Name` = $name, `Gender` = $gender, `Address` = $address, `Email` = $email, 
`Phone` = $phone, `No_Of_Individuals` = $noofindividuals, `RoomNo` = $roomno, `RoomType` = $roomtype, `Date` = $date
 WHERE `checked_in`.`ID` = $id;";
 mysqli_query($connection,$sql);
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
                        <label for="id">ID</label>
                        <input type="number" placeholder="ID" name="id" class="form-control" value="<?=$customer['ID']?>">
                      </div>
                      <div class="col-md-6">
                        <label for="name">Name</label>
                        <input type="text" placeholder="Name" name="name"  class="form-control" value="<?=$customer['Name']?>">
                      </div>
                      <div class="col-md-6">
                        <label for="gender">Gender</label><br>
                        <input type="text" name="gender" class="form-control" value="<?=$customer['Gender']?>">

                      </div>
                      <div class="col-md-6">
                        <label for="address">Address</label>
                        <input type="text" placeholder="Address" name="address" class="form-control" value="<?=$customer['Address']?>">
                      </div>

                      <div class="col-md-6">
                        <label for="Phone">Phone</label>
                        <input  class="form-control" type="phone" placeholder="Phone" name="Phone" value="<?=$customer['Phone']?>">
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
                        <input type="date" placeholder="Date" name="date"  class="form-control" value="<?=$customer['Date']?>">

                        

                   </div>
                </div>
            
            <div class="card-footer">
             <button type="submit" class="btn btn-primary" >Edit</button>
            </div>
          </div>
        </div>
</div>
</form>

<?php
require_once("../include/Footer.php");
 ?>  