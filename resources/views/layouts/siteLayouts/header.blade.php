<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center"><img src="{{asset('themesite/assets/imgs/template/loading.gif')}}" alt="jobBox"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalApplyJobForm" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content apply-job-form">
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body pl-30 pr-30 pt-50">
                <div class="text-center">
                    <p class="font-sm text-brand-2">Job Application </p>
                    <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">Start your career today</h2>
                    <p class="font-sm text-muted mb-30">Please fill in your information and send it to the employer.                   </p>
                </div>
                <form class="login-register text-start mt-20 pb-30" action="#">
                    <div class="form-group">
                        <label class="form-label" for="input-1">Full Name *</label>
                        <input class="form-control" id="input-1" type="text" required="" name="fullname" placeholder="Steven Job">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="input-2">Email *</label>
                        <input class="form-control" id="input-2" type="email" required="" name="emailaddress" placeholder="stevenjob@gmail.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="number">Contact Number *</label>
                        <input class="form-control" id="number" type="text" required="" name="phone" placeholder="(+01) 234 567 89">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="des">Description</label>
                        <input class="form-control" id="des" type="text" required="" name="Description" placeholder="Your description...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="file">Upload Resume</label>
                        <input class="form-control" id="file" name="resume" type="file">
                    </div>
                    <div class="login_footer form-group d-flex justify-content-between">
                        <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Agree our terms and policy</span><span class="checkmark"></span>
                        </label><a class="text-muted" href="page-contact.html">Lean more</a>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default hover-up w-100" type="submit" name="login">Apply Job</button>
                    </div>
                    <div class="text-muted text-center">Do you need support? <a href="page-contact.html">Contact Us</a></div>
                </form>
            </div>
        </div>
    </div>
</div>
<header class="header sticky-bar " style="background: #fff">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo"><a class="d-flex" href="index.php"><img alt="jobBox" width="150" src="{{asset('themesite/assets/imgs/logo.gif')}}"></a></div>
            </div>
            <div class="header-na mr-0 ml-100" >
                <nav class="nav-main-menu  mr-0  ml-50">
                    <ul class="main-menu   mr-0  ml-50  text-black">

                        <li class=" ml-10"><a class=" hover-up " href="cadidat.php">Offres d'emploi</a></li>
                        <li > <a class=" hover-up" href="page-register.html">Qui somme nous ? </a></li>
                        <li >  <a class="hover-up " href="">Recruteurs</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <div class="block-signin ">
                    <a class="text-link-bd-btom hover-up ml-100 tex" href="{{route('recruteurs.index')}}">S'inscrire</a>
                    <a class="btn btn-default btn-shadow ml-10 hover-up" href="{{route('admin_page')}}">Se connecter</a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="perfect-scroll">
                <div class="mobile-search mobile-header-border mb-30">
                    <form action="#">
                        <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start-->
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li class="has-children"><a class="active" href="index.blade.php">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.blade.php">Home 1</a></li>
                                    <li><a href="index-2.blade.php">Home 2</a></li>
                                    <li><a href="index-3.blade.php">Home 3</a></li>
                                    <li><a href="index-4.blade.php">Home 4</a></li>
                                    <li><a href="index-5.blade.php">Home 5</a></li>
                                    <li><a href="index-6.blade.php">Home 6</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="jobs-grid.html">Find a Job</a>
                                <ul class="sub-menu">
                                    <li><a href="jobs-grid.html">Jobs Grid</a></li>
                                    <li><a href="jobs-list.html">Jobs List</a></li>
                                    <li><a href="job-details.blade.php">Jobs Details  </a></li>
                                    <li><a href="job-details-2.html">Jobs Details 2              </a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="companies-grid.blade.php">Recruiters</a>
                                <ul class="sub-menu">
                                    <li><a href="companies-grid.blade.php">Recruiters</a></li>
                                    <li><a href="company-details.blade.php">Company Details</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="candidates-grid.blade.php">Candidates</a>
                                <ul class="sub-menu">
                                    <li><a href="candidates-grid.blade.php">Candidates Grid</a></li>
                                    <li><a href="candidate-details.blade.php">Candidate Details</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="blog-grid.blade.php">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="page-about.html">About Us</a></li>
                                    <li><a href="page-pricing.html">Pricing Plan</a></li>
                                    <li><a href="page-contact.html">Contact Us</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-signin.html">Signin</a></li>
                                    <li><a href="page-reset-password.html">Reset Password</a></li>
                                    <li><a href="page-content-protected.html">Content Protected</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="blog-grid.blade.php">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid.blade.php">Blog Grid</a></li>
                                    <li><a href="blog-grid-2.blade.php">Blog Grid 2</a></li>
                                    <li><a href="blog-details.blade.php">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="http://wp.alithemes.com/html/jobbox/demos/dashboard" target="_blank">Dashboard</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-account">
                    <h6 class="mb-10">Your Account</h6>
                    <ul class="mobile-menu font-heading">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Work Preferences</a></li>
                        <li><a href="#">Account Settings</a></li>
                        <li><a href="#">Go Pro</a></li>
                        <li><a href="page-signin.html">Sign Out</a></li>
                    </ul>
                </div>
                <div class="site-copyright">Copyright 2022 &copy; JobBox. <br>Designed by AliThemes.</div>
            </div>
        </div>
    </div>
</div>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="perfect-scroll">
                <div class="mobile-search mobile-header-border mb-30">
                    <form action="#">
                        <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start-->
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li class="has-children"><a class="active" href="index.blade.php">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.blade.php">Home 1</a></li>
                                    <li><a href="index-2.blade.php">Home 2</a></li>
                                    <li><a href="index-3.blade.php">Home 3</a></li>
                                    <li><a href="index-4.blade.php">Home 4</a></li>
                                    <li><a href="index-5.blade.php">Home 5</a></li>
                                    <li><a href="index-6.blade.php">Home 6</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="jobs-grid.html">Find a Job</a>
                                <ul class="sub-menu">
                                    <li><a href="jobs-grid.html">Jobs Grid</a></li>
                                    <li><a href="jobs-list.html">Jobs List</a></li>
                                    <li><a href="job-details.blade.php">Jobs Details  </a></li>
                                    <li><a href="job-details-2.html">Jobs Details 2              </a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="companies-grid.blade.php">Recruiters</a>
                                <ul class="sub-menu">
                                    <li><a href="companies-grid.blade.php">Recruiters</a></li>
                                    <li><a href="company-details.blade.php">Company Details</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="candidates-grid.blade.php">Candidates</a>
                                <ul class="sub-menu">
                                    <li><a href="candidates-grid.blade.php">Candidates Grid</a></li>
                                    <li><a href="candidate-details.blade.php">Candidate Details</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="blog-grid.blade.php">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="page-about.html">About Us</a></li>
                                    <li><a href="page-pricing.html">Pricing Plan</a></li>
                                    <li><a href="page-contact.html">Contact Us</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-signin.html">Signin</a></li>
                                    <li><a href="page-reset-password.html">Reset Password</a></li>
                                    <li><a href="page-content-protected.html">Content Protected</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="blog-grid.blade.php">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid.blade.php">Blog Grid</a></li>
                                    <li><a href="blog-grid-2.blade.php">Blog Grid 2</a></li>
                                    <li><a href="blog-details.blade.php">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="http://wp.alithemes.com/html/jobbox/demos/dashboard" target="_blank">Dashboard</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-account">
                    <h6 class="mb-10">Your Account</h6>
                    <ul class="mobile-menu font-heading">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Work Preferences</a></li>
                        <li><a href="#">Account Settings</a></li>
                        <li><a href="#">Go Pro</a></li>
                        <li><a href="page-signin.html">Sign Out</a></li>
                    </ul>
                </div>
                <div class="site-copyright">Copyright 2022 &copy; JobBox. <br>Designed by AliThemes.</div>
            </div>
        </div>
    </div>
</div>


