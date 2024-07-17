<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.json" crossorigin>
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="../1.HTML_Template_Frontend/assets/imgs/template/favicon.svg">
    <link href="../1.HTML_Template_Frontend/assets/css/style.css?version=4.1" rel="stylesheet">
    <title>Jobbox - Job Portal HTML Template </title>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="../1.HTML_Template_Frontend/assets/imgs/template/loading.gif" alt="jobBox"></div>
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
    <header class="header sticky-bar">
      <div class="container">
        <div class="main-header">
          <div class="header-left">
            <div class="header-logo"><a class="d-flex" href="../index.blade.php"><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/template/jobhub-logo.svg"></a></div>
          </div>
          <div class="header-nav">
            <nav class="nav-main-menu">
              <ul class="main-menu">
                <li class="has-children"><a class="active" href="../index.blade.php">Home</a>
                  <ul class="sub-menu">
                    <li><a href="../index.blade.php">Home 1</a></li>
                    <li><a href="../index-2.blade.php">Home 2</a></li>
                    <li><a href="../index-3.blade.php">Home 3</a></li>
                    <li><a href="../index-4.blade.php">Home 4</a></li>
                    <li><a href="../index-5.blade.php">Home 5</a></li>
                    <li><a href="../index-6.blade.php">Home 6</a></li>
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
                    <li><a href="candidate-profile.blade.php">Candidate Profile</a></li>
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
                <li class="dashboard"><a href="http://wp.alithemes.com/html/jobbox/demos/dashboard" target="_blank">Dashboard</a></li>
              </ul>
            </nav>
            <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
          </div>
          <div class="header-right">
            <div class="block-signin"><a class="text-link-bd-btom hover-up" href="page-register.html">Register</a><a class="btn btn-default btn-shadow ml-40 hover-up" href="page-signin.html">Sign in</a></div>
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
                  <li class="has-children"><a class="active" href="../index.blade.php">Home</a>
                    <ul class="sub-menu">
                      <li><a href="../index.blade.php">Home 1</a></li>
                      <li><a href="../index-2.blade.php">Home 2</a></li>
                      <li><a href="../index-3.blade.php">Home 3</a></li>
                      <li><a href="../index-4.blade.php">Home 4</a></li>
                      <li><a href="../index-5.blade.php">Home 5</a></li>
                      <li><a href="../index-6.blade.php">Home 6</a></li>
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
                  <li class="has-children"><a class="active" href="../index.blade.php">Home</a>
                    <ul class="sub-menu">
                      <li><a href="../index.blade.php">Home 1</a></li>
                      <li><a href="../index-2.blade.php">Home 2</a></li>
                      <li><a href="../index-3.blade.php">Home 3</a></li>
                      <li><a href="../index-4.blade.php">Home 4</a></li>
                      <li><a href="../index-5.blade.php">Home 5</a></li>
                      <li><a href="../index-6.blade.php">Home 6</a></li>
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
    <main class="main">
      <section class="section-box-2">
        <div class="container">
          <div class="banner-hero banner-company">
            <div class="block-banner text-center">
              <h3 class="wow animate__animated animate__fadeInUp">Browse Candidates</h3>
              <div class="font-sm color-text-paragraph-2 mt-10 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, <br class="d-none d-xl-block">atque delectus molestias quis?</div>
              <div class="box-list-character">
                <ul>
                  <li><a class="active" href="#">A</a></li>
                  <li><a href="#">B</a></li>
                  <li><a href="#">C</a></li>
                  <li><a href="#">D</a></li>
                  <li><a href="#">E</a></li>
                  <li><a href="#">F</a></li>
                  <li><a href="#">G</a></li>
                  <li><a href="#">H</a></li>
                  <li><a href="#">I</a></li>
                  <li><a href="#">J</a></li>
                  <li><a href="#">K</a></li>
                  <li><a href="#">L</a></li>
                  <li><a href="#">M</a></li>
                  <li><a href="#">N</a></li>
                  <li><a href="#">O</a></li>
                  <li><a href="#">P</a></li>
                  <li><a href="#">Q</a></li>
                  <li><a href="#">R</a></li>
                  <li><a href="#">S</a></li>
                  <li><a href="#">T</a></li>
                  <li><a href="#">U</a></li>
                  <li><a href="#">V</a></li>
                  <li><a href="#">W</a></li>
                  <li><a href="#">X</a></li>
                  <li><a href="#">Y</a></li>
                  <li><a href="#">Z</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-30">
        <div class="container">           
          <div class="content-page">
            <div class="box-filters-job">
              <div class="row">
                <div class="col-xl-6 col-lg-5"><span class="text-small text-showing">Showing <strong>41-60 </strong>of <strong>944 </strong>jobs</span></div>
                <div class="col-xl-6 col-lg-7 text-lg-end mt-sm-15">
                  <div class="display-flex2">
                    <div class="box-border mr-10"><span class="text-sortby">Show:</span>
                      <div class="dropdown dropdown-sort">
                        <button class="btn dropdown-toggle" id="dropdownSort" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>12</span><i class="fi-rr-angle-small-down"></i></button>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort">
                          <li><a class="dropdown-item active" href="#">10</a></li>
                          <li><a class="dropdown-item" href="#">12</a></li>
                          <li><a class="dropdown-item" href="#">20</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="box-border"><span class="text-sortby">Sort by:</span>
                      <div class="dropdown dropdown-sort">
                        <button class="btn dropdown-toggle" id="dropdownSort2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>Newest Post</span><i class="fi-rr-angle-small-down"></i></button>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                          <li><a class="dropdown-item active" href="#">Newest Post</a></li>
                          <li><a class="dropdown-item" href="#">Oldest Post</a></li>
                          <li><a class="dropdown-item" href="#">Rating Post</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="box-view-type"><a class="view-type" href="jobs-list.html"><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/icon-list.svg" alt="jobBox"></a><a class="view-type" href="jobs-grid.html"><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/icon-grid-hover.svg" alt="jobBox"></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user1.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5>Robert Fox</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user2.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5>Cody Fisher</h5></a><span class="font-xs color-text-mutted">Python developer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user3.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5>Jerome Bell</h5></a><span class="font-xs color-text-mutted">Content Manager</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user4.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5>Jane Cooper</h5></a><span class="font-xs color-text-mutted">Network</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user5.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5>Floyd Miles</h5></a><span class="font-xs color-text-mutted">Photo Editing</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user6.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5>Devon Lane</h5></a><span class="font-xs color-text-mutted">Online Marketing</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user7.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5>Jerome Bell</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user8.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5>Eleanor</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user9.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5>Theresa</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user10.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5>Robert Fox</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user11.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5>Cameron</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user12.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5>Jacob Jones</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user13.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5>Court Henry</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user14.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5>Hawkins</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user15.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5>Howard</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.blade.php">
                        <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/user1.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.blade.php">
                        <h5> Alexander</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="paginations">
            <ul class="pager">
              <li><a class="pager-prev" href="#"></a></li>
              <li><a class="pager-number" href="#">1</a></li>
              <li><a class="pager-number" href="#">2</a></li>
              <li><a class="pager-number" href="#">3</a></li>
              <li><a class="pager-number" href="#">4</a></li>
              <li><a class="pager-number" href="#">5</a></li>
              <li><a class="pager-number active" href="#">6</a></li>
              <li><a class="pager-number" href="#">7</a></li>
              <li><a class="pager-next" href="#"></a></li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section-box mt-50 mb-50">
        <div class="container">
          <div class="text-start">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">News and Blog</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest news, updates and tips</p>
          </div>
        </div>
        <div class="container">
          <div class="mt-50">
            <div class="box-swiper style-nav-top">
              <div class="swiper-container swiper-group-3 swiper">
                <div class="swiper-wrapper pb-70 pt-5">
                  <div class="swiper-slide">
                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                      <div class="text-center card-grid-3-image"><a href="#">
                          <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/img-news1.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.blade.php">News</a></div>
                        <h5><a href="blog-details.blade.php">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/user1.png" alt="jobBox">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Sarah Harding</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                      <div class="text-center card-grid-3-image"><a href="#">
                          <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/img-news2.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.blade.php">Events</a></div>
                        <h5><a href="blog-details.blade.php">39 Strengths and Weaknesses To Discuss in a Job Interview</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/user2.png" alt="jobBox">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Steven Jobs</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">6 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                      <div class="text-center card-grid-3-image"><a href="#">
                          <figure><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/img-news3.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.blade.php">News</a></div>
                        <h5><a href="blog-details.blade.php">Interview Question: Why Dont You Have a Degree?</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Learn how to respond if an interviewer asks you why you dont have a degree, and read example answers that can help you craft</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/user3.png" alt="jobBox">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Wiliam Kend</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">9 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
            <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="blog-grid.blade.php">Load More Posts</a></div>
          </div>
        </div>
      </section>
      <section class="section-box mt-50 mb-20">
        <div class="container">
          <div class="box-newsletter">
            <div class="row">
              <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="../1.HTML_Template_Frontend/assets/imgs/template/newsletter-left.png" alt="joxBox"></div>
              <div class="col-lg-12 col-xl-6 col-12">
                <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
                <div class="box-form-newsletter mt-40">
                  <form class="form-newsletter">
                    <input class="input-newsletter" type="text" value="" placeholder="Enter your email here">
                    <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                  </form>
                </div>
              </div>
              <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="../1.HTML_Template_Frontend/assets/imgs/template/newsletter-right.png" alt="joxBox"></div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer mt-50">
      <div class="container">
        <div class="row">
          <div class="footer-col-1 col-md-3 col-sm-12"><a href="../index.blade.php"><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/template/jobhub-logo.svg"></a>
            <div class="mt-20 mb-20 font-xs color-text-paragraph-2">JobBox is the heart of the design community and the best resource to discover and connect with designers and jobs worldwide.</div>
            <div class="footer-social"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-twitter" href="#"></a><a class="icon-socials icon-linkedin" href="#"></a></div>
          </div>
          <div class="footer-col-2 col-md-2 col-xs-6">
            <h6 class="mb-20">Resources</h6>
            <ul class="menu-footer">
              <li><a href="#">About us</a></li>
              <li><a href="#">Our Team</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="footer-col-3 col-md-2 col-xs-6">
            <h6 class="mb-20">Community</h6>
            <ul class="menu-footer">
              <li><a href="#">Feature</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Credit</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="footer-col-4 col-md-2 col-xs-6">
            <h6 class="mb-20">Quick links</h6>
            <ul class="menu-footer">
              <li><a href="#">iOS</a></li>
              <li><a href="#">Android</a></li>
              <li><a href="#">Microsoft</a></li>
              <li><a href="#">Desktop</a></li>
            </ul>
          </div>
          <div class="footer-col-5 col-md-2 col-xs-6">
            <h6 class="mb-20">More</h6>
            <ul class="menu-footer">
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="footer-col-6 col-md-3 col-sm-12">
            <h6 class="mb-20">Download App</h6>
            <p class="color-text-paragraph-2 font-xs">Download our Apps and get extra 15% Discount on your first Order&mldr;!</p>
            <div class="mt-15"><a class="mr-5" href="#"><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/app-store.png" alt="joxBox"></a><a href="#"><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/android.png" alt="joxBox"></a></div>
          </div>
        </div>
        <div class="footer-bottom mt-50">
          <div class="row">
            <div class="col-md-6"><span class="font-xs color-text-paragraph">Copyright &copy; 2022. JobBox all right reserved</span></div>
            <div class="col-md-6 text-md-end text-start">
              <div class="footer-social"><a class="font-xs color-text-paragraph" href="#">Privacy Policy</a><a class="font-xs color-text-paragraph mr-30 ml-30" href="#">Terms &amp; Conditions</a><a class="font-xs color-text-paragraph" href="#">Security</a></div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="../1.HTML_Template_Frontend/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="../1.HTML_Template_Frontend/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="../1.HTML_Template_Frontend/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="../1.HTML_Template_Frontend/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="../1.HTML_Template_Frontend/assets/js/plugins/waypoints.js"></script>
    <script src="../1.HTML_Template_Frontend/assets/js/plugins/wow.js"></script>
    <script src="../1.HTML_Template_Frontend/assets/js/plugins/magnific-popup.js"></script>
    <script src="../1.HTML_Template_Frontend/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../1.HTML_Template_Frontend/assets/js/plugins/select2.min.js"></script>
    <script src="../1.HTML_Template_Frontend/assets/js/plugins/isotope.js"></script>
    <script src="../1.HTML_Template_Frontend/assets/js/plugins/scrollup.js"></script>
    <script src="../1.HTML_Template_Frontend/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="../1.HTML_Template_Frontend/assets/js/noUISlider.js"></script>
    <script src="../1.HTML_Template_Frontend/assets/js/slider.js"></script>
    <script src="../1.HTML_Template_Frontend/assets/js/main.js?v=4.1"></script>
  </body>
</html>