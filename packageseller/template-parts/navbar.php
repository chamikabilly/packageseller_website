<?php ?>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark  p-3 br-5 rounded-2 bs-5 shadow-sm">
  <div class="container-fluid">
    <!-- brand -->
    <a class="navbar-brand" href="index.php">
       Navbar
    </a>

    <!-- hamburger -->
    <<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- offcanvas  -->
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
        <!-- close button  -->
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      
        </div>

      <div class="offcanvas-body">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 align-items-center  justify-content-end flex-grow-1 pe-3">
    <!-- links -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Destinations
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Destinations</a></li>
            <li><a class="dropdown-item" href="#">Destinations</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sri Lanka</a></li>
          </ul>
        </li>

        <li class="nav-item me-2 ms-3 nav-login-btn">
            <button type="button" class="btn btn-dark btn-outline-light" data-bs-toggle="modal" data-bs-target="#loginform" >
                 LOGIN
            </button>
        </li>   
        
        <li class="nav-item nav-reg-btn">
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#registerform" >
                REGISTER
            </button>
        </li>

        <div class="small-nav-btns">
            <button type="button" class="btn btn-dark btn-outline-light mx-2" data-bs-toggle="modal" data-bs-target="#loginform" >
                 LOGIN
            </button>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#registerform" >
                REGISTER
            </button>
        </li>   
        </div>
    
        <!-- /links -->
       </ul>
      </div>
       <!-- Form  -->

      <!-- <form class="d-flex ms-2" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success " type="submit">Search</button>
      </form> -->
       <!-- /Form  -->

    </div>
  </div>
</nav>



    
    <!-- Login Modal -->
    <div class="modal fade" id="loginform" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
    
        <!-- modal header  -->
        <div class="modal-header">
            <h5 class="modal-title fs-5 ms-auto d-flex align-items-center" id="exampleModalLabel"><i class="bi bi-person-circle fs-3 me-2"></i> USER LOGIN</h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- modal body  -->
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control shadow-none">
            </div>

            <div class="mb-5">
                <label class="form-label">Password</label>
                <input type="password" class="form-control shadow-none">
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                <a href="javascript:void(0)">Forgot password?</a>
            </div>
        </div>
        </div>
    </div>
    </div>

     <!-- Register Modal -->
     <div class="modal fade" id="registerform" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
    
        <!-- modal header  -->
        <div class="modal-header">
            <h5 class="modal-title fs-5 ms-auto d-flex align-items-center" id="exampleModalLabel"><i class="bi bi-person-plus fs-3 me-2"></i>USER REGISTER</h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- modal body  -->
        <div class="modal-body">
            
        <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control shadow-none">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control shadow-none">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control shadow-none">
            </div>

            <div class="mb-5">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control shadow-none">
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                <a href="javascript:void(0)">Have account Already</a>
            </div>
        </div>
        </div>
    </div>
    </div>


