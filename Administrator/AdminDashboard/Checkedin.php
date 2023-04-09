<?php
require_once("../include/Header.php");
require_once("../include/Navigation.php");


?>
<br>
<br>
<div class="container-fluid">
<div class="d-flex justify-content-between align-items-center">
<h3> Check Ins </h3>
<div><a class="btn btn-primary" href="NewCheckin.php">New Checkin</a> 

 <input type="text" name="search"> <button class="btn btn-info">Filter</button></div>
</div>
</div>
    <div class="row">
        <div class="col-12">
            
            <table class="table">
             <thead>
            <tr>
             <th scope="col">ID</th>
             <th scope="col">Full Name</th>
             <th scope="col">Gender</th>
             <th scope="col">Address</th>
             <th scope="col">Email</th>
             <th scope="col">Phone</th>
             <th scope="col">No_Of_Individuals</th>
             <th scope="col">RoomNo</th>
             <th scope="col">RoomType</th>
            <th scope="col">Check_In_Date</th>
            <th scope="col">Action</th>
            <th scope="col">Status</th>
            <th scope="col">Check_Out_Date</th>
           
            
            </tr>
            </thead>
            <tbody>
             
            <?php
            require_once("../../connect.php");
            $fetchdata=mysqli_query($connection,"SELECT *FROM `checked_in`;") or die(mysqli_error($connection));
            $IsAnyCustomerAdded=mysqli_num_rows($fetchdata);
            if($IsAnyCustomerAdded>0)
            {
                while($row=mysqli_fetch_assoc($fetchdata))
                {
                  
                 
                    ?>
                    <tr>
                    <td><?php echo $row['ID']?></td>
                    <td><?php echo $row['Name']?></td>
                    <td><?php echo $row['Gender']?></td>
                    <td><?php echo $row['Address']?></td>
                    <td><?php echo $row['Email']?></td>
                    <td><?php echo $row['Phone']?></td>
                    <td><?php echo $row['No_Of_Individuals']?></td>
                    <td><?php echo $row['RoomNo']?></td>
                    <td><?php echo $row['RoomType']?></td>
                    <td><?php echo $row['Check_In_Date']?></td>
                    <td><button type="button" class="btn btn-danger" name="delete_btn" >Delete</button>
                    <a href="CheckinEdit.php?id=<?= $row['ID'] ?>" class="btn btn-primary" name="Edit_btn">Edit</a></td>
                    <td><?php echo $row['Status']?></td>
                   <?php
                        
                    if($row['Status']=="checked in")
                    {
                        ?>
                        <td><a href="NewCheckout.php?id=<?= $row['ID'] ?>" class="btn btn-success" name="checkout_btn" >Check Out</a></td>
                        <?php
                    }
                    elseif($row['Status']=="checked out")
                    {
                        ?>
                        <td>checked out</td>
                        <?php
                    }
                    else
                    {

                    }
                    ?>
                
                    <?php
               
                }
            } 
            ?>


            </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
<?php
require_once("../include/Footer.php");
?>