<?php
require_once("../include/Header.php");
require_once("../include/Navigation.php");

?>
<form action="" method="post">
<div class="container-fluid my-4">
        <div class="container">
          <div class="card w-100">
               <div class="card-header">
                  <h1 class="card-title">Check in</h1>
               </div>
                 <div class="card-body">
                   <div class="row">
                      <div class="col-md-6">
                        <label for="id">ID</label>
                        <input type="number" placeholder="ID" name="id" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label for="name">Name</label>
                        <input type="text" placeholder="Name" name="name"  class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label for="gender">Gender</label><br>
                        <input type="radio" name="gender" id="gender" value="Male"> Male
                        <input type="radio" name="gender" id="gender" value="Female"> Female
                        <input type="radio" name="gender" id="gender" value="Other"> Other

                      </div>
                      <div class="col-md-6">
                        <label for="address">Address</label>
                        <input type="text" placeholder="Address" name="address" class="form-control">
                      </div>

                      <div class="col-md-6">
                        <label for="Phone">Phone</label>
                        <input  class="form-control" type="phone" placeholder="Phone" name="phone">
                      </div>

                   
                      <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email"  class="form-control" placeholder="Email" name="email">
                       </div>
                  
                      
                
                       <div class="col-md-6">
                        <label for="noofindividuals">No of Individuals</label>
                        <input type="number" placeholder="No of Individuals"  class="form-control" name="noofindividuals">
                       </div>
                
                       <div class="col-md-6">
                        <label for="roomno">Room No</label>
                        <input type="text" placeholder="Room no" name="roomno"  class="form-control">
                        </div>
                        <div class="col-md-6">
                        <label for="roomtype">RoomType</label>
                        <input type="text" placeholder="RoomType" name="roomtype"  class="form-control">
                        </div>
                        <div class="col-md-6">
                        <label for="date">Date</label>
                        <input type="check_in_date" placeholder="Date" name="check_in_date"  class="form-control">
                        </div>
                   </div>
                </div>
            
            <div class="card-footer">
             <button  class="btn btn-primary" name="check_in" value="True">Check in</button>
            </div>
          </div>
        </div>
</div>
</form>

<!-- hi -->
<?php
require_once("../../connect.php");
if(isset($_POST['check_in']))
{
  
  $name=mysqli_real_escape_string($connection,$_POST['name']);
  $gender=mysqli_real_escape_string($connection,$_POST['gender']??null);
  $address=mysqli_real_escape_string($connection,$_POST['address']);
  $phone=mysqli_real_escape_string($connection,$_POST['phone']);
  $email=mysqli_real_escape_string($connection,$_POST['email']);
  $noofindividuals=mysqli_real_escape_string($connection,$_POST['noofindividuals']);
  $roomtype=mysqli_real_escape_string($connection,$_POST['roomtype']);
  $roomno=mysqli_real_escape_string($connection,$_POST['roomno']);
  $check_in_date=mysqli_real_escape_string($connection,$_POST['check_in_date']);
 $status="checked in";


 

  mysqli_query($connection,"INSERT INTO `checked_in` ( `Name`, `Gender`, `Address`, `Email`, `Phone`, `No_Of_Individuals`, `RoomNo`, `RoomType`, `Check_In_Date`,`Status`,`Check_Out_Date`) 
  VALUES ('$name', '$gender', '$address', '$email', '$phone', '$noofindividuals', '$roomno', '$roomtype', '$check_in_date','$status',NULL)") or die(mysqli_error($connection));
  // mysqli_Query($connection,$sql) or die(mysqli_error($connection));
 
}
?>


<?php
require_once("../include/Footer.php");
 ?>  