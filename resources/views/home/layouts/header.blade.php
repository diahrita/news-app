    <!-- preloader area start -->
    <div class="preloader" id="preloader">
      <div class="preloader-inner">
          <div class="spinner">
              <div class="dot1"></div>
              <div class="dot2"></div>
          </div>
      </div>
  </div>

  <!-- search popup start-->
  <div class="td-search-popup" id="td-search-popup">
      <form action="index.html" class="search-form">
          <div class="form-group">
              <input type="text" class="form-control" placeholder="Search.....">
          </div>
          <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
      </form>
  </div>
  <!-- search popup end-->
  <div class="body-overlay" id="body-overlay"></div>

  <!-- header start -->
  <div class="navbar-area">
      <!-- adbar end-->
      <div class="adbar-area bg-black d-none d-lg-block">
          <div class="container">
              <div class="row">
                  <div class="col-xl-6 col-lg-5 align-self-center">
                      <div class="logo text-md-left text-center">
                          <a class="main-logo" href="index.html"><img src="news-assets/img/logo.png" alt="img"></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- adbar end-->

      <!-- navbar start -->
      <nav class="navbar navbar-expand-lg">
          <div class="container nav-container">
              <div class="responsive-mobile-menu">
                  <div class="logo d-lg-none d-block">
                      <a class="main-logo" href="index.html"><img src="news-assets/img/logo.png" alt="img"></a>
                  </div>
                  <button class="menu toggle-btn d-block d-lg-none" data-target="#nextpage_main_menu" 
                  aria-expanded="false" aria-label="Toggle navigation">
                      <span class="icon-left"></span>
                      <span class="icon-right"></span>
                  </button>
              </div>
              <div class="nav-right-part nav-right-part-mobile">
                  <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
              </div>
              <div class="collapse navbar-collapse" id="nextpage_main_menu">
                  <ul class="navbar-nav menu-open">
                      <li class="current-menu-item">
                          <a href="#banner">Home</a>
                      </li>                        
                      <li class="current-menu-item">
                          <a href="#latest">Latest News</a>
                      </li>
                      <li class="current-menu-item">
                        <a href="#aboutus">About Us</a>
                    </li>                         
                      <li class="current-menu-item">
                          <a href="{{route('getLogin')}}">Login</a>
                      </li>                        
                  </ul>
              </div>
              <div class="nav-right-part nav-right-part-desktop">
                  <div class="menu-search-inner">
                      <input type="text" placeholder="Search For">
                      <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
                  </div>
              </div>
          </div>
      </nav>
  </div>
  <!-- navbar end -->