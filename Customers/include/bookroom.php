<div class="container">
      <h3 class="form-title">Book Room</h3>
      <form action="#" method="POST">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullname">Full Name</label>
            <input type="text"
                    id="fullname"
                    name="fullname"
                    placeholder="Enter Full Name"/>
          </div>
          
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter Email"/>
          </div>
          <div class="user-input-box">
            <label for="phone">Phone Number</label>
            <input type="text"
                    id="phone"
                    name="phone"
                    placeholder="Enter Phone Number"/>
          </div>
          <div class="user-input-box">
            <label for="noofindividuals">No of individuals</label>
            <input type="number"
                    id="noofindividuals"
                    name="noofindividuals"
                    placeholder="No of individuals"/>
          </div>
          <div class="user-input-box">
            <label for="roomcategory">Room Category</label>
            <input type="text"
                    id="roomcategory"
                    name="roomcategory"
                    placeholder="Room Category"/>
          </div>
        <!-- </div>
        <div class="gender-details-box">
          <span class="gender-title">Gender</span>
          <div class="gender-category">
            <input type="radio" name="gender" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="other">
            <label for="other">Other</label>
          </div> -->
          <div class="user-input-box">
            <label for="gender">Gender</label>
            <input type="text"
                    id="gender"
                    name="gender"
                    placeholder="gender"/>
          </div>

        </div>
        <div class="form-submit-btn">
        <button type="submit" name="book-btn"  class="btn mt-3 btn-success">Book Now</button>
        </div>
      </form>
    </div>

    <?php
    if(isset($_POST['book-btn']))
    {
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $phoneno=$_POST['phone'];
        $noofindividuals=$_POST['noofindividuals'];
        $roomcategory=$_POST['roomcategory'];
        $gender=$_POST['gender'];

        $sql="INSERT INTO `bookings` ( `Full_Name`, `Email`, `Phone_no`, `No_of_individuals`, `Room_Category`,Gender) 
        VALUES ( '$fullname', '$email', '$phoneno', '$noofindividuals', '$roomcategory','$gender')";
        mysqli_query($connection,$sql);
    }
    ?>
    <script> location.assign("bookroom.php?booknow=1");<script/>
  
    
    <?php
			if(isset($_GET['booknow']))
			{
				?>
<span class="bg-white text-success text-center my-3">  Successfully booked!!</span>
<?php
            }
?>