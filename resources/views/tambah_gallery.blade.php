@extends('welcome')
@section('content')
{{-- <center>
        <div class="container-fluid">
            <form action="" method="post">
                @csrf
                <table>
                    <tr>
                        <td>
                            <label for="name">Username</label>
                        </td>
                        <td>
                            <input type="text" name="name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password</label>
                        </td>
                        <td>
                            <input type="password" name="password" id="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button class="btn btn-primary">
                                Login
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <div>
            Belum punya akun? <a href="register">Daftar</a>
        </div>
</center> --}}


{{-- <!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>

      <form action="" method="post">
            @csrf
            <input required type="text" type="text" name="name" placeholder="Enter your email">
            <input required type="password" type="password" name="password" id="password" placeholder="Enter your password">
            <button class="btn btn-info" type="submit" style="font-size:20px; color: #ffffff;; padding:10px 145px; border:1px solid #b3b3b3;">
                Login
            </button>
      </form>

      <div class="signup">
            <span class="signup" style="padding: 10px">
                Don't have an account?
                <a href="register">SignUp</a>
            </span>
      </div>
    </div> --}}



    {{-- <div class="registration form">
      <header>Signup</header>
      <form action="#">
        <input type="text" placeholder="Enter your email">
        <input type="password" placeholder="Create a password">
        <input type="password" placeholder="Confirm your password">
        <input type="button" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div> --}}



  {{-- </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>

    <style>
        /*--------------------------------------------------------------
	Common
--------------------------------------------------------------*/
html {
  overflow-y: scroll;
  overflow-x: hidden;
  -ms-overflow-style: scrollbar;
}

body {
  background: #fff;
  font: 400 12px/1.8 "Open Sans", sans-serif;
  color: #666;
  -webkit-font-smoothing: antialiased;
}

img {
  max-width: 100%;
  height: auto;
}

iframe {
  border: 0;
}

.align-center {
  text-align: center;
}

.align-left {
  text-align: left !important;
}

.position-relative {
  position: relative;
}

.leftauto {
  right: 0 !important;
  left: auto !important;
}

/* Transition elsements */
a,
.btn {
  transition: all 0.125s ease-in-out 0s;
}

.client-logo,
.gallery-caption,
.gallery-image:after,
.gallery-image img,
.price-table,
.team-detail,
.team-image:after,
.work-caption,
.work-image > img,
.work-image:after,
.post-thumbnail,
.post-video,
.post-images-slider {
  transition: all 0.3s ease-in-out 0s;
}

/* Reset box-shadow */
.btn,
.well,
.panel,
.progress,
.form-control,
.form-control:hover,
.form-control:focus,
.navbar-custom .dropdown-menu {
  box-shadow: none;
}

/* Reset border-radius */
.well,
.label,
.alert,
.progress,
.form-control,
.modal-content,
.panel-heading,
.panel-group .panel,
.nav-tabs > li > a,
.nav-pills > li > a {
  border-radius: 2px;
}

.pr-remove {
  /*vertical-align: middle !important;*/
  text-align: center;
}

.examples {
  border-radius: 2px;
  padding: 7px 5px;
  margin: 0 0 40px;
}

.examples.bg-dark {
  background: #333;
  border: 0;
}

.et-icons .box1 {
  border: 1px solid #e5e5e5;
  display: block;
  width: 25%;
  float: left;
  padding: 0;
  font-size: 13px;
  margin: -1px 0 0 -1px;
}

.et-icons .box1 > span {
  display: inline-block;
  border-right: 1px solid #e5e5e5;
  min-width: 60px;
  min-height: 60px;
  text-align: center;
  line-height: 60px;
  font-size: 28px;
  margin-right: 5px;
}

.fa-icons > div {
  padding: 0;
  border: 1px solid #e5e5e5;
  margin: -1px 0 0 -1px;
  font-size: 13px;
}

.fa-icons > div > i {
  display: inline-block;
  margin-right: 5px;
  min-width: 40px;
  min-height: 40px;
  border-right: 1px solid #f1f1f1;
  line-height: 40px;
  text-align: center;
  font-size: 14px;
}

.help-block ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

/* Sections */
.navbar-custom + .main {
  margin-top: 50px;
}

.main {
  position: relative;
  background-color: #fff;
  z-index: 1;
}

.module,
.module-small {
  position: relative;
  padding: 140px 0;
  background-repeat: no-repeat;
  background-position: 50% 50%;
  background-size: cover;
}

/* Module header */
.module-small {
  padding: 70px 0;
}

.module-extra-small {
  padding: 25px 0px;
}

.module-medium {
  padding: 75px 0px;
}

.holder-w {
  position: relative;
  display: table-cell;
  vertical-align: middle;
  height: 1px;
  width: 50%;
}

.holder-w:before {
  border-top: 1px solid #eaeaea;
  position: relative;
  display: block;
  content: "";
  top: 1px;
  height: 1px;
  width: 100%;
}

/* Sections dividers */
.divider-w {
  border-top: 1px solid #eaeaea;
  margin: 0;
}

.divider-d {
  border-top: 1px solid #202020;
  margin: 0;
}

/* Half-image */
.side-image {
  position: absolute;
  height: 100%;
  background-repeat: no-repeat;
  background-position: 50% 50%;
  background-size: cover;
}

.side-image-text {
  background: #fff;
  border-top: 1px solid #e5e5e5;
  border-bottom: 1px solid #e5e5e5;
  padding: 140px 60px 140px;
}

/* Dark background */
.bg-dark,
.bg-dark-30,
.bg-dark-60,
.bg-dark-90,
.bg-dark .module-title,
.bg-dark-30 .module-title,
.bg-dark-60 .module-title,
.bg-dark-90 .module-title,
.bg-dark .module-subtitle,
.bg-dark-30 .module-subtitle,
.bg-dark-60 .module-subtitle,
.bg-dark-90 .module-subtitle,
.bg-dark .alt-module-subtitle h5,
.bg-dark-30 .alt-module-subtitle h5,
.bg-dark-60 .alt-module-subtitle h5,
.bg-dark-90 .alt-module-subtitle h5 {
  color: #fff;
}

.bg-dark {
  background: #111;
}

.bg-dark-30:before {
  position: absolute;
  background: rgba(2, 2, 2, 0.4);
  content: " ";
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}

.bg-dark-60:before {
  position: absolute;
  background: rgba(34, 34, 34, 0.8);
  content: " ";
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}

.bg-dark-90:before {
  position: absolute;
  background: rgba(34, 34, 34, 0.9);
  content: " ";
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}

.bg-gradient:before {
  position: absolute;
  background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgICA8c3RvcCBvZmZzZXQ9Ijk1JSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwLjk1Ii8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwMDAwMDAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
  /* FF3.6+ */
  /* Chrome,Safari4+ */
  /* Chrome10+,Safari5.1+ */
  /* Opera 11.10+ */
  /* IE10+ */
  background: linear-gradient(to bottom, rgba(40, 115, 113, 0.57) 25%, rgba(115, 54, 31, 0.67) 75%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#000000',GradientType=0 );
  /* IE6-8 */
  content: " ";
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}

.bg-light {
  background: #f6f6f6;
}

.parallax-bg {
  background-attachment: fixed;
  background-size: cover;
}

/* Vertical margin, padding */
.p-0 {
  padding: 0 !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pt-10 {
  padding-top: 10px !important;
}

.pt-20 {
  padding-top: 20px !important;
}

.pt-30 {
  padding-top: 30px !important;
}

.pt-40 {
  padding-top: 40px !important;
}

.pt-50 {
  padding-top: 50px !important;
}

.pt-140 {
  padding-top: 140px !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pb-10 {
  padding-bottom: 10px !important;
}

.pb-20 {
  padding-bottom: 20px !important;
}

.pb-30 {
  padding-bottom: 30px !important;
}

.pb-40 {
  padding-bottom: 40px !important;
}

.pb-50 {
  padding-bottom: 50px !important;
}

.pb-140 {
  padding-bottom: 140px !important;
}

.m-0 {
  margin: 0 !important;
}

.mt-0 {
  margin-top: 0 !important;
}

.mt-10 {
  margin-top: 10px !important;
}

.mt-20 {
  margin-top: 20px !important;
}

.mt-30 {
  margin-top: 30px !important;
}

.mt-40 {
  margin-top: 40px !important;
}

.mt-50 {
  margin-top: 50px !important;
}

.mt-60 {
  margin-top: 60px !important;
}

.mt-70 {
  margin-top: 70px !important;
}

.mt-80 {
  margin-top: 80px !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mb-10 {
  margin-bottom: 10px !important;
}

.mb-20 {
  margin-bottom: 20px !important;
}

.mb-30 {
  margin-bottom: 30px !important;
}

.mb-40 {
  margin-bottom: 40px !important;
}

.mb-50 {
  margin-bottom: 50px !important;
}

.mb-60 {
  margin-bottom: 60px !important;
}

.mb-70 {
  margin-bottom: 70px !important;
}

.mb-80 {
  margin-bottom: 80px !important;
}

@media only screen and (max-width: 991px) {
  .mt-sm-0 {
    margin-top: 0 !important;
  }
  .mt-sm-10 {
    margin-top: 10px !important;
  }
  .mt-sm-20 {
    margin-top: 20px !important;
  }
  .mt-sm-30 {
    margin-top: 30px !important;
  }
  .mt-sm-40 {
    margin-top: 40px !important;
  }
  .mt-sm-50 {
    margin-top: 50px !important;
  }
  .mt-sm-60 {
    margin-top: 60px !important;
  }
  .mt-sm-70 {
    margin-top: 70px !important;
  }
  .mt-sm-80 {
    margin-top: 80px !important;
  }
  .mb-sm-0 {
    margin-bottom: 0 !important;
  }
  .mb-sm-10 {
    margin-bottom: 10px !important;
  }
  .mb-sm-20 {
    margin-bottom: 20px !important;
  }
  .mb-sm-30 {
    margin-bottom: 30px !important;
  }
  .mb-sm-40 {
    margin-bottom: 40px !important;
  }
  .mb-sm-50 {
    margin-bottom: 50px !important;
  }
  .mb-sm-60 {
    margin-bottom: 60px !important;
  }
  .mb-sm-70 {
    margin-bottom: 70px !important;
  }
  .mb-sm-80 {
    margin-bottom: 80px !important;
  }
}

@media only screen and (max-width: 767px) {
  .mt-xs-0 {
    margin-top: 0 !important;
  }
  .mt-xs-10 {
    margin-top: 10px !important;
  }
  .mt-xs-20 {
    margin-top: 20px !important;
  }
  .mt-xs-30 {
    margin-top: 30px !important;
  }
  .mt-xs-40 {
    margin-top: 40px !important;
  }
  .mt-xs-50 {
    margin-top: 50px !important;
  }
  .mt-xs-60 {
    margin-top: 60px !important;
  }
  .mt-xs-70 {
    margin-top: 70px !important;
  }
  .mt-xs-80 {
    margin-top: 80px !important;
  }
  .mb-xs-0 {
    margin-bottom: 0 !important;
  }
  .mb-xs-10 {
    margin-bottom: 10px !important;
  }
  .mb-xs-20 {
    margin-bottom: 20px !important;
  }
  .mb-xs-30 {
    margin-bottom: 30px !important;
  }
  .mb-xs-40 {
    margin-bottom: 40px !important;
  }
  .mb-xs-50 {
    margin-bottom: 50px !important;
  }
  .mb-xs-60 {
    margin-bottom: 60px !important;
  }
  .mb-xs-70 {
    margin-bottom: 70px !important;
  }
  .mb-xs-80 {
    margin-bottom: 80px !important;
  }
}

/* Scroll to top */
.scroll-up {
  position: fixed;
  display: none;
  bottom: 7px;
  right: 7px;
  z-index: 999;
}

.scroll-up a {
  background: #fff;
  display: block;
  height: 28px;
  width: 28px;
  text-align: center;
  line-height: 28px;
  font-size: 14px;
  color: #000;
  opacity: 0.6;
  border-radius: 2px;
}

.scroll-up a:hover,
.scroll-up a:active {
  opacity: 1;
  color: #000;
}

/* Video */
.video-controls-box {
  position: absolute !important;
  bottom: 40px;
  left: 0;
  width: 100%;
  z-index: 1;
}

.video-controls-box a {
  display: inline-block;
  color: #fff;
  margin: 0 5px 0 0;
}

/* Landing Page */
.landing-reason:before {
  position: absolute;
  content: " ";
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background-color: rgba(66, 26, 107, 0.9);
}

.landing-reason {
  color: #fff;
  font-size: 13px;
}

.landing-image-text {
  padding-top: 70px;
  padding-bottom: 0px;
}

.landing-image-text h2 {
  margin-top: 100px;
  margin-bottom: 15px;
}

.landing-screenshot:before {
  position: absolute;
  content: " ";
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background-color: rgba(66, 60, 130, 0.5);
}

.alert i {
  margin-right: 5px;
}

/*--------------------------------------------------------------
	Buttons
--------------------------------------------------------------*/
.btn {
  border-radius: 0;
  font-family: "Roboto Condensed", sans-serif;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 11px;
  padding: 8px 37px;
}

.btn.active.focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn:active:focus,
.btn:focus {
  outline: 0;
}

.btn.btn-round {
  border-radius: 2px;
}

.btn.btn-circle {
  border-radius: 30px;
}

.btn.btn-w {
  background: rgba(255, 255, 255, 0.8);
  color: #111;
}

.btn.btn-w:hover,
.btn.btn-w:focus {
  background: white;
  color: #111;
}

.btn.btn-g {
  background: #e5e5e5;
  color: #111;
}

.btn.btn-g:hover,
.btn.btn-g:focus {
  background: #d8d8d8;
  color: #111;
}

.btn.btn-border-w {
  background: transparent;
  border: 1px solid rgba(255, 255, 255, 0.75);
  color: #fff;
}

.btn.btn-border-w:hover,
.btn.btn-border-w:focus {
  background: #fff;
  border-color: transparent;
  color: #111;
}

.btn.btn-d {
  background: rgba(17, 17, 17, 0.8);
  color: #fff;
}

.btn.btn-d:hover,
.btn.btn-d:focus {
  background: #111111;
}

.btn.btn-b {
  background: #111111;
  color: #fff;
}

.btn.btn-b:hover,
.btn.btn-b:focus {
  background: rgba(17, 17, 17, 0.8);
}

.btn-border-d {
  background: transparent;
  border: 1px solid #111111;
  color: #111;
}

.btn.btn-border-d:hover,
.btn.btn-border-d:focus {
  background: #111111;
  color: #fff;
}

.btn.btn-font-w {
  background: rgba(255, 255, 255, 0.8);
  color: #fff;
}

.btn.btn-font-w:hover {
  background: #fff;
  color: #111;
}

/* Buttons size */
.btn.btn-lg {
  padding: 12px 45px;
  font-size: 13px;
}

.btn.btn-sm {
  padding: 6px 25px;
  font-size: 10px;
  letter-spacing: 1px;
}

.btn.btn-xs {
  padding: 4px 19px;
  font-size: 10px;
  letter-spacing: 0;
}

.btn-list .btn {
  margin: 5px 0;
}

.search-btn {
  position: absolute;
  background: transparent;
  border: none;
  overflow: hidden;
  top: 50%;
  right: 1px;
  width: 42px;
  height: 40px;
  line-height: 38px;
  font-size: 14px;
  outline: none;
  color: #999;
  margin-top: -20px;
}

.image-button {
  margin: 0px 5px;
}

/*--------------------------------------------------------------
	Forms
--------------------------------------------------------------*/
/* Selection */
::-moz-selection {
  background: #000;
  color: #fff;
}

::-webkit-selection {
  background: #000;
  color: #fff;
}

::selection {
  background: #000;
  color: #fff;
}

/* Forms common style */
.form-control {
  font-family: "Roboto Condensed", sans-serif;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 11px;
  height: 33px;
  border: 1px solid #EAEAEA;
  border-radius: 2px;
  transition: all 0.4s ease-in-out 0s;
}

.form-control:focus {
  border-color: #CACACA;
}

/* Forms size */
.input-lg,
.form-horizontal .form-group-lg .form-control {
  height: 43px;
  font-size: 13px;
}

.input-sm, .form-horizontal .form-group-sm .form-control {
  height: 29px;
  font-size: 10px;
}

.rqst-form {
  margin-top: 27px;
}

.rqst-form .btn {
  margin-top: 5px;
}

.input-group-addon {
  border: 1px solid #e4e4e4 !important;
}

/*--------------------------------------------------------------
	Typography
--------------------------------------------------------------*/
a {
  color: #111;
}

a:hover, a:focus {
  text-decoration: none;
  color: #aaa;
  outline: 0;
}

.bg-dark a {
  color: #aaa;
}

.bg-dark a:hover, .bg-dark a:focus {
  color: #fff;
}

h1, h2, h3, h4, h5, h6 {
  line-height: 1.4;
  font-weight: 400;
}

p, ol, ul, blockquote {
  margin: 0 0 20px;
}

blockquote {
  border: 0;
  font-style: italic;
  font-size: 15px;
  padding: 0;
}

.font-alt {
  font-family: "Roboto Condensed", sans-serif;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.font-serif {
  font-family: Volkhov, "Times New Roman", sans-serif;
  font-style: italic;
}

.large-text {
  font-size: 24px !important;
}

.rotate {
  text-shadow: none !important;
}

.module-title {
  position: relative;
  letter-spacing: 4px;
  text-align: center;
  font-weight: 400;
  font-size: 30px;
  color: #111;
  margin: 0 0 70px;
}

.module-subtitle {
  text-align: center;
  font-size: 16px;
  color: #111;
  margin-bottom: 70px;
}

.module-icon {
  text-align: center;
  font-size: 32px;
  margin-bottom: 20px;
}

.module-title + .module-subtitle {
  margin-top: -35px;
}

/* Restaurant module header */
.alt-module-subtitle {
  display: table;
}

.alt-module-subtitle h5 {
  display: table-cell;
  white-space: pre;
  padding: 0 8px;
  color: #111;
}

/* Finance case study header */
.finance-image-content {
  border: 1px solid #e5e5e5;
  padding: 60px 0px;
}

.finance-image-content .module-title {
  margin-bottom: 20px;
}

.finance-image-content .alt-features-item {
  margin-top: 40px;
}

/* Landing Page */
.landing-reason .module-title {
  color: #e6af4b;
}

.landing-reason .module-title + .module-subtitle {
  margin-top: -60px;
  margin-bottom: 40px;
}

.free-trial {
  background-color: rgba(88, 20, 158, 0.9);
  color: #FFFFFF;
}

.free-trial .color-golden {
  color: #e6af4b;
}

/*  Special Portfolio Page  */
.special-portfolio-header-title {
  border: 1px solid rgba(255, 255, 255, 0.7);
  font-size: 50px;
  padding: 40px 0px;
  letter-spacing: 8px;
}

/*--------------------------------------------------------------
	Slider & Carousel
--------------------------------------------------------------*/
/* -------------------------------------------------------------------
General Styles - FlexSlider
------------------------------------------------------------------- */
.flex-direction-nav a,
.flex-control-nav > li > a {
  transition: all 0.3s ease-in-out 0s;
}

.flex-direction-nav a {
  position: absolute;
  display: block;
  height: 100%;
  width: 50%;
  top: 0;
  z-index: 10;
  overflow: hidden;
  opacity: 0;
  margin: 0;
}

.flex-direction-nav .flex-prev {
  opacity: 0;
  left: 0;
  cursor: url(../images/prev-light.png), e-resize;
}

.flex-direction-nav .flex-next {
  opacity: 0;
  right: 0;
  cursor: url(../images/next-light.png), e-resize;
}

.flex-control-nav {
  position: absolute;
  width: auto;
  left: 50%;
  bottom: 20px;
  z-index: 11;
  text-align: center;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}

.flex-control-nav > li {
  display: inline-block;
  margin: 5px 3px;
}

.flex-control-nav > li > a {
  background: transparent;
  border: 1px solid #fff;
  display: block;
  height: 6px;
  width: 6px;
  border-radius: 6px;
}

.flex-control-nav > li > a:hover,
.flex-control-nav > li > a.flex-active {
  background: #fff;
}

/* -------------------------------------------------------------------
Hero Slider
------------------------------------------------------------------- */
.hero-slider {
  margin: 0 !important;
}

.hero-slider .slides > li {
  display: none;
  -webkit-backface-visibility: hidden;
}

.hero-slider,
.hero-slider .flex-viewport {
  height: 100% !important;
  width: 100%;
  padding: 0;
  margin: 0;
}

.hero-slider .slides {
  height: 100% !important;
  transition-delay: 1s;
}

.hero-slider .flex-direction-nav a {
  width: 15%;
}

.hero-slider .slides li {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  height: 100% !important;
  width: 100%;
  padding: 0;
  margin: 0;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
}

/* Caption */
.titan-caption {
  position: relative;
  display: table;
  height: 100%;
  width: 70%;
  margin: 0 auto;
}

.titan-caption {
  position: relative;
  display: table;
  height: 100%;
  width: 100%;
  margin: 0 auto;
}

.caption-content {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
}

/*
Photography Page Slider
*/
.photography-page .image-caption {
  bottom: 20px;
  position: absolute;
  width: 35%;
}

.photography-page .image-caption .caption-text {
  font-size: 24px;
  text-transform: capitalize;
  letter-spacing: 1px;
}

.photography-page .flex-control-nav {
  left: 80%;
  bottom: 20px;
  z-index: 11;
}

/* -------------------------------------------------------------------
General Styles - Owlcarousel
------------------------------------------------------------------- */
.owl-controls {
  margin-top: 40px;
}

.owl-pagination div {
  display: inline-block;
}

.owl-controls .owl-page span {
  background: transparent;
  border: 1px solid #111;
  display: block;
  height: 6px;
  width: 6px;
  margin: 0 3px 5px;
  border-radius: 6px;
  transition: all 0.3s ease-in-out 0s;
}

.owl-controls .owl-page.active span,
.owl-controls.clickable .owl-page:hover span {
  background: #111;
}

.owl-controls .owl-buttons > div {
  display: inline-block;
  margin: 5px;
  font-size: 14px;
  color: #111;
}

/*--------------------------------------------------------------
	Preloader
--------------------------------------------------------------*/
.page-loader {
  position: fixed;
  background: #000;
  bottom: 0;
  right: 0;
  left: 0;
  top: 0;
  z-index: 9998;
}

.loader {
  position: absolute;
  border-left: 2px solid #ffffff;
  border-top: 2px solid rgba(255, 255, 255, 0.2);
  border-right: 2px solid rgba(255, 255, 255, 0.2);
  border-bottom: 2px solid rgba(255, 255, 255, 0.2);
  height: 46px;
  width: 46px;
  left: 50%;
  top: 50%;
  margin: -23px 0 0 -23px;
  text-indent: -9999em;
  font-size: 10px;
  z-index: 9999;
  -webkit-animation: load 0.8s infinite linear;
  -moz-animation: load 0.8s infinite linear;
  ms-animation: load 0.8s infinite linear;
  o-animation: load 0.8s infinite linear;
  animation: load 0.8s infinite linear;
}

.loader,
.loader:after {
  border-radius: 50%;
  width: 46px;
  height: 46px;
}

@-webkit-keyframes load {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes load {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
	Navbar
--------------------------------------------------------------*/
.navbar-custom {
  background-color: rgba(10, 10, 10, 0.9);
  border: 0;
  border-radius: 0;
  z-index: 1000;
  font-family: "Roboto Condensed", sans-serif;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 11px;
  transition: background, padding 0.4s ease-in-out 0s;
}

.navbar a {
  transition: color 0.125s ease-in-out 0s;
}

.navbar-custom .dropdown-menu {
  background: rgba(26, 26, 26, 0.9);
  border-radius: 0;
  border: 0;
  padding: 0;
  box-shadow: none;
}

.navbar-custom .navbar-brand {
  letter-spacing: 4px;
  font-weight: 400;
  font-size: 22px;
  color: #fff;
}

.navbar-custom .nav li > a {
  position: relative;
  color: rgba(255, 255, 255, 0.7);
}

.navbar-custom .dropdown-menu > li > a {
  border-bottom: 1px solid rgba(73, 71, 71, 0.15) !important;
  padding: 11px 15px;
  letter-spacing: 2px;
  color: #999;
}

.navbar-custom .dropdown-menu .dropdown-menu {
  border-left: 1px solid rgba(73, 71, 71, 0.15);
  left: 100%;
  right: auto;
  top: 0;
  margin-top: 0;
}

.navbar-custom .dropdown-menu.left-side .dropdown-menu {
  border: 0;
  border-right: 1px solid rgba(73, 71, 71, 0.15);
  right: 100%;
  left: auto;
}

.navbar-custom .nav > li > a:focus,
.navbar-custom .nav > li > a:hover,
.navbar-custom .nav .open > a,
.navbar-custom .nav .open > a:focus,
.navbar-custom .nav .open > a:hover,
.navbar-custom .dropdown-menu > li > a:focus,
.navbar-custom .dropdown-menu > li > a:hover {
  background: none;
  color: #fff;
}

.navbar-custom .dropdown-menu > li > a:hover {
  background: rgba(255, 255, 255, 0.1) !important;
}

.navbar-custom .dropdown-toggle:after {
  position: absolute;
  display: block;
  right: 0;
  top: 50%;
  margin-top: -6px;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 9px;
  content: "\f107";
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.navbar-custom .navbar-toggle .icon-bar {
  background: #fff;
}

.dropdown-menu {
  min-width: 180px;
  font-size: 11px;
}

/* Navbar search

.dropdown-search {
	position: relative;
	padding: 5px;
}

.dropdown-search .form-control {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-size: 11px;
}

.search-btn {
	position: absolute;
	background: transparent;
	border: none;
	overflow: hidden;
	top: 50%;
	right: 1px;
	width: 42px;
	height: 40px;
	line-height: 38px;
	font-size: 14px;
	outline: none;
	color: #999;
	margin-top: -20px;
}*/
/*--------------------------------------------------------------
	Header
--------------------------------------------------------------*/
.home-section {
  position: relative;
  background-color: #fff;
  background-repeat: no-repeat;
  background-position: center center;
  width: 100%;
  z-index: 0;
  background-size: cover;
}

.titan-title-size-1 {
  letter-spacing: 4px;
  font-size: 15px;
}

.titan-title-size-2 {
  line-height: 1.3;
  letter-spacing: 3px;
  font-size: 18px;
  opacity: .8;
}

.titan-title-size-3 {
  letter-spacing: 16px;
  font-size: 46px;
}

.titan-title-size-4 {
  letter-spacing: 24px;
  font-weight: 400;
  font-size: 48px;
}

/* Agency Page Header */
.agency-page-header:before {
  background: transparent;
}

/* About us Page Header */
.about-page-header:before {
  background: rgba(2, 2, 2, 0.2);
}

/* Service Page Header */
.service-page-header:before {
  background: rgba(2, 2, 2, 0.1);
}

/* Pricing Page Header */
.pricing-page-header {
  background-position: 40% 14%;
  background-repeat: no-repeat;
}

.pricing-page-header:before {
  background: rgba(2, 2, 2, 0.6);
}

/* Gallery Page Header */
.gallery-page-header {
  background-position: 50% 0%;
  background-repeat: no-repeat;
}

.gallery-page-header:before {
  background: rgba(2, 2, 2, 0.2);
}

/* Contact Page Header */
.contact-page-header {
  background-position: 13% 45%;
  background-repeat: no-repeat;
}

.contact-page-header:before {
  background: rgba(2, 2, 2, 0.5);
}

/* FAQ Page Header */
.faq-page-header:before {
  background: rgba(2, 2, 2, 0.15);
}

/* Blog Page Header */
.blog-page-header {
  background-position: 50% 24%;
  background-repeat: no-repeat;
}

.blog-page-header:before {
  background: rgba(2, 2, 2, 0.3);
}

/* Restaurant menu Page Header */
.restaurant-menu-bg:before {
  background: rgba(2, 2, 2, 0.4);
}

.restaurant-page-header:before {
  background: rgba(0, 0, 0, 0.45);
}

.restaurant-image-overlay:before {
  background-color: rgba(2, 2, 2, 0.25);
}

/* Portfolio Page Header */
.portfolio-page-header {
  background-position: 50% 50%;
}

.portfolio-page-header:before {
  background: rgba(45, 45, 45, 0.45);
}

/* Landing Page Header */
.landing-header:before {
  position: absolute;
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(119, 47, 109, 0.52) 95%, rgba(115, 35, 105, 0.58) 100%);
  content: " ";
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}

.banner-img {
  margin-top: -145px;
}

.shop-page-header:before {
  background: rgba(34, 34, 34, 0.3);
}

/*--------------------------------------------------------------
	Footer
--------------------------------------------------------------*/
.footer {
  padding: 10px 0;
}

.footer .copyright {
  margin: 0;
}

.footer .footer-social-links {
  text-align: right;
}

.footer .footer-social-links a {
  display: inline-block;
  padding: 0 6px;
}

/* -------------------------------------------------------------
Google map
------------------------------------------------------------- */
#map-section {
  position: relative;
  height: 450px;
  width: 100%;
}

#map {
  height: 100%;
  width: 100%;
}

#map img {
  max-width: none;
}

/*--------------------------------------------------------------
	Services & Features
--------------------------------------------------------------*/
.features-item {
  margin: 20px 0;
  text-align: center;
}

.features-icon,
.alt-features-icon {
  line-height: 1.2;
  font-size: 42px;
  color: #111;
}

.features-title,
.alt-features-title {
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 400;
  font-size: 14px;
  color: #111;
  margin: 16px 0 15px;
}

.alt-features-item {
  position: relative;
  padding-left: 55px;
  margin: 65px 0 0 0;
}

.alt-features-icon {
  position: absolute;
  height: 40px;
  width: 40px;
  left: 0;
  top: 0;
  text-align: center;
  line-height: 40px;
  font-size: 28px;
}

.alt-features-title {
  font-size: 13px;
  margin: 0 0 10px;
}

/* Content box */
.content-box {
  margin: 20px 0;
  text-align: center;
}

.content-box-title {
  font-weight: 400;
  font-size: 18px;
  color: #111;
  margin: 16px 0 15px;
}

/*--------------------------------------------------------------
	Team
--------------------------------------------------------------*/
.team-item {
  position: relative;
  text-align: center;
}

.team-image {
  position: relative;
  overflow: hidden;
}

.team-image img {
  width: 100%;
}

.team-image:after {
  position: absolute;
  background: transparent;
  content: " ";
  display: block;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 1;
}

.team-detail {
  position: absolute;
  width: 100%;
  opacity: 0;
  bottom: 100%;
  left: 0;
  z-index: 2;
  text-align: center;
  font-size: 12px;
  color: #aaa;
  padding: 20px;
}

.team-detail h5 {
  font-size: 16px;
}

.team-detail p {
  font-size: 14px;
}

.team-social a {
  display: inline-block;
  color: #aaa;
  padding: 5px 6px;
}

.team-social a:hover {
  color: #FFF;
}

.team-descr {
  margin: 20px 0 0;
}

.team-name {
  font-size: 14px;
  color: #111;
}

.team-role {
  font-size: 11px;
  color: #aaa;
}

.team-item:hover .team-image:after {
  background: rgba(0, 0, 0, 0.6);
}

.team-item:hover .team-detail {
  opacity: 1;
  bottom: 50%;
  -webkit-transform: translateY(50%);
  -ms-transform: translateY(50%);
  transform: translateY(50%);
}

/*--------------------------------------------------------------
	Restaurant Menu
--------------------------------------------------------------*/
.menu {
  border-bottom: 1px dotted #e5e5e5;
  padding: 0 0 10px;
  margin: 0 0 20px;
}

.menu-title,
.menu-price {
  margin: 0 0 10px;
  font-size: 14px;
  color: #111;
}

.menu-price-detail {
  position: relative;
  text-align: right;
}

/*--------------------------------------------------------------
	Price Table
--------------------------------------------------------------*/
.price-table {
  background: #fff;
  border: 1px solid #eaeaea;
  padding: 25px 20px;
  margin: 15px 0 30px;
  border-radius: 2px;
  text-align: center;
}

.price-table:hover {
  border-color: #CACACA;
}

.price-table.best {
  margin: 0 0 30px;
}

.price-table .small {
  margin: 0;
}

.borderline {
  position: relative;
  background: #eaeaea;
  display: block;
  height: 1px;
  width: 100%;
  margin: 20px 0 15px;
}

.borderline:before {
  position: absolute;
  background: #eaeaea;
  content: "";
  bottom: -7px;
  left: 50%;
  height: 14px;
  width: 14px;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  margin-left: -7px;
}

.borderline:after {
  position: absolute;
  background: #fff;
  content: "";
  bottom: -5px;
  left: 50%;
  height: 16px;
  width: 16px;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  margin-left: -8px;
}

.price-table h4 {
  color: #111;
  margin: 0;
}

.price-table p.price {
  font-size: 60px;
  color: #111;
  padding: 0;
  margin: 0 0 0 -10px;
}

.price-table p.price span {
  display: inline-block;
  vertical-align: top;
  font-size: 16px;
  padding-top: 25px;
}

.price-details {
  list-style: none;
  padding: 0;
  margin: 0 0 23px;
}

.price-details li {
  padding: 7px 0;
}

.price-details li > span {
  text-decoration: line-through;
  color: #aaa;
}

/*--------------------------------------------------------------
	Fun fact
--------------------------------------------------------------*/
.count-item {
  text-align: center;
}

.count-icon {
  line-height: 1.2;
  font-size: 42px;
}

/*--------------------------------------------------------------
	Video Box
--------------------------------------------------------------*/
.video-box {
  text-align: center;
  padding: 40px 0;
}

.video-box-icon > a > i,
.video-box-icon > a > span {
  line-height: 1.8;
  font-size: 40px;
  color: #fff;
}

.video-title {
  letter-spacing: 4px;
  font-size: 30px;
  margin: 10px 0 0;
}

.video-subtitle {
  color: rgba(255, 255, 255, 0.5);
}

/*--------------------------------------------------------------
	Portfolio
--------------------------------------------------------------*/
/* Portfolio filter */
.filter {
  text-align: center;
  list-style: none;
  padding: 0;
  margin: 0 0 70px;
}

.filter > li {
  display: inline-block;
  padding: 0 0 10px;
  margin: 0 25px;
}

/* Portfolio grid */
.works-grid {
  list-style: none;
  padding: 0;
  margin: 0;
}

.works-grid.works-grid-gut {
  margin: 0 0 0 -10px;
}

.works-grid.works-grid-gut .work-item {
  padding: 0 0 10px 10px;
}

.work-item {
  width: 50%;
  float: left;
  margin: 0;
}

.works-grid-3 .work-item {
  width: 33.3333%;
}

.container .works-grid-3 .work-item {
  width: 33.2%;
}

.works-grid-4 .work-item {
  width: 25%;
}

.works-grid-5 .work-item {
  width: 20%;
}

.work-item > a {
  position: relative;
  display: block;
  overflow: hidden;
}

.work-image {
  position: relative;
  overflow: hidden;
}

.work-image img {
  display: block;
  overflow: hidden;
  width: 100%;
}

.work-image:after {
  position: absolute;
  display: block;
  content: "";
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
}

.work-caption {
  width: 100%;
  padding: 0 20px;
  opacity: 0;
  position: absolute;
  bottom: 100%;
  left: 0;
  text-align: center;
  overflow: hidden;
}

.work-title {
  font-size: 14px;
  color: #fff;
  margin: 0 0 6px;
}

.work-descr {
  color: #aaa;
}

.work-item:hover .work-image:after {
  background: rgba(0, 0, 0, 0.6);
}

.work-item:hover .work-image > img {
  -webkit-transform: scale(1.1) rotate(2deg);
  -ms-transform: scale(1.1) rotate(2deg);
  transform: scale(1.1) rotate(2deg);
}

.work-item:hover .work-caption {
  bottom: 50%;
  opacity: 1;
  z-index: 3;
  -webkit-transform: translateY(50%);
  -ms-transform: translateY(50%);
  transform: translateY(50%);
}

/* Work item white background*/
.works-grid.works-hover-w .work-title {
  color: #111;
}

.works-grid.works-hover-w .work-item:hover .work-image:after {
  background: rgba(255, 255, 255, 0.8);
}

/* Work item gradien background*/
.works-grid.works-hover-g .work-image:after {
  opacity: 0;
}

.works-grid.works-hover-g .work-descr {
  color: #fff;
}

.works-grid.works-hover-g .work-item:hover .work-image:after {
  background: #6fe29e;
  background: linear-gradient(135deg, rgba(111, 226, 158, 0.8) 0%, rgba(91, 218, 209, 0.8) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6fe29e', endColorstr='#5bdad1',GradientType=1 );
  opacity: 1;
}

.sliding-portfolio .work-item {
  width: 100%;
}

/*--------------------------------------------------------------
	Single Portfolio
--------------------------------------------------------------*/
.work-details {
  margin: 0 0 20px;
}

.work-details-title {
  color: #111;
  margin: 0 0 20px;
}

.work-details ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.work-details ul > li {
  border-bottom: 1px dotted #c2c2c2;
  padding: 0 0 5px;
  margin: 0 0 5px;
}

/*--------------------------------------------------------------
	Call to action
--------------------------------------------------------------*/
.callout-text {
  color: rgba(255, 255, 255, 0.6);
}

.callout-title {
  font-weight: 400;
  font-size: 16px;
  color: #fff;
  margin: 0;
}

.callout-btn-box {
  text-align: right;
  padding-top: 4px;
}

.request-cta {
  padding: 50px 0px;
}

/*--------------------------------------------------------------
	Testimonial
--------------------------------------------------------------*/
.testimonial:before {
  background: rgba(2, 2, 2, 0.4);
}

.testimonials-slider {
  position: relative;
}

.testimonial-text {
  text-align: center;
  font-style: normal;
  font-size: 18px;
}

.testimonial-caption {
  text-align: center;
  padding: 10px 0 0;
}

.testimonial-title {
  font-size: 14px;
}

.testimonial-descr {
  color: rgba(255, 255, 255, 0.5);
  font-size: 11px;
}

/*--------------------------------------------------------------
	Gallery
--------------------------------------------------------------*/
.gallery-item {
  position: relative;
  text-align: center;
  margin: 0 0 20px;
}

.gallery-image {
  position: relative;
  overflow: hidden;
}

.gallery-image a.gallery {
  position: relative;
  display: block;
}

.gallery-image img {
  display: block;
  overflow: hidden;
  width: 100%;
}

.gallery-image:after {
  position: absolute;
  background: transparent;
  content: " ";
  display: block;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 1;
}

.gallery-caption {
  position: absolute;
  width: 100%;
  opacity: 0;
  bottom: 100%;
  left: 0;
  z-index: 2;
  text-align: center;
  font-size: 28px;
  color: #fff;
  padding: 20px;
}

.gallery-icon {
  background: rgba(255, 255, 255, 0.2);
  border-radius: 50%;
  height: 50px;
  width: 50px;
  font-size: 24px;
  margin: 0 auto;
}

.gallery-icon i,
.gallery-icon span {
  line-height: 50px;
}

/* Gallery hover */
.gallery-item:hover .gallery-image:after {
  background: rgba(0, 0, 0, 0.6);
}

.gallery-item:hover .gallery-caption {
  opacity: 1;
  bottom: 50%;
  -webkit-transform: translateY(50%);
  -ms-transform: translateY(50%);
  transform: translateY(50%);
}

/*--------------------------------------------------------------
	Blog Post
--------------------------------------------------------------*/
.post {
  margin: 0 0 80px;
}

.post-title {
  line-height: 1.4;
  font-size: 22px;
  color: #111;
  margin: 0;
}

.post-header {
  margin: 0 0 15px;
}

.post-meta {
  font-size: 11px;
  color: #aaa;
}

.post-entry {
  border-top: 1px dotted #c2c2c2;
  padding-top: 20px;
  margin-top: 10px;
}

.post-images-slider {
  position: relative;
}

.post-images-slider .flex-control-nav {
  bottom: 0;
}

.post-thumbnail,
.post-images-slider,
.post-video {
  margin: 0 0 20px;
}

.post-quote {
  background: #f5f5f5;
  text-align: center;
  padding: 20px;
}

/* Post columns */
.post-columns .post {
  margin: 0 0 60px;
}

.post-columns .post-header {
  margin: 0 0 10px;
}

.post-columns .post-title {
  line-height: 1.8;
  font-size: 14px;
}

.post-columns .post-entry {
  padding: 10px 0 0;
  margin: 0 0 10px;
}

.post-columns.wo-border .post-entry {
  border: 0;
  padding: 0;
}

.post-columns .post-entry p:last-child {
  margin: 0;
}

.more-link:after {
  content: "\00BB";
  color: #666666;
  padding-left: 5px;
}

.pagination a {
  border: 1px solid #eaeaea;
  display: inline-block;
  text-transform: uppercase;
  text-align: center;
  color: #999;
  padding: 4px 12px;
}

.pagination a.active {
  border-color: #CACACA;
}

/*--------------------------------------------------------------
	Widgets
--------------------------------------------------------------*/
/* Progress bars */
.progress {
  overflow: visible;
  height: 4px;
}

.progress-bar {
  position: relative;
}

.progress-bar.pb-dark {
  background: #111;
}

.progress-bar span {
  position: absolute;
  display: block;
  right: -0px;
  top: -24px;
  opacity: 0;
  line-height: 12px;
  font-size: 12px;
  color: #111;
  padding: 4px 0px;
}

.progress-bar span:after {
  display: inline-block;
  content: "%";
}

/* Tabs */
.tab-content .tab-pane {
  padding: 20px 0;
}

/* Accordion */
.panel-title {
  font-size: 14px;
}

.panel-heading a {
  position: relative;
  display: block;
}

.panel-heading a:after {
  position: absolute;
  content: "\f106";
  top: 50%;
  right: 0px;
  font-family: "FontAwesome";
  line-height: 1;
  font-size: 14px;
  margin-top: -7px;
}

.panel-heading a.collapsed:after {
  content: "\f107";
}

/* Tables */
.table-border > tbody > tr > td,
.table-border > tbody > tr > th,
.table-border > tfoot > tr > td,
.table-border > tfoot > tr > th,
.table-border > thead > tr > td,
.table-border > thead > tr > th {
  border-color: #e5e5e5;
}

.ds-table > tbody > tr > td,
.ds-table > tbody > tr > th,
.ds-table > tfoot > tr > td,
.ds-table > tfoot > tr > th,
.ds-table > thead > tr > td,
.ds-table > thead > tr > th {
  border-top: 0;
}

.checkout-table {
  border: 1px solid #e5e5e5;
}

.checkout-table > tbody > tr > td,
.checkout-table > tbody > tr > th,
.checkout-table > tfoot > tr > td,
.checkout-table > tfoot > tr > th,
.checkout-table > thead > tr > td,
.checkout-table > thead > tr > th {
  padding: 12px;
}

.checkout-table tr td,
.checkout-table tr th {
  border-top: 1px solid #e5e5e5;
  border-bottom: 1px solid #e5e5e5;
  border-right: 1px solid #e5e5e5;
  border-left: 1px solid #e5e5e5;
}

.checkout-table tbody tr td:first-child,
.checkout-table tbody tr th:first-child {
  max-width: 36px;
}

/* Sidebar / Widget common*/
.sidebar .widget {
  margin-bottom: 60px;
}

.sidebar .widget-title {
  color: #111;
}

.widget .widget-title {
  border-bottom: 1px dotted #c2c2c2;
  font-size: 14px;
  padding: 0 0 10px;
  margin: 0 0 15px;
}

.widget ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

/* Icon List */
.widget .icon-list li {
  padding: 5px 0;
}

.widget .icon-list li a:before {
  content: "\00BB";
  color: #666666;
  padding-right: 5px;
}

/* Posts */
.widget-posts li {
  margin: 0 0 15px;
}

.widget-posts li:last-child {
  margin: 0;
}

.widget-posts-image {
  float: left;
  width: 64px;
}

.widget-posts-body {
  margin-left: 74px;
}

/* Search */
.search-box {
  position: relative;
}

/* Tags */
.tags a {
  background: #111;
  display: inline-block;
  font-size: 10px;
  color: #fff;
  padding: 4px 10px 4px 12px;
  margin: 0 1px 4px;
  border-radius: 2px;
}

.tags a:hover {
  background: rgba(17, 17, 17, 0.8);
}

/*--------------------------------------------------------------
	Comment Box in Blog
--------------------------------------------------------------*/
.comments,
.comment-form {
  margin: 80px 0 0;
}

.comments .comment-title,
.comment-form .comment-form-title {
  border-bottom: 1px dotted #c2c2c2;
  font-size: 16px;
  color: #111;
  padding-bottom: 15px;
  margin: 0 0 20px;
}

.comment-author {
  font-size: 14px;
  margin: 0 0 10px;
}

.comment-avatar {
  width: 55px;
  float: left;
  margin-top: 10px;
}

.comment-avatar img {
  border-radius: 50%;
}

.comment-content {
  padding-top: 5px;
  margin-left: 75px;
  margin-bottom: 30px;
}

@media (min-width: 768px) {
  .comment .comment {
    margin-left: 75px;
  }
}

/*--------------------------------------------------------------
	Client
--------------------------------------------------------------*/
.client-logo {
  opacity: .5;
}

.client-logo:hover {
  opacity: 1;
}

/*--------------------------------------------------------------
	Shop Items
--------------------------------------------------------------*/
.shop-item {
  text-align: center;
  margin: 0 0 40px;
}

.shop-item-image {
  position: relative;
  overflow: hidden;
}

.shop-item-image img {
  width: 100%;
}

.shop-item-detail,
.shop-item-image:after {
  transition: all 0.4s ease-in-out 0s;
}

.shop-item-image:after {
  position: absolute;
  display: block;
  content: "";
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}

.shop-item-detail {
  position: absolute;
  width: 100%;
  left: 0;
  bottom: 100%;
  padding: 20px;
  opacity: 0;
  z-index: 2;
  text-align: center;
  font-size: 12px;
  color: #aaa;
}

.shop-item-title {
  font-weight: 400;
  font-size: 14px;
  color: #111;
  margin: 15px 0 5px;
}

/* Shop item hover */
.shop-item:hover .shop-item-image:after {
  background: rgba(255, 255, 255, 0.7);
}

.shop-item:hover .shop-item-detail {
  opacity: 1;
  bottom: 50%;
  -webkit-transform: translateY(50%);
  -ms-transform: translateY(50%);
  transform: translateY(50%);
}

/* -------------------------------------------------------------------
	Exclusive products
------------------------------------------------------------------- */
.ex-product {
  opacity: .7;
  transition: all 0.4s ease-in-out 0s;
}

.ex-product:hover {
  opacity: 1;
}

/*--------------------------------------------------------------
	Shop Single Product
--------------------------------------------------------------*/
.product-gallery {
  list-style: none;
  padding: 0;
  width: 100%;
  margin: 10px 0 0;
}

.product-gallery li {
  display: inline-block;
  width: 15%;
  margin: 0 5px;
}

.product-gallery li:first-child {
  margin-left: 0;
}

.product-title {
  margin: 0 0 20px;
  color: #111;
}

.star,
.star-off {
  margin-bottom: 5px;
  color: #f1c40f;
}

.star-off {
  color: #e5e5e5;
}

.amount {
  font-size: 32px;
  color: #111;
}

.reviews {
  margin: 0;
}

/*--------------------------------------------------------------
	Showcase Page
--------------------------------------------------------------*/
.showcase-page .showcase-page-header {
  background-color: rgba(2, 2, 2, 0.7);
}

.showcase-page .content-box {
  display: block;
  margin-bottom: 45px;
}

.showcase-page .content-box .content-box-image {
  border-radius: 6px;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  overflow: hidden;
  box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.15);
  margin-bottom: 15px;
  transition: 0.35s ease-out;
  -webkit-transition: 0.35s ease-out;
  -moz-transition: 0.35s ease-out;
}

.showcase-page .content-box .content-box-image:hover {
  transform: translate3d(0, -10px, 0);
  -webkit-transform: translate3d(0, -10px, 0);
  box-shadow: 0 23px 40px rgba(0, 0, 0, 0.2);
}

/*--------------------------------------------------------------
	Documentation Page
--------------------------------------------------------------*/
.documentation-page {
  font-size: 14px;
}

.documentation-page .pln {
  color: #000;
}

.documentation-page pre.prettyprint {
  border: 1px solid #888;
  padding: 15px;
}

.documentation-page ol.linenums {
  margin-top: 0;
  margin-bottom: 0;
}

.documentation-page li.L0, .documentation-page li.L1, .documentation-page li.L2, .documentation-page li.L3, .documentation-page li.L5, .documentation-page li.L6, .documentation-page li.L7, .documentation-page li.L8 {
  list-style-type: none;
}

.documentation-page li.L1, .documentation-page li.L3, .documentation-page li.L5, .documentation-page li.L7, .documentation-page li.L9 {
  background: #eee;
}

.documentation-page .com {
  color: #800;
}

.documentation-page .lit {
  color: #066;
}

.documentation-page .pun, .documentation-page .opn, .documentation-page .clo {
  color: #660;
}

.documentation-page .fun {
  color: red;
}

.documentation-page .str, .documentation-page .atv {
  color: #080;
}

.documentation-page .kwd, .documentation-page .tag {
  color: #008;
}

.documentation-page .typ, .documentation-page .atn, .documentation-page .dec, .documentation-page .var {
  color: #606;
}

.documentation-page a {
  color: #19B5FE;
}

.documentation-page a:hover {
  color: #1C92C9;
}

/*--------------------------------------------------------------
	Responsive Styles - Media Queries
--------------------------------------------------------------*/
@media (min-width: 768px) {
  .navbar-transparent {
    background: transparent;
    padding-bottom: 15px;
    padding-top: 15px;
  }
  .navbar-custom .dropdown-menu {
    position: absolute;
    display: block;
    visibility: hidden;
    opacity: 0;
  }
  .navbar-custom .open > .dropdown-menu {
    visibility: visible;
    opacity: 1;
  }
  .navbar-custom .dropdown-menu .dropdown-toggle:after {
    position: absolute;
    display: block;
    right: 9px;
    top: 50%;
    margin-top: -6px;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: 9px;
    content: "\f105";
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  .navbar-right .dropdown-menu {
    right: auto;
    left: 0;
  }
  /* Comments */
  .comment .comment {
    margin-left: 75px;
  }
}

@media (max-width: 1200px) {
  /* Features */
  .alt-features-item {
    margin: 20px 0 0;
  }
}

@media (max-width: 1050px) {
  /* Navbar */
  .navbar-custom {
    letter-spacing: 1px;
  }
}

@media (max-width: 991px) {
  /* Navbar */
  .navbar-custom {
    letter-spacing: 0;
  }
  /* Headers */
  .titan-title-size-3 {
    letter-spacing: 8px;
    font-size: 36px;
  }
  .titan-title-size-4 {
    letter-spacing: 12px;
    font-size: 38px;
  }
  .work-item,
  .works-grid-3 .work-item,
  .container .works-grid-3 .work-item,
  .works-grid-4 .work-item,
  .works-grid-5 .work-item {
    width: 50%;
  }
  /* Half-image */
  .side-image {
    position: relative;
    height: 300px;
  }
}

@media (max-width: 767px) {
  /* Navbar */
  .navbar-custom .navbar-nav {
    letter-spacing: 3px;
    margin-top: 1px;
    margin-bottom: 0;
  }
  .navbar-custom li > a:hover {
    background: rgba(255, 255, 255, 0.1) !important;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu .dropdown-header,
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a {
    padding: 10px 25px;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu .dropdown-menu .dropdown-header,
  .navbar-custom .navbar-nav .open .dropdown-menu .dropdown-menu > li > a {
    padding: 10px 35px;
  }
  .navbar-custom li a,
  .navbar-custom .dropdown-search {
    border-bottom: 1px solid rgba(73, 71, 71, 0.15) !important;
  }
  .navbar-custom .dropdown-toggle:after,
  .navbar-custom .dropdown-menu .dropdown-toggle:after {
    right: 7px;
    content: "\f107";
  }
  .navbar-custom .nav > .open > .dropdown-toggle:after,
  .navbar-custom .dropdown-menu .dropdown.open .dropdown-toggle:after {
    right: 7px;
    content: "\f106";
  }
  /* Shop navbar */
  .navbar-custom .navbar-nav > li:last-child.navbar-cart > a {
    padding-left: 15px;
  }
  .navbar-custom .cart-item-number {
    display: none;
  }
  .navbar-custom .navbar-cart > a:after {
    content: "\f107";
  }
  .navbar-custom .navbar-cart-item a {
    border: 0 !important;
  }
  .dropdown-menu.cart-list {
    text-align: left;
    border-bottom: 1px solid rgba(73, 71, 71, 0.15) !important;
  }
  .navbar-cart-item {
    border: none;
    border-bottom: 1px solid rgba(73, 71, 71, 0.15) !important;
    padding-bottom: 10px;
  }
  .navbar-cart-img {
    display: none;
  }
  .navbar-cart-title {
    white-space: normal;
    padding: 0;
    margin-left: 0;
  }
  /* Headers */
  .titan-title-size-1 {
    letter-spacing: 2px;
    font-size: 14px;
  }
  .titan-title-size-2 {
    line-height: 1.3;
    letter-spacing: 2px;
    font-size: 16px;
    opacity: .8;
  }
  .titan-title-size-3 {
    letter-spacing: 4px;
    font-size: 26px;
  }
  .titan-title-size-4 {
    letter-spacing: 6px;
    font-size: 28px;
  }
  /* Features */
  .features-item {
    margin: 0 0 30px;
  }
  .alt-features-item {
    padding-left: 0;
    margin: 0 0 30px;
    text-align: center;
  }
  .alt-features-icon {
    position: static;
    width: auto;
    margin: 0 auto 8px;
  }
  /* Callout */
  .callout-text {
    margin: 0 0 30px;
  }
  .callout-text,
  .callout-btn-box {
    text-align: center;
  }
  /* Sidebar */
  .sidebar {
    margin-top: 50px;
  }
  .widget {
    margin-bottom: 60px;
  }
  .post.mb-0 {
    margin-bottom: 40px !important;
  }
  .footer {
    text-align: center;
  }
  .copyright,
  .footer-social-links {
    text-align: center;
    margin: 10px 0;
  }
  /* Half-image */
  .side-image-text {
    padding-left: 15px;
    padding-right: 15px;
  }
  /* Restaurant menu */
  .menu-title,
  .menu-detail,
  .menu-price-detail {
    text-align: center;
  }
  .align-center-sm {
    text-align: center;
  }
  .align-left-sm {
    text-align: left;
  }
}

@media only screen and (max-width: 480px) {
  .work-item,
  .works-grid-3 .work-item,
  .works-grid-4 .work-item,
  .works-grid-5 .work-item {
    width: 100%;
  }
}

    </style>




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Titan | Multipurpose HTML5 Template</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
        <div class="main">
          <section class="module">
            <div class="container">
              {{-- <div class="row"> --}}
                <div class="text-align: center">
                  <h4 class="font-alt">Add Gallery</h4>
                  <hr class="divider-w mb-10">

          
                  <form action="{{url('tambah_gallery')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if (Session::has('Pesan'))
                    <div class="alert alert-success">
                      {{Session::get('Pesan')}}
                    </div>
                    @endif
        
                    
                  <div class="form-group">
                      <input required class="form-control" id="gambar_gallery" type="file" accept=".jpg,.png,.jpeg" name="gambar_gallery" placeholder="Image"/>
                    </div>
                    <div class="form-group">
                      <input required class="form-control" id="judul_gallery" type="text" name="judul_gallery" placeholder="Title"/>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-round btn-b">Post</button>
                    </div>
                  </form>
                  
                </div>
                {{-- <div class="col-sm-5">
                    <h4 class="font-alt">Register</h4>
                    <hr class="divider-w mb-10">
                    <form class="form">
                      <div class="form-group">
                        <input class="form-control" id="E-mail" type="text" name="email" placeholder="Email"/>
                      </div>
                      <div class="form-group">
                        <input class="form-control" id="username" type="text" name="username" placeholder="Username"/>
                      </div>
                      <div class="form-group">
                        <input class="form-control" id="password" type="password" name="password" placeholder="Password"/>
                      </div>
                      <div class="form-group">
                        <input class="form-control" id="re-password" type="password" name="re-password" placeholder="Re-enter Password"/>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-block btn-round btn-b">Register</button>
                      </div>
                    </form>
                  </div> --}}
                </div>
              </div>
            </section>
            {{-- <div class="module-small bg-dark">
              <div class="container">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="widget">
                      <h5 class="widget-title font-alt">About Titan</h5>
                      <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                      <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                      <p>Email:<a href="#">somecompany@example.com</a></p>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="widget">
                      <h5 class="widget-title font-alt">Recent Comments</h5>
                      <ul class="icon-list">
                        <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                        <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                        <li>Andy on <a href="#">Eco bag Mockup</a></li>
                        <li>Jack on <a href="#">Bottle Mockup</a></li>
                        <li>Mark on <a href="#">Our trip to the Alps</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="widget">
                      <h5 class="widget-title font-alt">Blog Categories</h5>
                      <ul class="icon-list">
                        <li><a href="#">Photography - 7</a></li>
                        <li><a href="#">Web Design - 3</a></li>
                        <li><a href="#">Illustration - 12</a></li>
                        <li><a href="#">Marketing - 1</a></li>
                        <li><a href="#">Wordpress - 16</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="widget">
                      <h5 class="widget-title font-alt">Popular Posts</h5>
                      <ul class="widget-posts">
                        <li class="clearfix">
                          <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail"/></a></div>
                          <div class="widget-posts-body">
                            <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                            <div class="widget-posts-meta">23 january</div>
                          </div>
                        </li>
                        <li class="clearfix">
                          <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail"/></a></div>
                          <div class="widget-posts-body">
                            <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                            <div class="widget-posts-meta">15 February</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
            <hr class="divider-d">
            {{-- <footer class="footer bg-dark">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">TitaN</a>, All Rights Reserved</p>
                  </div>
                  <div class="col-sm-6">
                    <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </footer> --}}
          </div>
          <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
        </main>
      </body>
</html>

@endsection