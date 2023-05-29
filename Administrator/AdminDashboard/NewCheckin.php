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
                        <label for="name">Name</label>
                        <input type="text" placeholder="Name" name="name"  class="form-control" required>
                      </div>
                      <div class="col-md-6">
                        <label for="gender">Gender</label><br>
                        <input type="radio" name="gender" id="gender" value="Male"> Male
                        <input type="radio" name="gender" id="gender" value="Female"> Female
                        <input type="radio" name="gender" id="gender" value="Other"> Other

                      </div>
                      <div class="col-md-6">
                        <label for="address">Address</label>
                        <input type="text" placeholder="Address" name="address" class="form-control" required>
                      </div>

                      <div class="col-md-6">
                        <label for="Phone">Phone</label>
                        <input  class="form-control" type="phone" placeholder="Phone" name="phone" required>
                      </div>

                   
                      <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email"  class="form-control" placeholder="Email" name="email" required>
                       </div>
 1                 
                      
                
                       <div class="col-md-6">
                        <label for="noofindividuals">No of Individuals</label>
                        <input type="number" placeholder="No of Individuals"  class="form-control" name="noofindividuals" required>
                       </div>
                
                       <div class="col-md-6">
                        <label for="roomname">Room Name</label>
                        <select name="roomid" id="roomnname">
                        <?php
                        require_once("../../connect.php");
                        
                          $sql="SELECT * FROM `rooms`";
                          $rooms=mysqli_query($connection,$sql) or die(mysqli_error($connection));
                        
                          if(mysqli_num_rows($rooms)>0)
                          {
                          foreach($rooms as $room)
                          {
                               
                            
                              ?>
                             
                              <option value="<?=$room['RoomId']?>"> <?=$room['RoomName']?></option>
 
                              
                              <?php
                            
                          }
                        }
              
                        ?>
                        </select>
                        
                        </div>
                        <div class="col-md-6">
                        <label for="roomtype">RoomType</label>
                        <input type="text" placeholder="RoomType" name="roomtype"  class="form-control" required>
                        </div>
                        <div class="col-md-6">
                        <label for="date">Date</label>
                        <input type="date" placeholder="Date" name="check_in_date"  class="form-control" required>
                        </div>
                   </div>
                </div>
            
            <div class="card-footer">
             <button class="btn btn-primary" name="check_in" value="True">Check in</button>
            </div>
          </div>
        </div>
</div>
</form>

<!-- hi -->
<?php
require_once("../../connect.php");

// if(isset($_POST['check_in']))
if($_SERVER['REQUEST_METHOD'] === 'POST')

{
  // var_dump($_POST);
  
  $name=mysqli_real_escape_string($connection,$_POST['name']);
  $gender=mysqli_real_escape_string($connection,$_POST['gender']??null);
  $address=mysqli_real_escape_string($connection,$_POST['address']);
  $phone=mysqli_real_escape_string($connection,$_POST['phone']);
  $email=mysqli_real_escape_string($connection,$_POST['email']);
  $noofindividuals=mysqli_real_escape_string($connection,$_POST['noofindividuals']);
  $roomtype=mysqli_real_escape_string($connection,$_POST['roomtype']);
  $roomid=mysqli_real_escape_string($connection,$_POST['roomid']);

  $check_in_date=mysqli_real_escape_string($connection,$_POST['check_in_date']);
 $status="checked in";

  $sql="SELECT * FROM `checked_in` WHERE RoomId=$roomid AND `Status`='checked in';";
  $result=mysqli_query($connection,$sql) or die(mysqli_error($connection));
  $RoomName=mysqli_num_rows($result);
  
 if($RoomName>0)
 {
  
  ?>
   
   <div class="alert alert-danger" role="alert">
    The room no is already selected!!!
    </div>
   <?php  
  
 }
 else
 {
  mysqli_query($connection,"INSERT INTO `checked_in` ( `Name`, `Gender`, `Address`, `Email`, `Phone`, `No_Of_Individuals`, `RoomId`, `RoomType`, `Check_In_Date`,`Status`,`Check_Out_Date`) 
  VALUES ('$name', '$gender', '$address', '$email', '$phone', '$noofindividuals', '$roomid', '$roomtype', '$check_in_date','$status',NULL)") or die(mysqli_error($connection));
  
  $sql1="UPDATE `rooms` SET `Status` = 'Not Available' WHERE `rooms`.`RoomId` = '$roomid';";
  mysqli_Query($connection,$sql1) or die(mysqli_error($connection));
 }
  
  
}
?>


<?php
require_once("../include/Footer.php");
 ?>  