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
            <div class="header-logo"><a class="d-flex" href="index.blade.php"><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/template/jobhub-logo.svg"></a></div>
          </div>
          <div class="header-nav">
            <nav class="nav-main-menu">
              <ul class="main-menu">
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
                <li class="has-children"><a href="autres/companies-grid.blade.php">Recruiters</a>
                  <ul class="sub-menu">
                    <li><a href="autres/companies-grid.blade.php">Recruiters</a></li>
                    <li><a href="autres/company-details.blade.php">Company Details</a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="autres/candidates-grid.blade.php">Candidates</a>
                  <ul class="sub-menu">
                    <li><a href="autres/candidates-grid.blade.php">Candidates Grid</a></li>
                    <li><a href="autres/candidate-details.blade.php">Candidate Details</a></li>
                    <li><a href="autres/candidate-profile.blade.php">Candidate Profile</a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="autres/blog-grid.blade.php">Pages</a>
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
                <li class="has-children"><a href="autres/blog-grid.blade.php">Blog</a>
                  <ul class="sub-menu">
                    <li><a href="autres/blog-grid.blade.php">Blog Grid</a></li>
                    <li><a href="autres/blog-grid-2.blade.php">Blog Grid 2</a></li>
                    <li><a href="autres/blog-details.blade.php">Blog Single</a></li>
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
                  <li class="has-children"><a href="autres/companies-grid.blade.php">Recruiters</a>
                    <ul class="sub-menu">
                      <li><a href="autres/companies-grid.blade.php">Recruiters</a></li>
                      <li><a href="autres/company-details.blade.php">Company Details</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="autres/candidates-grid.blade.php">Candidates</a>
                    <ul class="sub-menu">
                      <li><a href="autres/candidates-grid.blade.php">Candidates Grid</a></li>
                      <li><a href="autres/candidate-details.blade.php">Candidate Details</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="autres/blog-grid.blade.php">Pages</a>
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
                  <li class="has-children"><a href="autres/blog-grid.blade.php">Blog</a>
                    <ul class="sub-menu">
                      <li><a href="autres/blog-grid.blade.php">Blog Grid</a></li>
                      <li><a href="autres/blog-grid-2.blade.php">Blog Grid 2</a></li>
                      <li><a href="autres/blog-details.blade.php">Blog Single</a></li>
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
                  <li class="has-children"><a href="autres/companies-grid.blade.php">Recruiters</a>
                    <ul class="sub-menu">
                      <li><a href="autres/companies-grid.blade.php">Recruiters</a></li>
                      <li><a href="autres/company-details.blade.php">Company Details</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="autres/candidates-grid.blade.php">Candidates</a>
                    <ul class="sub-menu">
                      <li><a href="autres/candidates-grid.blade.php">Candidates Grid</a></li>
                      <li><a href="autres/candidate-details.blade.php">Candidate Details</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="autres/blog-grid.blade.php">Pages</a>
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
                  <li class="has-children"><a href="autres/blog-grid.blade.php">Blog</a>
                    <ul class="sub-menu">
                      <li><a href="autres/blog-grid.blade.php">Blog Grid</a></li>
                      <li><a href="autres/blog-grid-2.blade.php">Blog Grid 2</a></li>
                      <li><a href="autres/blog-details.blade.php">Blog Single</a></li>
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
      <section class="section-box mb-70">
        <div class="banner-hero hero-1 banner-homepage6">
          <div class="banner-inner">
            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <div class="block-banner text-center pb-40 pt-40">
                  <h1 class="heading-banner wow animate__animated animate__fadeInUp">There Are <span class="color-brand-2">102,256 </span>Postings<br class="d-none d-lg-block">Here For you!</h1>
                  <p class="font-lg color-text-paragraph mt-20">Find Jobs, Employment & Career Opportunities</p>
                </div>
              </div>
            </div>
            <div class="box-search-2">
              <div class="block-banner form-none-shadow">
                <div class="form-find wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                  <form>
                    <input class="form-input input-keysearch mr-10" type="text" placeholder="Your keyword... ">
                    <select class="form-input mr-10 select-active">
                      <option value="">Location</option>
                      <option value="AX">Aland Islands</option>
                      <option value="AF">Afghanistan</option>
                      <option value="AL">Albania</option>
                      <option value="DZ">Algeria</option>
                      <option value="AD">Andorra</option>
                      <option value="AO">Angola</option>
                      <option value="AI">Anguilla</option>
                      <option value="AQ">Antarctica</option>
                      <option value="AG">Antigua and Barbuda</option>
                      <option value="AR">Argentina</option>
                      <option value="AM">Armenia</option>
                      <option value="AW">Aruba</option>
                      <option value="AU">Australia</option>
                      <option value="AT">Austria</option>
                      <option value="AZ">Azerbaijan</option>
                      <option value="BS">Bahamas</option>
                      <option value="BH">Bahrain</option>
                      <option value="BD">Bangladesh</option>
                      <option value="BB">Barbados</option>
                      <option value="BY">Belarus</option>
                      <option value="PW">Belau</option>
                      <option value="BE">Belgium</option>
                      <option value="BZ">Belize</option>
                      <option value="BJ">Benin</option>
                      <option value="BM">Bermuda</option>
                      <option value="BT">Bhutan</option>
                      <option value="BO">Bolivia</option>
                      <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                      <option value="BA">Bosnia and Herzegovina</option>
                      <option value="BW">Botswana</option>
                      <option value="BV">Bouvet Island</option>
                      <option value="BR">Brazil</option>
                      <option value="IO">British Indian Ocean Territory</option>
                      <option value="VG">British Virgin Islands</option>
                      <option value="BN">Brunei</option>
                      <option value="BG">Bulgaria</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi</option>
                      <option value="KH">Cambodia</option>
                      <option value="CM">Cameroon</option>
                      <option value="CA">Canada</option>
                      <option value="CV">Cape Verde</option>
                      <option value="KY">Cayman Islands</option>
                      <option value="CF">Central African Republic</option>
                      <option value="TD">Chad</option>
                      <option value="CL">Chile</option>
                      <option value="CN">China</option>
                      <option value="CX">Christmas Island</option>
                      <option value="CC">Cocos (Keeling) Islands</option>
                      <option value="CO">Colombia</option>
                      <option value="KM">Comoros</option>
                      <option value="CG">Congo (Brazzaville)</option>
                      <option value="CD">Congo (Kinshasa)</option>
                      <option value="CK">Cook Islands</option>
                      <option value="CR">Costa Rica</option>
                      <option value="HR">Croatia</option>
                      <option value="CU">Cuba</option>
                      <option value="CW">Cura&Ccedil;ao</option>
                      <option value="CY">Cyprus</option>
                      <option value="CZ">Czech Republic</option>
                      <option value="DK">Denmark</option>
                      <option value="DJ">Djibouti</option>
                      <option value="DM">Dominica</option>
                      <option value="DO">Dominican Republic</option>
                      <option value="EC">Ecuador</option>
                      <option value="EG">Egypt</option>
                      <option value="SV">El Salvador</option>
                      <option value="GQ">Equatorial Guinea</option>
                      <option value="ER">Eritrea</option>
                      <option value="EE">Estonia</option>
                      <option value="ET">Ethiopia</option>
                      <option value="FK">Falkland Islands</option>
                      <option value="FO">Faroe Islands</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finland</option>
                      <option value="FR">France</option>
                      <option value="GF">French Guiana</option>
                      <option value="PF">French Polynesia</option>
                      <option value="TF">French Southern Territories</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambia</option>
                      <option value="GE">Georgia</option>
                      <option value="DE">Germany</option>
                      <option value="GH">Ghana</option>
                      <option value="GI">Gibraltar</option>
                      <option value="GR">Greece</option>
                      <option value="GL">Greenland</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadeloupe</option>
                      <option value="GT">Guatemala</option>
                      <option value="GG">Guernsey</option>
                      <option value="GN">Guinea</option>
                      <option value="GW">Guinea-Bissau</option>
                      <option value="GY">Guyana</option>
                      <option value="HT">Haiti</option>
                      <option value="HM">Heard Island and McDonald Islands</option>
                      <option value="HN">Honduras</option>
                      <option value="HK">Hong Kong</option>
                      <option value="HU">Hungary</option>
                      <option value="IS">Iceland</option>
                      <option value="IN">India</option>
                      <option value="ID">Indonesia</option>
                      <option value="IR">Iran</option>
                      <option value="IQ">Iraq</option>
                      <option value="IM">Isle of Man</option>
                      <option value="IL">Israel</option>
                      <option value="IT">Italy</option>
                      <option value="CI">Ivory Coast</option>
                      <option value="JM">Jamaica</option>
                      <option value="JP">Japan</option>
                      <option value="JE">Jersey</option>
                      <option value="JO">Jordan</option>
                      <option value="KZ">Kazakhstan</option>
                      <option value="KE">Kenya</option>
                      <option value="KI">Kiribati</option>
                      <option value="KW">Kuwait</option>
                      <option value="KG">Kyrgyzstan</option>
                      <option value="LA">Laos</option>
                      <option value="LV">Latvia</option>
                      <option value="LB">Lebanon</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberia</option>
                      <option value="LY">Libya</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LT">Lithuania</option>
                      <option value="LU">Luxembourg</option>
                      <option value="MO">Macao S.A.R., China</option>
                      <option value="MK">Macedonia</option>
                      <option value="MG">Madagascar</option>
                      <option value="MW">Malawi</option>
                      <option value="MY">Malaysia</option>
                      <option value="MV">Maldives</option>
                      <option value="ML">Mali</option>
                      <option value="MT">Malta</option>
                      <option value="MH">Marshall Islands</option>
                      <option value="MQ">Martinique</option>
                      <option value="MR">Mauritania</option>
                      <option value="MU">Mauritius</option>
                      <option value="YT">Mayotte</option>
                      <option value="MX">Mexico</option>
                      <option value="FM">Micronesia</option>
                      <option value="MD">Moldova</option>
                      <option value="MC">Monaco</option>
                      <option value="MN">Mongolia</option>
                      <option value="ME">Montenegro</option>
                      <option value="MS">Montserrat</option>
                      <option value="MA">Morocco</option>
                      <option value="MZ">Mozambique</option>
                      <option value="MM">Myanmar</option>
                      <option value="NA">Namibia</option>
                      <option value="NR">Nauru</option>
                      <option value="NP">Nepal</option>
                      <option value="NL">Netherlands</option>
                      <option value="AN">Netherlands Antilles</option>
                      <option value="NC">New Caledonia</option>
                      <option value="NZ">New Zealand</option>
                      <option value="NI">Nicaragua</option>
                      <option value="NE">Niger</option>
                      <option value="NG">Nigeria</option>
                      <option value="NU">Niue</option>
                      <option value="NF">Norfolk Island</option>
                      <option value="KP">North Korea</option>
                      <option value="NO">Norway</option>
                      <option value="OM">Oman</option>
                      <option value="PK">Pakistan</option>
                      <option value="PS">Palestinian Territory</option>
                      <option value="PA">Panama</option>
                      <option value="PG">Papua New Guinea</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru</option>
                      <option value="PH">Philippines</option>
                      <option value="PN">Pitcairn</option>
                      <option value="PL">Poland</option>
                      <option value="PT">Portugal</option>
                      <option value="QA">Qatar</option>
                      <option value="IE">Republic of Ireland</option>
                      <option value="RE">Reunion</option>
                      <option value="RO">Romania</option>
                      <option value="RU">Russia</option>
                      <option value="RW">Rwanda</option>
                      <option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option>
                      <option value="BL">Saint Barth&eacute;lemy</option>
                      <option value="SH">Saint Helena</option>
                      <option value="KN">Saint Kitts and Nevis</option>
                      <option value="LC">Saint Lucia</option>
                      <option value="SX">Saint Martin (Dutch part)</option>
                      <option value="MF">Saint Martin (French part)</option>
                      <option value="PM">Saint Pierre and Miquelon</option>
                      <option value="VC">Saint Vincent and the Grenadines</option>
                      <option value="SM">San Marino</option>
                      <option value="SA">Saudi Arabia</option>
                      <option value="SN">Senegal</option>
                      <option value="RS">Serbia</option>
                      <option value="SC">Seychelles</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SG">Singapore</option>
                      <option value="SK">Slovakia</option>
                      <option value="SI">Slovenia</option>
                      <option value="SB">Solomon Islands</option>
                      <option value="SO">Somalia</option>
                      <option value="ZA">South Africa</option>
                      <option value="GS">South Georgia/Sandwich Islands</option>
                      <option value="KR">South Korea</option>
                      <option value="SS">South Sudan</option>
                      <option value="ES">Spain</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SD">Sudan</option>
                      <option value="SR">Suriname</option>
                      <option value="SJ">Svalbard and Jan Mayen</option>
                      <option value="SZ">Swaziland</option>
                      <option value="SE">Sweden</option>
                      <option value="CH">Switzerland</option>
                      <option value="SY">Syria</option>
                      <option value="TW">Taiwan</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TZ">Tanzania</option>
                      <option value="TH">Thailand</option>
                      <option value="TL">Timor-Leste</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TO">Tonga</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TN">Tunisia</option>
                      <option value="TR">Turkey</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="TV">Tuvalu</option>
                      <option value="UG">Uganda</option>
                      <option value="UA">Ukraine</option>
                      <option value="AE">United Arab Emirates</option>
                      <option value="GB">United Kingdom (UK)</option>
                      <option value="US">USA (US)</option>
                      <option value="UY">Uruguay</option>
                      <option value="UZ">Uzbekistan</option>
                      <option value="VU">Vanuatu</option>
                      <option value="VA">Vatican</option>
                      <option value="VE">Venezuela</option>
                      <option value="VN">Vietnam</option>
                      <option value="WF">Wallis and Futuna</option>
                      <option value="EH">Western Sahara</option>
                      <option value="WS">Western Samoa</option>
                      <option value="YE">Yemen</option>
                      <option value="ZM">Zambia</option>
                      <option value="ZW">Zimbabwe</option>
                    </select>
                    <div class="box-industry">
                      <select class="form-input mr-10 select-active input-industry">
                        <option value="0">Industry</option>
                        <option value="1">Software</option>
                        <option value="2">Finance</option>
                        <option value="3">Recruting</option>
                        <option value="4">Management</option>
                        <option value="5">Advertising</option>
                        <option value="6">Development</option>
                      </select>
                    </div>
                    <button class="btn btn-default btn-find font-sm">Search</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="text-center">
              <div class="list-tags-banner list-tags-banner-2 mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><strong>Popular Searches: </strong> <a href="#">Designer</a>, <a href="#">Web</a>, <a href="#">IOS</a>, <a href="#">Developer</a>, <a href="#">PHP</a>, <a href="#">Senior</a>, <a href="#">Engineer</a></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box">
        <div class="container">
          <div class="d-flex flex-wrap flex-lg-nowrap">
            <div class="block-banner-1">
              <div class="block-image-1"> <img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage6/img1.png" alt="jobBox"></div>
              <div class="block-image-2"> <img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage6/img2.png" alt="jobBox"></div>
            </div>
            <div class="block-banner-2"> 
              <div class="block-image-3"><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage6/img3.png" alt="jobBox"></div>
            </div>
            <div class="block-banner-3">
              <div class="block-image-4"> <img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage6/img4.png" alt="jobBox"></div>
              <div class="block-image-5"> <img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage6/img5.png" alt="jobBox"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-80">
        <div class="section-box wow animate__animated animate__fadeIn">
          <div class="container">
            <div class="text-center">
              <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Browse by category</h2>
              <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Find the job that&rsquo;s perfect for you. about 800+ new jobs everyday</p>
            </div>
            <div class="box-swiper mt-50">
              <div class="swiper-container swiper-group-5 swiper">
                <div class="swiper-wrapper pb-70 pt-5">
                  <div class="swiper-slide hover-up"><a href="jobs-list.html">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/marketing.svg"></div>
                        <div class="text-info-right">
                          <h4>Marketing &amp; Sale</h4>
                          <p class="font-xs">1526<span> Jobs Available</span></p>
                        </div>
                      </div></a><a href="jobs-grid.html">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/customer.svg"></div>
                        <div class="text-info-right">
                          <h4>Customer Help</h4>
                          <p class="font-xs">185<span> Jobs Available</span></p>
                        </div>
                      </div></a>
                  </div>
                  <div class="swiper-slide hover-up"><a href="jobs-grid.html">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/finance.svg"></div>
                        <div class="text-info-right">
                          <h4>Finance</h4>
                          <p class="font-xs">168<span> Jobs Available</span></p>
                        </div>
                      </div></a><a href="jobs-list.html">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/lightning.svg"></div>
                        <div class="text-info-right">
                          <h4>Software</h4>
                          <p class="font-xs">1856<span> Jobs Available</span></p>
                        </div>
                      </div></a>
                  </div>
                  <div class="swiper-slide hover-up"><a href="jobs-grid.html">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/human.svg"></div>
                        <div class="text-info-right">
                          <h4>Human Resource</h4>
                          <p class="font-xs">165<span> Jobs Available</span></p>
                        </div>
                      </div></a><a href="jobs-grid.html">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/management.svg"></div>
                        <div class="text-info-right">
                          <h4>Management</h4>
                          <p class="font-xs">965<span> Jobs Available</span></p>
                        </div>
                      </div></a>
                  </div>
                  <div class="swiper-slide hover-up"><a href="jobs-list.html">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/retail.svg"></div>
                        <div class="text-info-right">
                          <h4>Retail &amp; Products</h4>
                          <p class="font-xs">563<span> Jobs Available</span></p>
                        </div>
                      </div></a><a href="jobs-grid.html">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/security.svg"></div>
                        <div class="text-info-right">
                          <h4>Security Analyst</h4>
                          <p class="font-xs">254<span> Jobs Available</span></p>
                        </div>
                      </div></a>
                  </div>
                  <div class="swiper-slide hover-up"><a href="jobs-grid.html">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/content.svg"></div>
                        <div class="text-info-right">
                          <h4>Content Writer</h4>
                          <p class="font-xs">142<span> Jobs Available</span></p>
                        </div>
                      </div></a><a href="jobs-list.html">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/research.svg"></div>
                        <div class="text-info-right">
                          <h4>Market Research</h4>
                          <p class="font-xs">532<span> Jobs Available</span></p>
                        </div>
                      </div></a>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-50 mb-30 bg-border-3 pt-100 pb-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-6"><img class="bdrd-10" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage5/img-profile.png" alt="jobBox"></div>
            <div class="col-lg-6">
              <div class="pl-30">
                <h5 class="color-brand-2 mb-15 mt-15">Create Profile</h5>
                <h2 class="color-brand-1 mt-0 mb-15">Create Your Personal Account Profile</h2>
                <p class="font-lg color-text-paragraph-2">Work Profile is a personality assessment that measures an individual's work personality through their workplace traits, social and emotional traits; as well as the values and aspirations that drive them forward.</p>
                <div class="mt-20"><a class="btn btn-default">Create Profile</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-50">
        <div class="section-box wow animate__animated animate__fadeIn">
          <div class="container">
            <div class="text-start">
              <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Latest Jobs Post</h2>
              <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Explore the different types of available jobs to apply<br class="d-none d-lg-block">discover which is right for you.</p>
              <div class="list-tabs list-tabs-2 mt-30">
                <ul class="nav nav-tabs" role="tablist">
                  <li><a class="active" id="nav-tab-job-1" href="#tab-job-1" data-bs-toggle="tab" role="tab" aria-controls="tab-job-1" aria-selected="true"><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/management.svg" alt="jobBox"> Management</a></li>
                  <li><a id="nav-tab-job-2" href="#tab-job-2" data-bs-toggle="tab" role="tab" aria-controls="tab-job-2" aria-selected="false"><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/marketing.svg" alt="jobBox"> Marketing &amp; Sale</a></li>
                  <li><a id="nav-tab-job-3" href="#tab-job-3" data-bs-toggle="tab" role="tab" aria-controls="tab-job-3" aria-selected="false"><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/finance.svg" alt="jobBox"> Finance</a></li>
                  <li><a id="nav-tab-job-4" href="#tab-job-4" data-bs-toggle="tab" role="tab" aria-controls="tab-job-4" aria-selected="false"><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/human.svg" alt="jobBox"> Human Resource</a></li>
                  <li><a id="nav-tab-job-5" href="#tab-job-5" data-bs-toggle="tab" role="tab" aria-controls="tab-job-5" aria-selected="false"><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/retail.svg" alt="jobBox"> Retail &amp; Products</a></li>
                  <li><a id="nav-tab-job-6" href="#tab-job-6" data-bs-toggle="tab" role="tab" aria-controls="tab-job-6" aria-selected="false"><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/content.svg" alt="jobBox"> Content Writer</a></li>
                  <li><a id="nav-tab-job-7" href="#tab-job-7" data-bs-toggle="tab" role="tab" aria-controls="tab-job-7" aria-selected="false"><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/content.svg" alt="jobBox"> Funiture Design</a></li>
                  <li><a id="nav-tab-job-8" href="#tab-job-8" data-bs-toggle="tab" role="tab" aria-controls="tab-job-8" aria-selected="false"><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage1/content.svg" alt="jobBox"> Other</a></li>
                </ul>
              </div>
            </div>
            <div class="mt-50">
              <div class="tab-content" id="myTabContent-1">
                <div class="tab-pane fade show active" id="tab-job-1" role="tabpanel" aria-labelledby="tab-job-1">
                  <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img1.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Web Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img2.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Digital Marketing Manager</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img3.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Web Designer/Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img4.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Full Stack Engineer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img5.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Frontend Developer Full time</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img6.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Mobile Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more              </a></div>
                </div>
                <div class="tab-pane fade" id="tab-job-2" role="tabpanel" aria-labelledby="tab-job-2">
                  <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img1.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Web Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img2.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Digital Marketing Manager</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img3.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Web Designer/Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img4.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Full Stack Engineer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img5.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Frontend Developer Full time</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img6.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Mobile Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS                        </a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more </a></div>
                </div>
                <div class="tab-pane fade" id="tab-job-3" role="tabpanel" aria-labelledby="tab-job-3">
                  <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img3.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Web Designer/Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img4.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Full Stack Engineer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img5.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Frontend Developer Full time</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img6.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Mobile Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS  </a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img1.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Web Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img2.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Digital Marketing Manager</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word                  </a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more </a></div>
                </div>
                <div class="tab-pane fade" id="tab-job-4" role="tabpanel" aria-labelledby="tab-job-4">
                  <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img3.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Web Designer/Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img4.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Full Stack Engineer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img1.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Web Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img2.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Digital Marketing Manager</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img5.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Frontend Developer Full time</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img6.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Mobile Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS   </a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more                      </a></div>
                </div>
                <div class="tab-pane fade" id="tab-job-5" role="tabpanel" aria-labelledby="tab-job-5">
                  <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img3.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Web Designer/Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img1.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Web Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img2.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Digital Marketing Manager</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img4.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Full Stack Engineer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img5.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Frontend Developer Full time</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img6.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Mobile Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS      </a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more                   </a></div>
                </div>
                <div class="tab-pane fade" id="tab-job-6" role="tabpanel" aria-labelledby="tab-job-6">
                  <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img4.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Full Stack Engineer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img1.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Web Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img2.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Digital Marketing Manager</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img3.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Web Designer/Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img5.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Frontend Developer Full time</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img6.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Mobile Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more </a></div>
                </div>
                <div class="tab-pane fade" id="tab-job-7" role="tabpanel" aria-labelledby="tab-job-7">
                  <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img4.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Full Stack Engineer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img1.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Web Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img2.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Digital Marketing Manager</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img3.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Web Designer/Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img5.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Frontend Developer Full time</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img6.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Mobile Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more </a></div>
                </div>
                <div class="tab-pane fade" id="tab-job-8" role="tabpanel" aria-labelledby="tab-job-8">
                  <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img4.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Full Stack Engineer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img1.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Web Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img2.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Digital Marketing Manager</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img3.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Web Designer/Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img5.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">Frontend Developer Full time</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 grid-bd-16 hover-up">
                        <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                          <div class="image-box">
                            <figure><img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage2/img6.png" alt="jobBox"></figure>
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h5><a href="job-details.blade.php">React Native Mobile Developer</a></h5>
                          <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS     </a>
                              </div>
                              <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                            </div>
                          </div>
                          <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center mt-10"><a class="btn btn-brand-1 btn-icon-more hover-up">See more                    </a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box bg-15 pt-50 pb-50 mt-80">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center mb-30"><img class="img-job-search mt-20" src="../1.HTML_Template_Frontend/assets/imgs/page/homepage3/img-job-search.png" alt="jobBox"></div>
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
              <h2 class="mb-40">Job search for people passionate about startup</h2>
              <div class="box-checkbox mb-30">
                <h6>Create an account</h6>
                <p class="font-md color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec justo a quam varius maximus. Maecenas sodales tortor quis tincidunt commodo.</p>
              </div>
              <div class="box-checkbox mb-30">
                <h6>Search for Jobs</h6>
                <p class="font-md color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec justo a quam varius maximus. Maecenas sodales tortor quis tincidunt commodo.</p>
              </div>
              <div class="box-checkbox mb-30">
                <h6>Save &amp; Apply</h6>
                <p class="font-md color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec justo a quam varius maximus. Maecenas sodales tortor quis tincidunt commodo.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="mt-100"></div>
      <section class="section-box mt-0">
        <div class="section-box wow animate__animated animate__fadeIn">
          <div class="container">
            <div class="text-center">
              <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">See Some Words</h2>
              <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Thousands of employee get their ideal jobs<br class="d-none d-lg-block">and feed back to us!</p>
            </div>
            <div class="box-swiper mt-50">
              <div class="swiper-container swiper-group-4-border swiper">
                <div class="swiper-wrapper pb-70 pt-5">
                  <div class="swiper-slide hover-up">
                    <div class="card-review-1"> 
                      <div class="image-review"> <img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage4/user.png" alt="jobBox"></div>
                      <div class="review-info">
                        <div class="review-name"> 
                          <h5>Ellis Kim</h5><span class="font-xs">Digital Artist</span>
                        </div>
                        <div class="review-rating"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></div>
                        <div class="review-comment">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid unt. Labore et dolore nostrud temp exercitation.</div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide hover-up">
                    <div class="card-review-1"> 
                      <div class="image-review"> <img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage4/user2.png" alt="jobBox"></div>
                      <div class="review-info">
                        <div class="review-name"> 
                          <h5>John Smith</h5><span class="font-xs">Product designer</span>
                        </div>
                        <div class="review-rating"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></div>
                        <div class="review-comment">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid unt. Labore et dolore nostrud temp exercitation.</div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide hover-up">
                    <div class="card-review-1"> 
                      <div class="image-review"> <img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage4/user3.png" alt="jobBox"></div>
                      <div class="review-info">
                        <div class="review-name"> 
                          <h5>Sayen Ahmod</h5><span class="font-xs">Developer</span>
                        </div>
                        <div class="review-rating"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></div>
                        <div class="review-comment">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid unt. Labore et dolore nostrud temp exercitation.</div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide hover-up">
                    <div class="card-review-1"> 
                      <div class="image-review"> <img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage4/user4.png" alt="jobBox"></div>
                      <div class="review-info">
                        <div class="review-name"> 
                          <h5>Tayla Swef</h5><span class="font-xs">Graphic designer</span>
                        </div>
                        <div class="review-rating"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></div>
                        <div class="review-comment">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid unt. Labore et dolore nostrud temp exercitation.</div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide hover-up">
                    <div class="card-review-1"> 
                      <div class="image-review"> <img src="../1.HTML_Template_Frontend/assets/imgs/page/homepage4/user.png" alt="jobBox"></div>
                      <div class="review-info">
                        <div class="review-name"> 
                          <h5>Ellis Kim</h5><span class="font-xs">Digital Artist</span>
                        </div>
                        <div class="review-rating"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"> <img src="../1.HTML_Template_Frontend/assets/imgs/template/icons/star.svg" alt="jobBox"></div>
                        <div class="review-comment">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid unt. Labore et dolore nostrud temp exercitation.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination swiper-pagination-style-border"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-70 mb-40">
        <div class="container">
          <div class="text-start">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">How It Works</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Just via some simple steps, you will find your ideal candidates you’r looking for!</p>
          </div>
          <div class="mt-70"> 
            <div class="row"> 
              <div class="col-lg-4">
                <div class="box-step step-1">
                  <h1 class="number-element">1</h1>
                  <h4 class="mb-20">Register an<br class="d-none d-lg-block">account to start</h4>
                  <p class="font-lg color-text-paragraph-2">Lorem ipsum dolor sit amet,<br class="d-none d-lg-block">consectetur adipisicing elit, sed do </p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box-step step-2">
                  <h1 class="number-element">2</h1>
                  <h4 class="mb-20">Explore over<br class="d-none d-lg-block">thousands of resumes</h4>
                  <p class="font-lg color-text-paragraph-2">Lorem ipsum dolor sit amet,<br class="d-none d-lg-block">consectetur adipisicing elit, sed do </p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box-step">
                  <h1 class="number-element">3</h1>
                  <h4 class="mb-20">Find the most<br class="d-none d-lg-block">suitable candidate</h4>
                  <p class="font-lg color-text-paragraph-2">Lorem ipsum dolor sit amet,<br class="d-none d-lg-block">consectetur adipisicing elit, sed do </p>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-50 text-center"><a class="btn btn-default">Get Started</a></div>
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
                        <div class="tags mb-15"><a class="btn btn-tag" href="autres/blog-grid.blade.php">News</a></div>
                        <h5><a href="autres/blog-details.blade.php">21 Job Interview Tips: How To Make a Great Impression</a></h5>
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
                        <div class="tags mb-15"><a class="btn btn-tag" href="autres/blog-grid.blade.php">Events</a></div>
                        <h5><a href="autres/blog-details.blade.php">39 Strengths and Weaknesses To Discuss in a Job Interview</a></h5>
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
                        <div class="tags mb-15"><a class="btn btn-tag" href="autres/blog-grid.blade.php">News</a></div>
                        <h5><a href="autres/blog-details.blade.php">Interview Question: Why Dont You Have a Degree?</a></h5>
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
            <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="autres/blog-grid.blade.php">Load More Posts</a></div>
          </div>
        </div>
      </section>
      <section class="section-box mt-50 mb-20">
        <div class="container">
          <div class="box-newsletter box-newsletter-3">
            <div class="row">
              <div class="col-xl-12 text-center">
                <div class="d-inline-block">
                  <h2 class="color-white mt-30">Subscribe our newsletter</h2>
                  <p class="mt-10 font-lg color-white">New Things Will Always Update Regularl</p>
                  <div class="box-form-newsletter mt-30">
                    <form class="form-newsletter">
                      <input class="input-newsletter" type="text" value="" placeholder="Enter your email here">
                      <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="../1.HTML_Template_Frontend/assets/js/plugins/counterup.js"></script>
    </main>
    <footer class="footer mt-50">
      <div class="container">
        <div class="row">
          <div class="footer-col-1 col-md-3 col-sm-12"><a href="index.blade.php"><img alt="jobBox" src="../1.HTML_Template_Frontend/assets/imgs/template/jobhub-logo.svg"></a>
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
    <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/waypoints.js')}}"></script>
    <script src="{{asset('assets/js/plugins/wow.js')}}"></script>
    <script src="{{asset('assets/js/plugins/magnific-popup.js')}}"></script>
    <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/isotope.js')}}"></script>
    <script src="{{asset('assets/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/counterup.js')}}"></script>
    <script src="{{asset('assets/js/main.js?v=4.1')}}"></script>
  </body>
</html>