<?php
?>


<div class="col-12 bg-green">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="/assets/imgs/logo.jpg" class="rounded-circle" width="60" height="60" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto">
      
      <li class="nav-item">
        <a class="nav-link active" href="../AdminDashboard/Home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../AdminDashboard/Booked.php">Booked</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="/Administrator/AdminDashboard/Checkedin.php">Guests_Info</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../AdminDashboard/Checkout.php">Checked_Guests_Info</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../AdminDashboard/Roomcategorylist.php">Rooms_Category</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="../AdminDashboard/Rooms.php">Rooms</a>
      </li>
    </ul>
   <ul class="navbar-nav ms-auto">
    <li class="nav-link">
      <a href="/" class="nav-link">Hi!, <?=$_SESSION['username'];?></a>
    </li>
   </ul>
  </div>
</nav>
</div>