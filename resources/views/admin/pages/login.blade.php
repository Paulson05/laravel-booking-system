
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/now-ui-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 17:59:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    @include('admin.template.partials.header')

</head>
<style>
    #background_image{
        background-image: url(../../backend/assets/img/bg14.jpg) !important;
    }
</style>
<body class="login-page sidebar-mini ">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->




<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-wrapper">

            <a class="navbar-brand" href="#pablo">Login Page</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navigation">

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



        </div>
    </div>
</nav>
<!-- End Navbar -->



<div class="wrapper wrapper-full-page ">






    <div id="background_image" class="full-page login-page section-image" filter-color="black" data-image="" style="background-image: url(../../backend/assets/img/bg14.jpg) !important;" >
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <form method="POST" action="{{route('admin.post.login')}}">

                                  @csrf


                        <div class="card card-login card-plain">

                            <div class="card-header ">
                                <div class="logo-container">
                                    <img src="../../assets/img/now-logo.png" alt="">
                                </div>
                            </div>

                            <div class="card-body ">







                                <div class="input-group no-border form-control-lg">
                                <span class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="now-ui-icons users_circle-08"></i>
                                  </div>
                                </span>
                                    <input id="email" placeholder="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group no-border form-control-lg">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="now-ui-icons text_caps-small"></i>
                                        </div>
                                    </div>
                                    <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>



                            </div>



                            <div class="card-footer ">
                                <button  type="submit"  class="btn btn-primary btn-round btn-lg btn-block mb-3">Login</button>

                            </div>

                        </div>


                    </form>

                </div>
            </div>
        </div>
        <footer class="footer" >

            <div class=" container-fluid ">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com/">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com/">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com/">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy; <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>, Designed by <a href="https://www.invisionapp.com/" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a>.
                </div>
            </div>



        </footer>

    </div>


</div>




@include('admin.template.partials.scripts')
</body>


<!-- Mirrored from demos.creative-tim.com/now-ui-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 17:59:47 GMT -->
</html>
