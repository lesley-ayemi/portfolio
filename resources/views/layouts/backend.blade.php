<!DOCTYPE html>
<html lang="en">
  @include('layouts.global_components.backend.head')
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="effect mainnav-sm navbar-fixed mainnav-fixed">
            <!--NAVBAR-->
            <!--===================================================-->
           @include('layouts.global_components.backend.header_nav')
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="content-container">
                <div class="pageheader hidden-xs">
                  <h3><i class="fa fa-home"></i> Dashboard </h3>
                    <div class="breadcrumb-wrapper">
                      <span class="label">You are here:</span>
                         <ol class="breadcrumb">
                            <li> <a href="#"> Home </a> </li>
                            <li class="active"> Dashboard </li>
                         </ol>
                    </div>
                </div>
                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                        @yield('content')
                    </div>
                    <!--===================================================-->
                    <!--End page content-->
                </div>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id="mainnav-container">
                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand">
                            <i class="fa fa-forumbee brand-icon"></i>
                            <div class="brand-title">
                                <span class="brand-text">WOW</span>
                            </div>
                        </a>
                    </div>
                    <!--================================-->
                    <!--End brand logo & name-->
                    <div id="mainnav">
                        <!--Menu-->
                        <!--================================-->
                        <!-- sidebar menu !-->
                        <div id="mainnav-menu-wrap">
                            @include('layouts.global_components.backend.sidebar')
                        </div>
                        <!--================================-->
                        <!--End menu-->
                    </div>
                </nav>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->
            </div>
            <!-- FOOTER -->
            <!--===================================================-->
            @include('layouts.global_components.backend.footer')
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        @include('layouts.global_components.backend.scripts')
      
    </body>
</html>