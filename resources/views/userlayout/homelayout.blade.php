<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">    
    <link rel="icon" href="{{env('APP_URL')}}/img/logo.png">
    <link rel="stylesheet" href="{{env('APP_URL')}}/assets/css/style.css">
    <title>Ecom Buyer</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'); 
body{
    font-family: 'poppins';
    overflow: hidden;
}
:root{
--bg-color : #F6E6CB;
--main-color : #153448;
--sec-color: #3C5B6F;
--ot-color: #948979;
}
.html{
font-size: 62.5%;
}

.navbar input[type="checkbox"],
.navbar .hamburger-lines{
display: none;
}

.container{
max-width: 1200px;
width: 90%;
margin: auto;
}

.navbar {
        background-color: transparent; /* Initial background color */
        position: fixed;
        top: 0;
        left: 0;
        
        z-index: 1000;
        transition: background-color 0.3s ease; /* Smooth transition */
    }
.navbar-container{
display: flex;
justify-content: space-between;
height: 64px;
background: transparent;
align-items: center;
}

.menu-items{
order: 2;
display: flex;
}
.logo{
order: 1;
font-size: 2rem;
color: var(--main-color)
}

.menu-items li {
list-style: none;
margin-left: 2.5rem;
font-size: 1.3rem;
}

.navbar a{
color: var(--main-color);
text-decoration: none;
font-weight: 400;
transition: color 0.3s ease-in-out;
}

.navbar a:hover{
color: var(--ot-color);
}

@media (max-width: 767px){
.navbar{
    /* opacity: 0.95; */
}

.navbar-container input[type="checkbox"],
.navbar-container .hamburger-lines{
    display: block;
}

.navbar-container{
    display: block;
    position: relative;
    height: 64px;
}

.navbar-container input[type="checkbox"]{
    position: absolute;
    display: block;
    height: 32px;
    width: 30px;
    top: 20px;
    left: 20px;
    z-index: 5;
    opacity: 0;
    cursor: pointer;
}

.navbar-container .hamburger-lines{
    display: block;
    height: 28px;
    width: 35px;
    position: absolute;
    top: 20px;
    left: 20px;
    z-index: 2;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.navbar-container .hamburger-lines .line{
    display: block;
    height: 4px;
    width: 100%;
    border-radius: 10px;
    background: #333;
}

.navbar-container .hamburger-lines .line1{
    transform-origin: 0% 0%;
    transition: transform 0.3s ease-in-out;
}

.navbar-container .hamburger-lines .line2{
    transition: transform 0.2s ease-in-out;
}

.navbar-container .hamburger-lines .line3{
    transform-origin: 0% 100%;
    transition: transform 0.3s ease-in-out;
}

.navbar .menu-items {
padding-top: 90px;
background: #fff;
height: 98vh;
width: 232px;
transform: translate(-150%);
display: flex;
flex-direction: column;
margin-left: -17px;
padding-left: 15px;
border-radius: 20px;
transition: transform 0.5s ease-in-out;
box-shadow: 5px 0px 10px 0px #aaa;
overflow: scroll;
}

.navbar .menu-items li {
margin-bottom: 1.8rem;
font-size: 1.1rem;
margin-left: 1.5rem;
font-weight: 500;
}

.logo{
    position: absolute;
    top: 10px;
    right: 0px;
    font-size: 2rem;
}

.navbar-container input[type="checkbox"]:checked ~ .menu-items{
    transform: translateX(0);
}

.navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line1{
    transform: rotate(45deg);
}

.navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line2{
    transform: scaleY(0);
}

.navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line3{
    transform: rotate(-45deg);
}

}

@media (max-width: 500px){
.navbar-container input[type="checkbox"]:checked ~ .logo{
    display: none;
}
}
/* hero style */

.hero1{
height: 750px !important;
display: flex;
justify-content: flex-start;
align-items: center;

}
.hero2{
height: 600px !important;
display: flex;
justify-content: flex-start;
align-items: center;
}
.hero2 img{
width: 600px;
}
.hero{
height: auto;
background-color: #F6E6CB !important;
/* background: url('./img/bg-hero.png') center center no-repeat; */
}

.herobuttons a{
text-decoration: none;
padding: 10px 30px;
border-radius: 30px;
transition: all 0.3s linear;
}
.herobuttons .button1:hover{
background-color: #fff;
color: var(--main-color);
border: 1px solid var(--main-color);
}
.herobuttons .button2:hover{
background-color: var(--main-color);
color:  #fff;
}
.herobuttons .button1{
border: none;
background: var(--main-color);
color: #fff;
margin-right: 10px
}
.herobuttons .button2{
border: 1px solid var(--main-color);
color: var(--sec-color);
}
.hero1 .three,
.hero1 .four{
color: var(--main-color);
}
@media only screen and (max-width:767px){
.hero2 img{
width: 100%;
}
.hero1 {
height: 700px !important;
overflow: hidden;
}
.hero2 {
height: 325px !important;
}
.herobuttons a{
text-decoration: none;
padding: 10px 20px;
border-radius: 30px;
transition: all 0.3s linear;
}
}
@media only screen and (min-width: 768px) and (max-width: 1024px) {
.hero2 img{
width: 100%;
}
}
.hero11 .two{
animation: slide 0.5s linear;
}
@keyframes slide{
0%{
    transform: translateX(100px)
}
}
.hero11 .three{
animation: slide2 0.7s linear;
}
@keyframes slide2{
0%{
    transform: translateX(200px)
}
}
/* end */
/* about */
.sicons {
border-radius: 50%;
padding: 10px 11px;
color: var(--sec-color);
background: var(--bg-color);
}
.sicons:hover {
color:  var(--bg-color);
background:  var(--sec-color);
}
/* end */
/* services */
.service-item {
position: relative;
background:#F2F3F9;
padding: 40px 30px;
display: flex;
justify-content: center;
align-items: center;
border-radius: 35px;
transition: .5s;
}
.service-item img{
    width: 70%;
}
.service-item h4{
color: var(--sec-color)

}
.service-item a.btn {
position: relative;
display: flex;
transition: .5s;
z-index: 1;
}
.service-item a.btn::before {
position: absolute;
content: "";
width: 35px;
height: 35px;
top: 0;
left: 0;
border-radius: 35px;
background: #cac0b3;
transition: .5s;
z-index: -1;
}
.service-item:hover{
background: #fff;
color: var(--sec-color);
box-shadow: 2px 3.464px 24px 0px rgba(106, 105, 194, 0.25);
}
.service-item:hover a.btn {
color: #fff
}
.service-item:hover a.btn::before {
width: 110px; 
}
/* end */
/* feature */
.feature{
/* background-image: url(../img/featurebg2.png); */
background-position: center  center;
background-size: cover;
background-repeat: no-repeat;
}
/* end */
/* count */
.countcard{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    padding: 50px;
    border-radius: 30px;
    margin-top: -90px; 
    background: var(--main-color);
    color: #fff;
    box-shadow: 2px 3.464px 24px 0px rgba(106, 105, 194, 0.25);
}
li{
    list-style: none;
}
.countcard h2{
    font-size: 40px
}
.unpar{
    margin-top: 60px;
}
.unpar li{
    margin-bottom: 10px;
}
/* end */
/* global items */
.gitems{
    margin-bottom: 25px;
}
.gitems h4{
    color: var(--sec-color);
    font-weight: 600;
    font-size: 20px;
}
.gbox h1{
    font-weight: bold;
    font-size: 35px;
    margin-bottom: 30px;
    color: var(--sec-color);
}
.join{
    font-weight: 600;
    color: var(--sec-color);
    margin-top: 20px;
}
/* end */
.consolidate h5{
    color: rgb(46, 190, 46);
    margin-bottom: 20px;
}
.consolidate h2{
    color: #fff;
    font-size: 45px;
    margin-bottom: 20px;
}
.consolidate li{
    
    margin-bottom: 15px;
}
/* consolidate */

.fcardbox .card{
    border-radius: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;  
    max-width: 18rem;    
    transition: all 0.2s linear; 
    margin-right: 0 !important; 
}
.fcardbox .card:hover{
    box-shadow: 2px 3.464px 24px 0px rgba(106, 105, 194, 0.25);
}
.fcardbox .card img{
    width: 45%;
    margin: 25px 0;
}
.fcardbox h5, .fcardbox span{
    margin: 5px 0;
    color: var(--main-color);
}
.fcardbox span{
    margin-bottom: 20px !important;
}
/*
/* how its work */
.hiwbox{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
}
.hiwbox .how {
    font-weight: 700;
    font-size: 30px;
    color: var(--sec-color);
    margin-bottom: 10px;
}
.hiwbox h2 {
    font-size: 50px;
    font-weight: 700;
    margin-bottom: 20px;
}
/* end */
/* step */
.stepcard{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px;
    position: relative; 
    padding-right: 40px;
}
.stepcard img{
    width: 90px;
    margin: 50px 0;
}

.stepcard:not(:last-child)::after {
    content: ""; 
    position: absolute;
    right: -20px; 
    top: 50%; 
    transform: translateY(-300%);
    width: 80px; 
    height: 20px; 
    background-image: url('./assets/img/arrowimg.png'); 
    background-size: cover; 
    background-repeat: no-repeat;
    
}
.stepcard:nth-child(2)::after {
    content: ""; 
    position: absolute;
    right: -20px; 
    top: 50%; 
    transform: translateY(-300%);
    width: 80px; 
    height: 20px; 
    background-image: url('./assets/img/arrowimg2.png'); 
    background-size: cover; 
    background-repeat: no-repeat;
    
}
.stoday{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    margin-top: 30px;
}
.stoday h4{
    color: var(--main-color);
    font-size: 40px;
    font-weight: 600;
    margin-bottom: 20px;
}
.stoday .create{
    font-size: 20px;
    font-weight: 600;
    color: var(--sec-color);
    margin-bottom: 20px;
}

/* end */
/* scroll */
.scrollToTop {
  position: fixed;
  bottom: 0;
  right: 30px;
  width: 45px;
  height: 45px;
  background-color: var(--main-color);
  border-radius: 15px;
  color: #fff;
  line-height: 45px;
  font-size: 20px;
  text-align: center;
  z-index: 9;
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
  cursor: pointer;
  transition: all 1s;
  transform: translateY(100%);
}

.scrollToTop i {
  color: var(--bs-white);
}

.scrollToTop.active {
  bottom: 30px;
  transform: translateY(0%);
}
/* end */
/* footer */
footer ul {
    list-style: none; 
    padding: 0; 
    margin: 0; 
    margin-top: 10px;
}

footer li {
    margin-bottom: 10px;
    margin-right: 15px;
    position: relative; 
}

footer li a {
    color: #fff;
    text-decoration: none;
    display: inline-block; 
    transform: scale(1);
    transition: transform 0.2s linear, font-size 0.3s linear; 
}

footer li a:hover {
    transform: scale(1.2); 
    font-size: 15px; 
}

/* end */
.head1{
    font-size: 35px;
}
.head2{
    font-size: 45px;
    color: var(--main-color);
}
.head3{
    font-size: 20px;
}
@media only screen and (max-width:767px){
    .head1 {
    font-size: 20px;
}
.head2{
    font-size: 27px;
    color: var(--main-color);
}
.head3{
    font-size: 17px;
}
.countcard {   
    padding: 11px;    
}
.countcard h2 {
    font-size: 30px;
}
.section-header .title{
    font-size: 20px !important;
}
.section-header .title {
    font-size: 22px !important;
    font-weight: 600;
    line-height: 33px !important;
}
.stepcard:not(:last-child)::after {
    display: none;
}
.stepcard:nth-child(2)::after {
   display: none;
}
}
    </style>
</head>

<body>
    <a href="#" class="scrollToTop active"><i class="fas fa-angle-double-up"></i></a>
{{-- navbar --}}
    <nav class="navbar" id="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>               
                <li><a href="#">Contact</a></li>            
            </ul>
            <h1 class="logo">Ecom Buyer</h1>
        </div>
    </nav>
    
    <div class="main-container">
        @yield('content')
    </div>

    <footer style="background: var(--sec-color)" class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 d-flex justify-content-start align-items-start">
                    <img src="{{env('APP_URL')}}/assets/img/nobglogo.png" class="mb-2" alt=""><h1 class="text-white mx-2">Ecom Buyer</h1>
                </div>
                <div class="col-lg-12 col-md-12 col-12 mb-4 col-12 d-flex justify-content-start align-items-center">
                    <ul style="display:flex;flex-direction:row">
                        <li>
                           <a href=""> About us</a>
                        </li>
                        <li>
                            <a href="{{route('user.terms')}}">Terms</a>
                        </li>
                        <li>
                            <a href="">Privacy</a>
                        </li>
                        <li>
                            <a href="">Contact</a>
                         </li>
                    </ul>
                </div>
                <hr style="color: #fff">
                <div class="d-flex justify-content-center align-items-center flex-wrap" class="pb-5">
                    <p style="color: white; margin-top:1rem; margin-bottom: 40px">Copyright © 2024 ECOM BUYER PVT. LTD. </p>
                </div>  
            </div>
        </div>
    </footer>
<script>

</script>
<script>
    // JavaScript to change navbar background on scroll
    window.addEventListener('scroll', function() {
        var navbar = document.getElementById('navbar');
        if (window.scrollY > 0) {
            navbar.style.backgroundColor = '#fff';     
        } else {
            navbar.style.backgroundColor = 'transparent'; 
        }
    });
</script>
<script>
     // Scroll Top
     var ScrollTop = $(".scrollToTop");
    $(window).on('scroll', function () {
      if ($(this).scrollTop() < 500) {
        ScrollTop.removeClass("active");
      } else {
        ScrollTop.addClass("active");
      }
    });
    $('.scrollToTop').on('click', function () {
      $('html, body').animate({
        scrollTop: 0
      }, 500);
      return false;
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow.js/1.1.2/wow.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-GKwjsm0PHG4lJ6bDhUWunlKVm5+3O/qwBhQmBou/5A3rHx2R3YwDt40FQu59kuA4" crossorigin="anonymous"></script>
</body>
</html>