<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="manifest" href="{{ asset('site.webmanifest') }}">
{{--  <link rel="shortcut icon" type="x-icon" href="favicon.ico">  --}}
<link rel="shortcut icon" type="x-icon" href="{{ asset('assets/imgages/favicon.ico') }}">

<!-- Place favicon.ico in the root directory -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- START ALL CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/font-awsome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/animate.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/fancy-box.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/slick-nav.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/magnific-popup.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/owl.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/line-awsome.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/portfolio.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/responsive.css')}}">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav fixed-top">
    
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;
    
</a>


        <div class="">
            <div id="" class="">
                <div class="logo-text text-texture">
                    <a href="#home">
                        <h1>T</h1>
                    </a>
                </div>
            </div>	
<div class="main-menu">
    <ul class="nav">

        <li class="active"><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#client">clients</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    <ul id="icons" style="margin-top:-242px;">
        <li class="active"><a href="#home"><i class="las la-home"></i></a></li>
        <li><a href="#about"><i class="las la-address-book"></i></a></li>
        <li><a href="#portfolio"><i class="las la-briefcase"></i></a></li>
        <li><a href="#client"><i class="las la-exchange-alt"></i></a></li>
        <li><a href="#blog"><i class="las la-blog"></i></a></li>
        <li><a href="#contact"><i class="las la-comments"></i></a></li>								
    </ul>

</div>				

<div class="copy-right">
    <p>©2022 Tayyaba <br />Created By <a href="https://bitsoftsol.com/" style="color: blue;">BitSoftSol</a>.</p>
</div>
</div>


</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  <span id="icons"></span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  show
}
</script>
	
		
<!-- START ALL JS/SCRIPT -->
<script src="{{ asset('template/js/modernizr.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.min.js') }}"></script>
<script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/js/typed.min.js') }}"></script>
<script src="{{ asset('template/js/isotope.pkg.min.js') }}"></script>
<script src="{{ asset('template/js/animation.model.js') }}"></script>
<script src="{{ asset('template/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('template/js/fancyBox v2.1.5.js') }}"></script>
<script src="{{ asset('template/js/jquery.parallax-1.1.3.js') }}"></script>
<script src="{{ asset('template/js/ajax.mail.js') }}"></script>
<script src="{{ asset('template/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.barfiller.js') }}"></script>
<script src="{{ asset('template/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('template/js/waypoints.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('template/js/main.js') }}"></script>
<script src="{{ asset('template/js/plugins.js') }}"></script>






<!-- END ALL JS/SCRIPT -->	
      
</body>
</html> 
