<div>
    <!-- Well begun is half done. - Aristotle -->

    <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from quomodosoft.com/html/bisy/course-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jun 2024 02:07:01 GMT -->

    <head>
        <title>{{ $title }}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

        <!-- Start Include All CSS -->
        <link rel="stylesheet" href="{{asset('plantilla/assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('plantilla/assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('plantilla/assets/css/elegant-icons.css')}}">
        <link rel="stylesheet" href="{{asset('plantilla/assets/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('plantilla/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('plantilla/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('plantilla/assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('plantilla/assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('plantilla/assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('plantilla/assets/css/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{asset('plantilla/assets/css/lightcase.css')}}">
        <link rel="stylesheet" href="{{asset('plantilla/assets/css/preset.css')}}">
        <link rel="stylesheet" href="{{asset('plantilla/assets/css/theme.css')}}">
        <link rel="stylesheet" href="{{asset('plantilla/assets/css/responsive.css')}}">
        <!-- End Include All CSS -->
        {{-- @vite('resources/css/app.scss') --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- Favicon Icon -->
        <img rel="icon" src="{{asset('plantilla/assets/images/favicon.png')}}">
        <!-- Favicon Icon -->
    </head>

    <body>

        <!-- Preloader Icon -->
        <!--<div class="preloader">
            <div class="loaderInner">
                <div id="top" class="mask">
                    <div class="plane"></div>
                </div>
                <div id="middle" class="mask">
                    <div class="plane"></div>
                </div>
                <div id="bottom" class="mask">
                    <div class="plane"></div>
                </div>
                <p>LOADING...</p>
            </div>
        </div>-->
        <!-- Preloader Icon -->

        <!-- Header Start -->
        <header class="header-01 sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <!-- logo Start-->
                            <a class="navbar-brand" href="index.html">
                                <img src="{{asset('plantilla/assets/images/logo4.png')}}" alt="">
                                <img class="sticky-logo" src="{{asset('plantilla/assets/images/logo4.png')}}" alt="">
                            </a>
                            <!-- logo End-->

                            <!-- Moblie Btn Start -->
                            <button class="navbar-toggler" type="button">
                                <i class="fal fa-bars"></i>
                            </button>
                            <!-- Moblie Btn End -->

                            <!-- Nav Menu Start -->
                            <div class="collapse navbar-collapse">
                                <ul class="navbar-nav">
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Home</a>
                                        <ul class="sub-menu">
                                            <li><a src="{{asset('plantilla/index.html')}}">Home One</a></li>
                                            <li><a src="{{asset('plantilla/index-2.html')}}">Home Two</a></li>
                                            <li><a src="{{asset('plantilla/index-3.html')}}">Home Three</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Courses</a>
                                        <ul class="sub-menu">
                                            <li><a src="{{asset('plantilla/course-1.html')}}">Course 01</a></li>
                                            <li><a src="{{asset('plantilla/course-2.html')}}">Course 02</a></li>
                                            <li><a src="{{asset('plantilla/course-3.html')}}">Course 03</a></li>
                                            <li><a src="{{asset('plantilla/single-course.html')}}">Course Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">About Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a src="{{asset('plantilla/about-1.html')}}">About 01</a></li>
                                                    <li><a src="{{asset('plantilla/about-2.html')}}">About 02</a></li>
                                                </ul>
                                            </li>
                                            <li><a src="{{asset('plantilla/instructor.html')}}">Instructor Page</a></li>
                                            <li><a src="{{asset('plantilla/profile.html')}}">Instructor Profile</a></li>
                                            <li><a src="{{asset('plantilla/404.html')}}">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a src="{{asset('plantilla/blog.html')}}">Blog Page</a></li>
                                            <li><a src="{{asset('plantilla/single-post.html')}}">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a src="{{asset('plantilla/contact.html')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav Menu End -->

                            <!-- User Btn -->
                            <a href="#" class="user-btn"><i class="ti-user"></i></a>
                            <!-- User Btn -->

                            <!-- Join Btn -->
                            <a href="#" class="join-btn">Join for Free</a>
                            <!-- Join Btn -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Back To Top -->
        <a href="#" id="back-to-top">
            <i class="fal fa-angle-double-up"></i>
        </a>
        <!-- Back To Top -->

        <!-- Start Include All JS -->

        <script src="{{asset('plantilla/assets/js/jquery.js')}}"></script>
        <script src="{{asset('plantilla/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('plantilla/assets/js/appear.js')}}"></script>
        <script src="{{asset('plantilla/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('plantilla/assets/js/slick.js')}}"></script>
        <script src="{{asset('plantilla/assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('plantilla/assets/js/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('plantilla/assets/js/TweenMax.min.js')}}"></script>
        <script src="{{asset('plantilla/assets/js/lightcase.js')}}"></script>
        <script src="{{asset('plantilla/assets/js/jquery.plugin.min.js')}}"></script>
        <script src="{{asset('plantilla/assets/js/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('plantilla/assets/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('plantilla/assets/js/jquery.shuffle.min.js')}}"></script>
        <script src="{{asset('plantilla/assets/js/theme.js')}}"></script>
        <!-- End Include All JS -->

    </body>

    <!-- Mirrored from quomodosoft.com/html/bisy/course-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jun 2024 02:07:06 GMT -->
    <section>
        {{ $slot}}
    </section>
    </html>
</div>
