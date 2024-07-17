

<body>

@include('layouts.appLayouts.header')

<main class="main">

    @yield('content')

</main>

@include('layouts.siteLayouts.footer')

</body>

</html>

@include('layouts.appLayouts.head')
<body>
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center"><img src="assets/imgs/template/loading.gif" alt="jobBox"></div>
        </div>
    </div>
</div>
@include('layouts.appLayouts.navbare')
<div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
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
                        <ul class="main-menu">
                            <li> <a class="dashboard2 active" href="index.php"><img src="assets/imgs/page/dashboard/dashboard.svg" alt="jobBox"><span class="name">Dashboard</span></a>
                            </li>
                            <li> <a class="dashboard2" href="candidates.html"><img src="assets/imgs/page/dashboard/candidates.svg" alt="jobBox"><span class="name">Candidates</span></a>
                            </li>
                            <li> <a class="dashboard2" href="recruiters.html"><img src="assets/imgs/page/dashboard/recruiters.svg" alt="jobBox"><span class="name">Recruiters</span></a>
                            </li>
                            <li> <a class="dashboard2" href="my-job-grid.html"><img src="assets/imgs/page/dashboard/jobs.svg" alt="jobBox"><span class="name">My Jobs</span></a>
                            </li>
                            <li> <a class="dashboard2" href="my-tasks-list.html"><img src="assets/imgs/page/dashboard/tasks.svg" alt="jobBox"><span class="name">Tasks List</span></a>
                            </li>
                            <li> <a class="dashboard2" href="profile.html"><img src="assets/imgs/page/dashboard/profiles.svg" alt="jobBox"><span class="name">My Profiles</span></a>
                            </li>
                            <li> <a class="dashboard2" href="my-resume.html"><img src="assets/imgs/page/dashboard/cv-manage.svg" alt="jobBox"><span class="name">CV Manage</span></a>
                            </li>
                            <li> <a class="dashboard2" href="settings.html"><img src="assets/imgs/page/dashboard/settings.svg" alt="jobBox"><span class="name">Setting</span></a>
                            </li>
                            <li> <a class="dashboard2" href="authentication.html"><img src="assets/imgs/page/dashboard/authentication.svg" alt="jobBox"><span class="name">Authentication</span></a>
                            </li>
                            <li> <a class="dashboard2" href="login.html"><img src="assets/imgs/page/dashboard/logout.svg" alt="jobBox"><span class="name">Logout</span></a>
                            </li>
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
                    <div class="mb-15 mt-15"> <a class="btn btn-default icon-edit hover-up" href="post-job.html">Post Job</a></div>
                </div>
                <div class="site-copyright">Copyright 2022 &copy; JobBox. <br>Designed by AliThemes.</div>
            </div>
        </div>
    </div>
</div>
<main class="main">
    @include('layouts.appLayouts.sidebare')
    <div class="box-content">
        <div class="box-heading">
            <div class="box-title">
                <h3 class="mb-35">Dashboard</h3>
            </div>
            <div class="box-breadcrumb">
                <div class="breadcrumbs">
                    <ul>
                        <li> <a class="icon-home" href="index.php">Admin</a></li>
                        <li><span>Dashboard</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-8 col-xl-12 col-lg-12">
                <div class="section-box">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                            <div class="card-grid-1 hover-up bg-white ">
                                <div class="info-text mt-10">
                                    <h3 class="font-bold">Nombre d'annonce en cours</h3>
                                    <h3 class="font-bold mt-5">4</h3>
                                </div>
                                <a href="" class="btn btn-secondary mt-10">Voir mes messages</a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                            <div class="card-grid-1 hover-up bg-white ">
                                <div class="info-text mt-10">
                                    <h3 class="font-bold">Message non lus</h3>
                                    <h3 class="font-bold mt-5">4</h3>
                                </div>
                                <a href="" class="btn btn-secondary mt-10">Voir mes messages</a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6  mt-10">
                            <div class="card-style-1 hover-up">
                                <div class="card-info">
                                    <div class="card-title">
                                        <h3>136<span class="font-sm status up">12<span>%</span></span>
                                        </h3>
                                    </div>
                                    <p class="color-text-paragraph-2">Task Bids Won</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6 mt-10">
                            <div class="card-style-1 hover-up">
                                <div class="card-image"> <img src="assets/imgs/page/dashboard/headphone.svg" alt="jobBox"></div>
                                <div class="card-info">
                                    <div class="card-title">
                                        <h3>985<span class="font-sm status up">5<span>%</span></span>
                                        </h3>
                                    </div>
                                    <p class="color-text-paragraph-2">Application Sent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer mt-20">
            <div class="container">
                <div class="box-footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-25 text-center text-md-start">
                            <p class="font-sm color-text-paragraph-2">© 2022 - <a class="color-brand-2" href="https://themeforest.net/item/jobbox-job-portal-html-bootstrap-5-template/39217891" target="_blank">JobBox </a>Dashboard <span> Made by  </span><a class="color-brand-2" href="http://alithemes.com" target="_blank"> AliThemes</a></p>
                        </div>
                        <div class="col-md-6 col-sm-12 text-center text-md-end mb-25">
                            <ul class="menu-footer">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</main>
@include('layouts.appLayouts.footer')
</body>
</html>