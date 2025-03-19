 {{-- navbar start --}}

 <header>
    <!-- Header Start -->
   <div class="header-area">
        <div class="main-header ">
            <div class="header-top black-bg d-none d-md-block">
               <div class="container">
                   <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>     
                                    <li>
                                        <img src="assets/img/icon/header_icon1.png" alt="">
                                        <span id="currentDate"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">    
                                    <li><a href="https://www.facebook.com/charidik24"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="https://www.youtube.com/@Charidik24"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="https://www.instagram.com/charidik24"><i class="fab fa-instagram"></i></a></li>
                                   <li><a href="https://www.tiktok.com/@charidik24"><i class="fab fa-tiktok" style="color: #ffffff;"></i></a></li>
                                </ul>
                            </div>
                        </div>
                   </div>
               </div>
            </div>
           <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="assets/img/logo/logo.png" style="width: 150px" alt=""></a>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                            <!-- sticky -->
                           
                               
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>                  
                                    <ul id="navigation">    
                                        <li><a href="{{route('home')}}">Home</a></li>
                                        <li><a href="{{route('category')}}">Category</a></li>
                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="{{route('news')}}">Youtube Chennel</a></li>
                                        <li><a href="{{route('blog')}}">Our Blogs</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>     
                        <div class="header-right-btn f-right d-none d-lg-block">
                            <i class="fas fa-search special-tag"></i>
                            <div class="search-box">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    
                                </form>
                            </div>
                        </div>        
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
   
  
</header>

{{-- navbar start end  --}}