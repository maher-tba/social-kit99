<html lang="en" style=""><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <title>Quick – Website UI Kit (FREE)</title>
    <!-- Preloader -->
    <style>
        @keyframes hidePreloader {
            0% {
                width: 100%;
                height: 100%;
            }

            100% {
                width: 0;
                height: 0;
            }
        }

        body>div.preloader {
            position: fixed;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body:not(.loaded)>div.preloader {
            opacity: 1;
        }

        body:not(.loaded) {
            overflow: hidden;
        }

        body.loaded>div.preloader {
            animation: hidePreloader .5s linear .5s forwards;
        }
    </style>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });
    </script>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('dashboard_asset/assets/img/brand/favicon.png')}}" type="image/png"><!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('dashboard_asset/assets/libs/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <!-- Quick CSS -->
    <link rel="stylesheet" href="{{asset('dashboard_asset/assets/css/quick-website.css')}}" id="stylesheet">
</head>

<body class="loaded" style="direction: rtl;">
    <!-- Preloader -->
    <div class="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-cookies" data-backdrop="false" aria-labelledby="modal-cookies" aria-hidden="true">
        <div class="modal-dialog modal-dialog-aside left-4 right-4 bottom-4">
            <div class="modal-content bg-dark-dark">
                <div class="modal-body">
                    <!-- Text -->
                    <p class="text-sm text-white mb-3">
                        We use cookies so that our themes work for you. By using our website, you agree to our use of cookies.
                    </p>
                    <!-- Buttons -->
                    <a href="pages/utility/terms.html" class="btn btn-sm btn-white" target="_blank">Learn more</a>
                    <button type="button" class="btn btn-sm btn-primary mr-2" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
   
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="index.blade.php">
                <img alt="Image placeholder" src="{{asset('dashboard_asset/assets/img/brand/social-light.png')}}" id="navbar-logo">
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.blade.php">نظرة عامة</a>
                    </li>
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الصفحات</a>
                        <div class="dropdown-menu dropdown-menu-single">
                            <a href="index.blade.php" class="dropdown-item">Homepage</a>
                            <a href="about.html" class="dropdown-item">About us</a>
                            <a href="contact.html" class="dropdown-item">Contact</a>
                            <div class="dropdown-divider"></div>
                            <a href="login.html" class="dropdown-item">Login</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="docs/index.html">دليل المستخدم</a>
                    </li>
                </ul>
                <!-- Button -->
                <a href="https://github.com/webpixels/quick-website-ui-kit-demo/archive/master.zip" class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3">تسجيل دخول</a>
                <!-- Mobile button -->
                <div class="d-lg-none text-center">
                    <a href="https://webpixels.io/themes/quick-website-ui-kit" class="btn btn-block btn-sm btn-warning">See more details</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <section class="slice py-7">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2 text-center">
                    <!-- Image -->
                    <figure class="w-100">
                        <img alt="Image placeholder" src="{{asset('dashboard_asset/assets/img/svg/illustrations/illustration-3.svg')}}" class="img-fluid mw-md-120">
                    </figure>
                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                    <!-- Heading -->
                    <h1 class="display-4 text-center text-md-right mb-3">
حان الوقت لتضخيم عملك عبر الإنترنت  
                    </h1>
                    <!-- Text -->
                    <p class="lead text-center text-md-right text-muted">أدوات التواصل اجتماعي هي أبسط طريقة للمشاركة الحقيقية بين الناس, أخبر قصة علامتك التجارية وزد من جمهورك من خلال منصة للنشر والتحليلات والتفاعل يمكنك الوثوق بها

</p>
                    <!-- Buttons -->
                    <div class="text-center text-md-right mt-5">
                        <a href="https://webpixels.io/themes/quick-free-bootstrap-theme" class="btn btn-primary btn-icon" target="_blank">
                            <span class="btn-inner--text">حساب تجريبي</span>
                            <span class="btn-inner--icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></span>
                        </a>
                        <a href="https://webpixels.io/illustrations" class="btn btn-neutral btn-icon d-none d-lg-inline-block" target="_blank">تعرف على المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6 bg-section-secondary">
        <div class="container">
            <!-- Title -->
            <!-- Section title -->
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-6">
                    <span class="badge badge-soft-success badge-pill badge-lg">اجمع منصاتك الاجتماعية</span>
                    <h2 class=" mt-4">ادارة حساباتك على 
 facebook \ twitter  
</h2>
                    <div class="mt-2"> قم بالاستفادة من أدواتنا ووضع خطة لادارة حساباتك على شبكات التواصل الاجتماعي  
                    </div>
                </div>
            </div>
            <!-- Card -->
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center text-md-right pb-5">
                            <div class="pt-4 pb-5">
                                <img src="{{asset('dashboard_asset/assets/img/svg/illustrations/illustration-5.svg')}}" class="img-fluid img-center" style="height: 150px;" alt="Illustration">
                            </div>
                            <h5 class="h4 lh-130 mb-3">
أطلق العنان لإبداعك</h5>
                            <p class="text-muted mb-0">
أدوات التواصل اجتماعي هي أبسط طريقة للمشاركة الحقيقية بين الناس قم بالاستفادة منها بالدرجة القصوى.
</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center text-md-right pb-5">
                            <div class="pt-4 pb-5">
                                <img src="{{asset('dashboard_asset/assets/img/svg/illustrations/illustration-6.svg')}}" class="img-fluid img-center" style="height: 150px;" alt="Illustration">
                            </div>
                            <h5 class="h4 lh-130 mb-3">
احصل على المزيد من النتائج</h5>
                            <p class="text-muted mb-0">
يحتوي Social Kit على  أدوات قم بالاستفادة منها في وضع خطة لادارة حساباتك على شبكات التواصل الاجتماعي.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center text-md-right pb-5">
                            <div class="pt-4 pb-5">
                                <img src="{{asset('dashboard_asset/assets/img/svg/illustrations/illustration-7.svg')}}" class="img-fluid img-center" style="height: 150px;" alt="Illustration">
                            </div><h5 class="h4 lh-130 mb-3">عرف الناس بخدماتك</h5>

                            
                            <p class="text-muted mb-0">أخبر قصة علامتك التجارية وزد من جمهورك من خلال منصة للنشر والتحليلات والتفاعل يمكنك الوثوق بها.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container">
            
            <div>
                <div class="row row-grid justify-content-between align-items-center">
                    <div class="col-lg-5  text-center text-md-right">
                        <h5 class="h3">واجهات حديثة لادارة حساباتك
</h5>
                        <p class="lead my-4">
                            باستخدام "Social Kit" ، تحصل على أدوات 
سهلة ، بالإضافة للعديد من الأفكار التي ستساعدك على 
التميز.                  </p>
                        <ul class="list-unstyled mb-0">
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle ml-3">
                                            <i class="fas fa-file-invoice"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">انشر في المنصة التي تريد</span>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle ml-3">
                                            <i class="fas fa-store-alt"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">في أوقات الذروة و المناسبات</span>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle ml-3">
                                            <i class="fas fa-store-alt"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">اطلع على آخر الاحصائيات</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-0 ml-lg-5">
                            <div class="card-body p-2">
                                <img alt="Image placeholder" src="{{asset('dashboard_asset/assets/img/theme/light/screen-2-1000x800.jpg')}}" class="img-fluid shadow rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg bg-section-dark pt-5 pt-lg-8">
        <!-- SVG separator -->
        <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <!-- Container -->
        <div class="container position-relative zindex-100">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center">
                        <div class="mt-4 mb-6">
                            <h2 class="h1 text-white">
                                
مع "Social Kit" سوف تنمو بشكل أسرع؟</h2>
                            <h4 class="text-white mt-3">اختيار العرض والسعر المناسبين </h4>
                            <!-- Play button -->
                            <a href="#" class="btn btn-primary btn-icon mt-4">اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice pt-0">
        <div class="container position-relative zindex-100">
            <div class="row justify-content-center">
    <div class="col-lg-4 col-md">
                    <div class="card card-pricing text-center px-3 hover-scale-110 mt-n7">
                        <div class="card-header py-5 border-0 delimiter-bottom">
                            <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">15</span></div>
                            <span class="h6 text-muted">
اشتراك القياسي</span>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled text-sm mb-4">
                                
                                <li class="py-2">8 حسابات اجتماعية
</li>
                                <li class="py-2">ارسال 100 منشور مجدول</li>
                                <li class="py-2">مستخدم واحد
</li>
                               
                            
                            </ul>
                            <a href="#" class="btn btn-sm btn-warning hover-translate-y-n3 hover-shadow-lg mb-3">اشترك الآن</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md">
                    <div class="card card-pricing bg-dark text-center px-3 border-0 hover-scale-110 mt-n7">
                        <div class="card-header py-5 border-0 delimiter-bottom">
                            <div class="h1 text-white text-center mb-0">$<span class="price font-weight-bolder">99</span></div>
                            <span class="h6 text-white">اشتراك ذهبي</span>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled text-white text-sm opacity-8 mb-4">
                                <li class="py-2">25 حساب تواصل اجتماعية
</li>
                                <li class="py-2">ارسال 25000 منشور مجدول</li>
                                <li class="py-2">8 مستخدمين 
</li>
                               
                            </ul>
                            <a href="#" class="btn btn-sm btn-white hover-translate-y-n3 hover-shadow-lg mb-3">اشترك الآن</a>
                        </div>
                    </div>
                </div>
    
    
    
                
                
                
            </div>
            <div class="row">
                
                
                
            </div>
        </div>
    </section>
    
    <section class="slice slice-lg bg-section-secondary">
        <div class="container text-center">
            <div class="row justify-content-center mb-6">
                <div class="col-lg-8">
                    <!-- Title -->
                    <h2 class="h1 strong-600">
الميزات الكاملة بين يديك</h2>
                    <!-- Text -->
                    <p class="text-muted">آلاف من العملاء اختارو منصة Social Kit لتكون منطلق لحملاتهم. </p>
                </div>
            </div>
            <!-- Pricing -->
            
            <div class="mt-5 text-center">
                <p class="mb-2">
يحتوي كلا السعرين على دعم مجاني لمدة 6 أشهر. أحتاج المزيد؟</p>
                <a href="#" class="text-primary text-underline--dashed">تواصل معنا<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right ml-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
            </div>
        </div>
    </section>
    <footer class="position-relative" id="footer-main">
        <div class="footer pt-lg-7 footer-dark bg-dark">
            <!-- SVG shape -->
            <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
                <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class=" fill-section-secondary">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <!-- Footer -->
            <div class="container pt-4">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <!-- Theme's logo -->
                        <a href="index.blade.php">
                            <img alt="Image placeholder" src="{{asset('dashboard_asset/assets/img/brand/social-dark.png')}}" id="footer-logo">
                        </a>
                        <!-- Webpixels' mission -->
                        <p class="mt-4 text-sm opacity-8 pr-lg-4">Webpixels attempts to bring the best development experience to designers and developers by offering the tools needed for having a quick and solid start in most web projects.</p>
                        <!-- Social -->
                        <ul class="nav mt-4">
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="https://dribbble.com/webpixels" target="_blank">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.instagram.com/webpxs" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Account</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Billing</a></li>
                            <li><a href="#">Notifications</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">About</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Company</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Help center</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="divider divider-fade divider-dark my-4">
                <div class="row align-items-center justify-content-md-between pb-4">
                    <div class="col-md-6">
                        <div class="copyright text-sm font-weight-bold text-center text-md-left">
                            © 2020 <a href="https://webpixels.io" class="font-weight-bold" target="_blank">Webpixels</a>. All rights reserved
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Terms
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Privacy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Cookies
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Core JS  -->
    <script src="{{asset('dashboard_asset/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/libs/svg-injector/dist/svg-injector.min.js')}}"></script>
    <script src="{{asset('dashboard_asset/assets/libs/feather-icons/dist/feather.min.js')}}"></script>
    <!-- Quick JS -->
    <script src="{{asset('dashboard_asset/assets/js/quick-website.js')}}"></script>
    <!-- Feather Icons -->
    <script>
        feather.replace({
            'width': '1em',
            'height': '1em'
        })
    </script>


</body></html>