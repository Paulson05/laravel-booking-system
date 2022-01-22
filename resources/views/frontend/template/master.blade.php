<!DOCTYPE html>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
<html class="no-js lt-ie9 lt-ie8">
<html class="no-js lt-ie9">
<html class="no-js">
<html lang="en">

<head>
    @include('frontend.template.partials.head')

</head>

<body>

<!-- Navigation Overlay menu start -->
<div class="sh__navOverlay sh__navOverlay--closed">
   @include('frontend.template.partials.navbar')<!--/.sh__navOverlay-inner -->
</div> <!--/.sh__navOverlay -->
<!-- Navigation Overlay end -->

<div id="page_wrapper">
   yield('body')
    <!-- START FOOTER SECTION -->
    @include('frontend.template.partials.footers')
    	<!-- end footer section -->
</div><!-- end page_wrapper -->
<a href="#" class="totop">TOP</a> <!--/.totop -->
<!-- google maps script -->


@include('frontend.template.partials.scripts')
</body>

<!-- Mirrored from demos.hogash.com/greek-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jan 2022 07:34:24 GMT -->
</html>
