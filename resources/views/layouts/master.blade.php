<!DOCTYPE html>
<html lang="en">
@include('layouts.global_components.front.head')

<body>
<!-- Mobile Only Navigation - 2 types each for small device screens -->
<!-- Sliding Navigation : starts -->
@include('layouts.global_components.front.nav')
<!-- Sliding Navigation : ends -->

<section id="mastwrap" class="sliding">
 
@include('layouts.global_components.front.sidebar')
  <!-- end sq-side-menu -->


<div id="logo" class="hidden-xs"><img alt="" title="" height="100" src="images/my_logo/logo.png"/></div>


<!-- HEADER : STARTS -->


<!-- HOME : STARTS -->
<section id="home">
    <section id="metro-panel" class="fx fx-bounceIn">
        @yield('content-home')
    </section>
</section>
<!-- HOME : ENDS -->


<!-- ABOUT : STARTS -->
<section id="about" class="page-section navigation-fadeIn">


    <section class="container">
      @yield('content-about')

    </section>

</section>
<!-- ABOUT : ENDS -->


<!-- PORTFOLIO : STARTS -->
<section id="portfolio" class="page-section">

    <section class="container">
      @yield('content-portfolio')
    </section>
</section>
<!-- PORTFOLIO : ENDS -->

<!-- SERVICES : STARTS -->
<section id="services" class="page-section">


      <section class="container">
          @yield('content-services')

      </section>
      <!-- container:ends -->

          
  
</section>
<!-- SERVICES : ENDS -->


<!-- CONTACT : STARTS -->
<section id="contact" class="page-section">


      <section class="container">

        @yield('content-contact')

      </section> 

          

</section>
<!-- CONTACT : ENDS -->



<!-- QUOTES : STARTS -->
<section id="testimonials" class="page-section">


      <section class="container">
      @yield('content-quote')

      </section>
      <!-- container:ends -->

          
</section>
<!-- QUOTES : ENDS -->


<section id="profile" class="page-section navigation-fadeIn" data-stellar-background-ratio="2" >
<section class="container">
    @yield('content-profile')

  </section>
</section>


<!-- FOOTER : STARTS -->
@include('layouts.global_components.front.footer')


 

</section>
<!-- mastwrap : ends -->

<!-- All Js here !-->
@include('layouts.global_components.front.scripts')

</body>
</html>