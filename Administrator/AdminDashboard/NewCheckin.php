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
                        <input type="radio" name="Gender" id="gender" value="Male"> Male
                        <input type="radio" name="Gender" id="gender" value="Female"> Female
                        <input type="radio" name="Gender" id="gender" value="Other"> Other

                      </div>
                      <div class="col-md-6">
                        <label for="address">Address</label>
                        <input type="text" placeholder="Address" name="address" class="form-control">
                      </div>

                      <div class="col-md-6">
                        <label for="Phone">Phone</label>
                        <input  class="form-control" type="phone" placeholder="Phone" name="Phone">
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
                        <input type="date" placeholder="Date" name="date"  class="form-control">
                        </div>
                   </div>
                </div>
            
            <div class="card-footer">
             <button type="submit" class="btn btn-primary" >Check in</button>
            </div>
          </div>
        </div>
</div>
</form>

<!-- hi -->
<?php
require_once("../../connect.php");
if(isset($_POST['submit']))
{
  $name=mysqli_real_escape_string($connection,$_POST['name']);
  $gender=mysqli_real_escape_string($connection,$_POST['gender']);
  $address=mysqli_real_escape_string($connection,$_POST['address']);
  $phone=mysqli_real_escape_string($connection,$_POST['phone']);
  $email=mysqli_real_escape_string($connection,$_POST['email']);
  $noofindividuals=mysqli_real_escape_string($connection,$_POST['noofindividuals']);
  $roomtype=mysqli_real_escape_string($connection,$_POST['roomtype']);
  $roomno=mysqli_real_escape_string($connection,$_POST['roomno']);
  $date=mysqli_real_escape_string($connection,$_POST['date']);
  var_dump($name);

  mysqli_query($connection,"INSERT INTO `checked_in` ( `Name`, `Gender`, `Address`, `Email`, `Phone`, `No_Of_Individuals`, `RoomNo`, `RoomType`, `Date`) 
  VALUES ('$name', '$gender', '$address', '$email', '$phone', '$noofindividuals', '$roomno', '$roomtype', '$date')");
  // mysqli_Query($connection,$sql) or die(mysqli_error($connection));
 
  
}
?>


<?php
require_once("../include/Footer.php");
 ?>  