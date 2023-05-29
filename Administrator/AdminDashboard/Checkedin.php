<?php
require_once("../include/Header.php");
require_once("../include/Navigation.php");

require_once("../../connect.php");
$searchQuery = $_GET['search'] ?? "";
// $filter=$_GET['filter']??"";
// var_dump($filter);
// var_dump($searchQuery);

$query="select * from `rooms` inner join `checked_in` where `checked_in`.`RoomId`=`rooms`.`RoomId`";
               

if($searchQuery != "") 
{
    $query = "select *From `rooms` inner join `checked_in` where (`checked_in`.`Name` like '$searchQuery%' or `checked_in`.`Phone` like '$searchQuery%') AND `checked_in`.`RoomId`=`rooms`.`RoomId`";
 }
// else if($filter!="")
// {
//  if($filter='checked in')
//  {
//     $query="select *From `rooms` inner join `checked_in` where(`checked_in`.`Status`='checked in') AND `checked_in`.`RoomId`=`rooms`.`RoomId`";
//  }
//  if($filter='checked out')
//  {
//     $query="select *From `rooms` inner join `checked_in` where(`checked_in`.`Status`='checked out') AND `checked_in`.`RoomId`=`rooms`.`RoomId`";
//  }
//}
 
$fetchdata = mysqli_query($connection, $query) or die(mysqli_error($connection));
$IsAnyCustomerAdded = mysqli_num_rows($fetchdata);


?>

<br>
<br>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center">
        <h3> Check Ins </h3>
        <form action="">
            <a class="btn btn-primary" href="NewCheckin.php">New Checkin</a>
            <!-- <br> -->
            <!-- <label for="filter">Filter</label>
            <select name="filter" id="filter">
                <option value="checked in">Checked in</option>
                <option value="checked out">Checked out</option>
            </select> -->
            <!-- <br> -->
            <input type="text" name="search" value="<?=$searchQuery?>" placeholder="search"> 
        </form>
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
                    <th scope="col">RoomName</th>
                    <th scope="col">RoomType</th>
                    <th scope="col">Check_In_Date</th>
                    <th scope="col">Action</th>
                    <th scope="col">Status</th>
                    <th scope="col">Check_Out_Date</th>


                </tr>
            </thead>
            <tbody>

                <?php
                   if ($IsAnyCustomerAdded > 0) 
                    {
                      while ($row = mysqli_fetch_assoc($fetchdata)) 
                       {
                         ?>
                          <tr>
                            <td><?php echo $row['ID'] ?></td>
                            <td><?php echo $row['Name'] ?></td>
                            <td><?php echo $row['Gender'] ?></td>
                            <td><?php echo $row['Address'] ?></td>
                            <td><?php echo $row['Email'] ?></td>
                            <td><?php echo $row['Phone'] ?></td>
                            <td><?php echo $row['No_Of_Individuals'] ?></td>
                            
                           <!-- // $sql = "select `RoomName` from `rooms` inner join `checked_in` where `checked_in`.`RoomId`=`rooms`.`RoomId`";
                            //$result = mysqli_query($connection, $sql);
                            //$RoomName = mysqli_num_rows($result); 
                              if($RoomName>0)
                              {
                                
                              }
                            -->
                              
                            <td><?php echo $row['RoomName'] ?></td>
                             

                            <td><?php echo $row['RoomType'] ?></td>
                            <td><?php echo $row['Check_In_Date'] ?></td>

                            <td> <a href="CheckinEdit.php?id=<?= $row['ID'] ?>" class="btn btn-primary" name="Edit_btn">Edit</a></td>

                            <?php

                            if ($row['Status'] == "checked in") 
                            {
                            ?>
                             <td><a href="NewCheckout.php?id=<?= $row['ID'] ?>" class="btn btn-success" name="checkout_btn">Check Out</a></td>
                            <?php
                            } 
                            elseif ($row['Status'] == "checked out") 
                            {
                            ?>
                             <td>checked out</td>
                            <?php
                            } 
                            else 
                            {

                            }
                            ?>
                            <td><?php echo $row['Check_Out_Date'] ?></td>
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