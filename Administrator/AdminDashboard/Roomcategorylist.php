<?php
require_once("../include/Header.php");

require_once("../include/Navigation.php");
require_once("../../connect.php");
?>
<div style="min-height:70vh">
    <form action="">
        <a class="btn btn-primary" href="NewRoomCategory.php">Add Room_Category</a>
        <input type="text" name="search" value="" placeholder="search">
    </form>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Image</th>
            <th>Room Category</th>
            <th>Description</th>
        </thead>
        <tbody>
            <?php
           $sql="select* from rooms_category";$result=mysqli_query($connection,$sql);
           if(mysqli_num_rows($result)>0)
           {
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['Image']?></td>
            <td><?php echo $row['Room_Category']?></td>
            <td><?php echo $row['Description']?></td>
           </tr>
            <?php
           }
        }
            ?>
            
        </tbody>
    </table>
</div>


<?php
require_once("../include/Footer.php");
?>