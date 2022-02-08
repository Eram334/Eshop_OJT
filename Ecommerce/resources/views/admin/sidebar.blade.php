  <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href=""><img src="assets/images/round.gif" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/globe.gif" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/pic.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admin</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="http://127.0.0.1:8000/redirect">
              <span class="menu-icon">
               <i class="fa fa-tachometer" aria-hidden="true"></i>

              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         <br> 
          <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('product')}}">
              <span class="menu-icon">
                {{-- <i class="mdi mdi-file-document-box"></i> --}}
                <i class="fab fa-product-hunt"></i>

              </span>
              <span class="menu-title">Add Products</span>
            </a>
          </li>
<br>
            <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('showproduct')}}">
              <span class="menu-icon">
              <i class="fa fa-pencil" aria-hidden="true"></i>
              </span>
              <span class="menu-title">Manage Products</span>
            </a>
          </li>
<br>

  <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('boy')}}">
              <span class="menu-icon">
             <i class="fa fa-blind" aria-hidden="true"></i>
              </span>
              <span class="menu-title">Add Delivery Boy</span>
            </a>
          </li>
<br>

  <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('showboy')}}">
              <span class="menu-icon">
            <i class="fa fa-users" aria-hidden="true"></i>
              </span>
              <span class="menu-title">Manage Delivery Boy</span>
            </a>
          </li>
    <br>

           <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('showorder')}}">
              <span class="menu-icon">
              <i class="fa fa-info-circle" aria-hidden="true"></i>
              </span>
              <span class="menu-title">Deliver Details</span>
            </a>
          </li>
          <br>
          
<li class="nav-item menu-items">
          <a class="nav-link" href="{{url('showrating')}}">
              <span class="menu-icon">
              <i class="fad fa-star-half-alt"></i>
              </span>
              <span class="menu-title">Review Rating</span>
            </a>
          </li>
<br>
        </ul>
      </nav>
      