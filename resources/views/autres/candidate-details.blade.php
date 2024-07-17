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
    <title>Candidate Details - Job Portal HTML Template </title>
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
          <div class="banner-hero banner-image-single"><img src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/img.png" alt="jobbox"></div>
          <div class="box-company-profile">
            <div class="image-compay"><img src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/candidate-profile.png" alt="jobbox"></div>
            <div class="row mt-10">
              <div class="col-lg-8 col-md-12">
                <h5 class="f-18">Steven Jobs <span class="card-location font-regular ml-20">New York, US</span></h5>
                <p class="mt-0 font-md color-text-paragraph-2 mb-15">UI/UX Designer. Front end Developer</p>
                <div class="mt-10 mb-15"><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobbox"><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobbox"><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobbox"><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobbox"><img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobbox"><span class="font-xs color-text-mutted ml-10">(66)</span><img class="ml-30" src="../1.HTML_Template_Frontend/assets/imgs/page/candidates/verified.png" alt="jobbox"></div>
              </div>
              <div class="col-lg-4 col-md-12 text-lg-end"><a class="btn btn-download-icon btn-apply btn-apply-big" href="page-contact.html">Download CV</a></div>
            </div>
          </div>
          <div class="box-nav-tabs mt-40 mb-5">
            <ul class="nav" role="tablist">
              <li><a class="btn btn-border aboutus-icon mr-15 mb-5 active" href="#tab-short-bio" data-bs-toggle="tab" role="tab" aria-controls="tab-short-bio" aria-selected="true">Short Bio</a></li>
              <li><a class="btn btn-border recruitment-icon mr-15 mb-5" href="#tab-skills" data-bs-toggle="tab" role="tab" aria-controls="tab-skills" aria-selected="false">Skills</a></li>
              <li><a class="btn btn-border people-icon mb-5" href="#tab-work-experience" data-bs-toggle="tab" role="tab" aria-controls="tab-work-experience" aria-selected="false">Working Experience</a></li>
            </ul>
          </div>
          <div class="border-bottom pt-10 pb-10"></div>
        </div>
      </section>
      <section class="section-box mt-50">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="content-single">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tab-short-bio" role="tabpanel" aria-labelledby="tab-short-bio">
                    <h4>About Me</h4>
                    <p>Hello there! My name is Alan Walker. I am a graphic designer, and I&rsquo;m very passionate and dedicated to my work. With 20 years experience as a professional a graphic designer, I have acquired the skills and knowledge necessary to make your project a success.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!</p>
                    <h4>Professional Skills</h4>
                    <div class="row mb-40">
                      <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                        <h6 class="color-text-paragraph-2">Programming</h6>
                        <div class="box-progress-bar mt-20">
                          <p class="font-xs color-text-paragraph-2 mb-10">HTML &amp; CSS</p>
                          <div class="progress">
                            <div class="progress-bar bg-paragraph-2" role="progressbar" style="width: 78%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>78%</span></div>
                          </div>
                          <p class="font-xs color-text-paragraph-2 mb-10 mt-30">Javascript</p>
                          <div class="progress">
                            <div class="progress-bar bg-brand-2" role="progressbar" style="width: 88%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span>88%</span></div>
                          </div>
                          <p class="font-xs color-text-paragraph-2 mb-10 mt-30">Database</p>
                          <div class="progress">
                            <div class="progress-bar bg-paragraph-2" role="progressbar" style="width: 62%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span>62%</span></div>
                          </div>
                          <p class="font-xs color-text-paragraph-2 mb-10 mt-30">React JS</p>
                          <div class="progress">
                            <div class="progress-bar bg-paragraph-2" role="progressbar" style="width: 92%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span>92%</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                        <h6 class="color-text-paragraph-2">Design</h6>
                        <div class="box-progress-bar mt-20">
                          <p class="font-xs color-text-paragraph-2 mb-10">Photoshop</p>
                          <div class="progress">
                            <div class="progress-bar bg-paragraph-2" role="progressbar" style="width: 29%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>29%</span></div>
                          </div>
                          <p class="font-xs color-text-paragraph-2 mb-10 mt-30">Figma</p>
                          <div class="progress">
                            <div class="progress-bar bg-paragraph-2" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span>20%</span></div>
                          </div>
                          <p class="font-xs color-text-paragraph-2 mb-10 mt-30">Illustrator</p>
                          <div class="progress">
                            <div class="progress-bar bg-paragraph-2" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span>65%</span></div>
                          </div>
                          <p class="font-xs color-text-paragraph-2 mb-10 mt-30">Sketch</p>
                          <div class="progress">
                            <div class="progress-bar bg-paragraph-2" role="progressbar" style="width: 82%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span>82%</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p></p>
                    <h4>Work Experience</h4>
                    <ul>
                      <li>A portfolio demonstrating well thought through and polished end to end customer journeys</li>
                      <li>5+ years of industry experience in interactive design and / or visual design</li>
                      <li>Excellent interpersonal skills</li>
                      <li>Aware of trends in&#x202F;mobile, communications, and collaboration</li>
                      <li>Ability to create highly polished design prototypes, mockups, and other communication artifacts</li>
                      <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals independently</li>
                      <li>History of impacting shipping products with your work</li>
                      <li>A Bachelor&rsquo;s Degree in Design (or related field) or equivalent professional experience</li>
                      <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and Sketch</li>
                    </ul>
                    <h4>Education</h4>
                    <ul>
                      <li>Necessitatibus quibusdam facilis</li>
                      <li>Velit unde aliquam et voluptas reiciendis non sapiente labore</li>
                      <li>Commodi quae ipsum quas est itaque</li>
                      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                      <li>Deleniti asperiores blanditiis nihil quia officiis dolor</li>
                    </ul>
                  </div>
                  <div class="tab-pane fade" id="tab-skills" role="tabpanel" aria-labelledby="tab-skills">
                    <h4>Skills</h4>
                    <p></p>Hello there! My name is Alan Walker. I am a graphic designer, and I&rsquo;m very passionate and dedicated to my work. With 20 years experience as a professional a graphic designer, I have acquired the skills and knowledge necessary to make your project a success.
                    <p></p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!
                  </div>
                  <div class="tab-pane fade" id="tab-work-experience" role="tabpanel" aria-labelledby="tab-work-experience">
                    <h4>Work Experiences</h4>
                    <p></p>Hello there! My name is Alan Walker. I am a graphic designer, and I&rsquo;m very passionate and dedicated to my work. With 20 years experience as a professional a graphic designer, I have acquired the skills and knowledge necessary to make your project a success.
                    <p></p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!
                  </div>
                </div>
              </div>
              <div class="box-related-job content-page">
                <h3 class="mb-30">Work History</h3>
                <div class="box-list-jobs display-list">
                  <div class="col-xl-12 col-12">
                    <div class="card-grid-2 hover-up wow animate__animated animate__fadeIn"><span class="flash"></span>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-2-image-left">
                            <div class="image-box"><img src="../1.HTML_Template_Frontend/assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                            <div class="right-info"><a class="name-job" href="">Quora JSC</a><span class="location-small">New York, US</span></div>
                          </div>
                        </div>
                        <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                          <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h4><a href="job-details.blade.php">Senior System Engineer</a></h4>
                        <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time"><span>5</span><span> days ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">Status:<span class="text-success">Done</span></span></div>
                            <div class="col-lg-5 col-5 text-end"><a class="btn btn-apply-now" href="job-details.blade.php">View Details</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-12">
                    <div class="card-grid-2 hover-up wow animate__animated animate__fadeIn"><span class="flash"></span>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-2-image-left">
                            <div class="image-box"><img src="../1.HTML_Template_Frontend/assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                            <div class="right-info"><a class="name-job" href="">Nintendo</a><span class="location-small">New York, US</span></div>
                          </div>
                        </div>
                        <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                          <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h4><a href="job-details.blade.php">Products Manager</a></h4>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time"><span>6</span><span> days ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">Status:<span class="text-success">Done</span></span></div>
                            <div class="col-lg-5 col-5 text-end"><a class="btn btn-apply-now" href="job-details.blade.php">View Details</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-12">
                    <div class="card-grid-2 hover-up wow animate__animated animate__fadeIn"><span class="flash"></span>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-2-image-left">
                            <div class="image-box"><img src="../1.HTML_Template_Frontend/assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                            <div class="right-info"><a class="name-job" href="">Periscope</a><span class="location-small">New York, US</span></div>
                          </div>
                        </div>
                        <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                          <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h4><a href="job-details.blade.php">Lead Quality Control QA</a></h4>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time"><span>6</span><span> days ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">Status:<span class="text-success">Done</span></span></div>
                            <div class="col-lg-5 col-5 text-end"><a class="btn btn-apply-now" href="job-details.blade.php">View Details</a></div>
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
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
              <div class="sidebar-border">
                <h5 class="f-18">Overview</h5>
                <div class="sidebar-list-job">
                  <ul>
                    <li>
                      <div class="sidebar-icon-item"><i class="fi-rr-briefcase"></i></div>
                      <div class="sidebar-text-info"><span class="text-description">Experience</span><strong class="small-heading">12 years</strong></div>
                    </li>
                    <li>
                      <div class="sidebar-icon-item"><i class="fi-rr-dollar"></i></div>
                      <div class="sidebar-text-info"><span class="text-description">Expected Salary</span><strong class="small-heading">$26k - $30k</strong></div>
                    </li>
                    <li>
                      <div class="sidebar-icon-item"><i class="fi-rr-marker"></i></div>
                      <div class="sidebar-text-info"><span class="text-description">Language</span><strong class="small-heading">English, German</strong></div>
                    </li>
                    <li>
                      <div class="sidebar-icon-item"><i class="fi-rr-time-fast"></i></div>
                      <div class="sidebar-text-info"><span class="text-description">Education Level</span><strong class="small-heading">Master Degree</strong></div>
                    </li>
                  </ul>
                </div>
                <div class="sidebar-list-job">
                  <ul class="ul-disc">
                    <li>205 North Michigan Avenue, Suite 810 Chicago, 60601, USA</li>
                    <li>Phone: (123) 456-7890</li>
                    <li>Email: contact@Evara.com</li>
                  </ul>
                  <div class="mt-30"><a class="btn btn-send-message" href="page-contact.html">Send Message</a></div>
                </div>
              </div>
              <div class="sidebar-border-bg bg-right"><span class="text-grey">WE ARE</span><span class="text-hiring">HIRING</span>
                <p class="font-xxs color-text-paragraph mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto</p>
                <div class="mt-15"><a class="btn btn-paragraph-2" href="#">Know More</a></div>
              </div>
            </div>
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
    <script src="../1.HTML_Template_Frontend/assets/js/main.js?v=4.1"></script>
  </body>
</html>