

<div class="container-fluid">
    <div class="row">
        <div class="d-flex flex-column justify-content-between col-auto bg-dark min=vh-100">
            <div class="mt-4">
                <a class="text-white d-none d-sm-inline text-decoration-none d-flex align-items-center ms-4" role="button">
                    <span class="fs-5 ">sidemenu</span>
                </a>
                <hr class="text-white d-none d-sm-block"/>
                <ul class="nav nav-pills flex-column mt-4 mt-sm-0 " id="menu">
                    <li class="nav-item my-sm-1 my-2">
                        <a href="#" class="nav-link text-white text-center text-sm-start" aria-current="page">
                            <i class="fa fa-gauge"></i>
                            <span class="ms-2 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item my-sm-1 my-2">
                        <a href="#" class="nav-link text-white text-center text-sm-start" aria-current="page">
                            <i class="fa fa-house"></i>
                            <span class="ms-2 d-none d-sm-inline">Home</span>
                        </a>
                    </li>

                    <li class="nav-item my-sm-1 my-2">
                        <a href="#sidemenu" data-bs-toogle="collapse" class="nav-link text-white text-center text-sm-start" aria-current="page">
                            <i class="fa fa-table"></i>
                            <span class="ms-2 d-none d-sm-inline">products</span>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="nav collapse ms-1 flex-column" id="sidemenu" data-bs-parent="#menu">
                            <li class="nav-item">
                                <a href="" class="nav-link text-white text-center text-sm-start" aria-curent="page">Item 1</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link text-white text-center text-sm-start" aria-curent="page">Item 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item my-sm-1 my-2">
                        <a href="#" class="nav-link text-white text-center text-sm-start" aria-current="page">
                            <i class="fa fa-users"></i>
                            <span class="ms-2 d-none d-sm-inline">Customers</span>
                        </a>
                    </li>

                </ul>

            

            </div>

        <div class="dropdown open">
            <a class="btn border-none outline-none text-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> 
           <i class="fa fa-user"></i><span class="ms-1 d-none d-sm-inline">Yousaf</span>
           </a>
            <div class="dropdown-menu" aria-labelledby="triggerId">
           <a class="dropdown-item" href="#">Profile</a>
           <a class="dropdown-item" href="#">Settings</a>
           
           </div>
        </div>
            


            
        </div>
    </div>
</div>