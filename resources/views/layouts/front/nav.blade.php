   <!-- header-area-start -->
   <header>
    <div class="header-top space-bg">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-xl-8 col-lg-12 col-md-12">
                <div class="header-welcome-text ">
                   <span>Welcome to our international shop! Enjoy free shipping on orders $100 & up.</span>
                   <a href="shop.html">Shop Now<i class="fal fa-long-arrow-right"></i></a>
                </div>
             </div>
             <div class="col-xl-4 d-none d-xl-block">
                <div class="headertoplag d-flex align-items-center justify-content-end">
                   <div class="menu-top-social">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-behance"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                      <a href="#"><i class="fab fa-linkedin"></i></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="mainmenuarea d-none d-xl-block">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-lg-9">
                <div class="mainmenu d-flex align-items-center">
                   <div class="mainmenu__search">
                      <form action="#">
                         <div class="mainmenu__search-bar p-relative">
                            <button class="mainmenu__search-icon"><i class="fal fa-search"></i></button>
                            <input type="text" placeholder="Search products...">
                         </div>
                      </form>
                   </div>
                   <div class="mainmenu__main d-flex align-items-center p-relative">
                      <div class="main-menu">
                         <nav id="mobile-menu">
                            <ul>
                               <li class="has-dropdown">
                                  <a href="{{url('index')}}">Home</a>
                               </li>
                               <li class="has-dropdown">
                                  <a href="{{url('shop')}}">Shop</a>
                               </li>
                            </ul>
                         </nav>
                      </div>
                      <div class="mainmenu__logo">
                         <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3">
                <div class="header-meta d-flex align-items-center justify-content-end">
                   </div>
                   <div class="header-meta__social d-flex align-items-center ml-25">
                    @guest
                    <a class="nav-item nav-link" href="{{url('login')}}" style="color: black;">Login</a>
                    <a class="nav-item nav-link" href="{{url('register')}}"style="color: black;">Register</a>
                @else
                <a class="nav-item nav-link" href="{{route('logout')}}" style="color: black;"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"style="color: black;">
                    @csrf
                </form>
                @endguest
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </header>
 <!-- header-area-end -->

 <!-- header-xl-sticky-area -->
 <div id="header-sticky" class="logo-area tp-sticky-one mainmenu-5">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-xl-2 col-lg-3">
             <div class="logo">
                <a href="index.html"><img src="{{asset('front/assets/img/logo3.png')}}" alt="logo"></a>
             </div>
          </div>
          <div class="col-xl-6 col-lg-6">
             <div class="main-menu">
                <ul>
                   <li class="has-dropdown">
                      <a href="index.html">Home</a>
                   </li>
                   <li class="has-dropdown">
                      <a href="shop.html">Shop</a>
                   </li>
                   <li class="has-dropdown has-megamenu">
                      <a href="about.html">Pages</a>
                      <ul class="submenu mega-menu">
                   <li class="has-dropdown">
                      <a href="blog.html">Blog</a>
                      <ul class="submenu">
                         <li><a href="blog.html">Blog</a></li>
                         <li><a href="blog-details.html">Blog Details</a></li>
                      </ul>
                   </li>
                   <li><a href="contact.html">Contact</a></li>
                </ul>
             </div>
          </div>
          <div class="col-xl-4 col-lg-9">
             <div class="header-meta-info d-flex align-items-center justify-content-end">
                <div class="header-meta__social  d-flex align-items-center">
                   <button class="header-cart p-relative tp-cart-toggle">
                      <i class="fal fa-shopping-cart"></i>
                      <span class="tp-product-count">2</span>
                   </button>
                   <a href="sign-in.html"><i class="fal fa-user"></i></a>
                   <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                </div>
                <div class="header-meta__search-5 ml-25">
                   <div class="header-search-bar-5">
                      <form action="#">
                         <div class="search-info-5 p-relative">
                            <button class="header-search-icon-5"><i class="fal fa-search"></i></button>
                            <input type="text" placeholder="Search products...">
                         </div>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- header-xl-sticky-end -->

 <!-- header-md-lg-area -->
 <div id="header-tab-sticky" class="tp-md-lg-header d-none d-md-block d-xl-none pt-30 pb-30">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-lg-3 col-md-4 d-flex align-items-center">
             <div class="header-canvas flex-auto">
                <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
             </div>
             <div class="logo">
                <a href="index.html"><img src="assets/img/logo/logo.png" alt="logo"></a>
             </div>
          </div>
          <div class="col-lg-9 col-md-8">
             <div class="header-meta-info d-flex align-items-center justify-content-between">
                <div class="header-search-bar">
                   <form action="#">
                      <div class="search-info p-relative">
                         <button class="header-search-icon"><i class="fal fa-search"></i></button>
                         <input type="text" placeholder="Search products...">
                      </div>
                   </form>
                </div>
                <div class="header-meta__social d-flex align-items-center ml-25">
                   <button class="header-cart p-relative tp-cart-toggle">
                      <i class="fal fa-shopping-cart"></i>
                      <span>2</span>
                   </button>
                   <a href="sign-in.html"><i class="fal fa-user"></i></a>
                   <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div id="header-mob-sticky" class="tp-md-lg-header d-md-none pt-20 pb-20">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-3 d-flex align-items-center">
             <div class="header-canvas flex-auto">
                <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
             </div>
          </div>
          <div class="col-6">
             <div class="logo text-center">
                <a href="index.html"><img src="assets/img/logo/logo.png" alt="logo"></a>
             </div>
          </div>
          <div class="col-3">
             <div class="header-meta-info d-flex align-items-center justify-content-end ml-25">
                <div class="header-meta m-0 d-flex align-items-center">
                   <div class="header-meta__social d-flex align-items-center">
                      <button class="header-cart p-relative tp-cart-toggle">
                         <i class="fal fa-shopping-cart"></i>
                         <span>2</span>
                      </button>
                      <a href="sign-in.html"><i class="fal fa-user"></i></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- header-md-lg-area -->
