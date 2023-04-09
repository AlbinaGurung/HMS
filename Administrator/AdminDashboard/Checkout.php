<?php
require_once("../include/Header.php");
require_once("../include/Navigation.php");


?>

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
             <th scope="col">Name</th>
             <th scope="col">Gender</th>
             <th scope="col">Address</th>
             <th scope="col">Email</th>
             <th scope="col">Phone</th>
            <th scope="col">Check out Date</th>
            <th scope="col">Status</th>
    
            </tr>
            </thead>
            <tbody>
             
            <?php
            require_once("../../connect.php");
            $fetchdata=mysqli_query($connection,"SELECT *FROM `checked_out`;") or die(mysqli_error($connection));
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
                    
                    <td><?php echo $row['Date']?></td>
                    <td>Checked out</td>
                    
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