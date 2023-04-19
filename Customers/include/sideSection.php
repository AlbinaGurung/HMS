<div class="d-flex flex-column justify-content-between col-2 bg-info min-vh-100">
    <div class="mt-4">
        <a class="text-white d-none d-sm-inline text-decoration-none d-flex align-items-center ms-4" role="button">
            <span class="fs-5 ">sidemenu</span>
        </a>
        <hr class="text-white d-none d-sm-block" />
        <ul class="nav nav-pills flex-column mt-4 mt-sm-0 " id="menu">
            <li class="nav-item my-sm-1 my-2">
                <a href="/Customers/home.php" class="nav-link text-white text-center text-sm-start" aria-current="page">
                    <i class="bi bi-house"></i>
                    <span class="ms-2 d-none d-sm-inline">Home</span>
                </a>
            </li>

            <li class="nav-item my-sm-1 my-2">
                <a href="/Customers/SeeRooms.php" class="nav-link text-white text-center text-sm-start" aria-current="page">
                    <i class="bi bi-houses-fill"></i>
                    <span class="ms-2 d-none d-sm-inline">See Rooms</span>
                </a>
            </li>

            <li class="nav-item my-sm-1 my-2">
                <a href="/Customers/booknow.php" data-bs-toogle="collapse" class="nav-link text-white text-center text-sm-start" aria-current="page">
                    <i class="bi bi-pen-fill"></i>
                    <span class="ms-2 d-none d-sm-inline">Book now</span>
                    <i class="fa fa-caret-down"></i>
                </a>
            </li>
            <li class="nav-item my-sm-1 my-2">
                <a href="/Customers/Payment.php" data-bs-toogle="collapse" class="nav-link text-white text-center text-sm-start" aria-current="page">
                    <i class="bi bi-wallet2"></i>
                    <span class="ms-2 d-none d-sm-inline">Payment</span>
                    <i class="fa fa-caret-down"></i>
                </a>
            </li>


    </div>

    <div class="dropdown open">
        <a class="btn border-none outline-none text-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i><span class="ms-1 d-none d-sm-inline">You</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="triggerId">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Settings</a>

        </div>
    </div>



</div>