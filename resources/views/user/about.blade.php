<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">    
    <link rel="icon" href="{{env('APP_URL')}}/img/logo.png">
    <link rel="stylesheet" href="{{env('APP_URL')}}/assets/css/style.css">
    <title>Ecom Buyer</title>
    <style>
.abthead{
    color: #fff;
    text-align: center;
}
.abthead h1{
    font-size: 55px;
    margin-bottom: 25px;
}
.abthead p {
    font-size: 20px;
    margin-bottom: 25px;
    font-weight: 500;
}
.main-container{
    padding-top: 100px;
    padding-bottom: 80px;
}
.abtcontent1{
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 10px
}
.abtcontent1 h4{
    color:var(--sec-color);
    font-weight: 600;
}
.abtcontent1 h2{
    color: var(--main-color);
    font-size: 35px;
    font-weight: 600;
    margin-bottom: 20px;
}
.abtcontent1 p{
    color: var(--sec-color);
}
.abtimgs{
    width: 70%;
}
.card{
    border: none;
    border-radius: 20px;
    box-shadow: 2px 3.464px 24px 0px rgba(106, 105, 194, 0.25);
}
.abtcontent2 span{
    line-height: 28px;
}
@media only screen and (max-width: 767px){
    .termhead{
        margin-bottom: 40px;
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
                <li><a href="{{route('user.home')}}">Home</a></li>
                <li><a href="{{route('user.services')}}">Services</a></li>
                <li><a href="{{route('user.process')}}">Processing</a></li>
                <li><a href="{{route('user.about')}}" class="{{ request()->routeIs('user.about') ? 'active' : '' }}">About us</a></li>               
                <li><a href="{{route('user.contact')}}">Contact</a></li>               
            </ul>
            <h1 class="logo">Ecom Buyer</h1>
        </div>
    </nav>
    <div class="container-fluid" style="margin-top: 90px;background:var(--main-color);">
        <div class="container main-container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-10 col-md-10 col-12 abthead">
                    <h1 data-aos="fade-up">Fueling Business Ambitions Through Seamless Payments</h1>
                    <p data-aos="fade-up" >We're committed to transforming the Indian payment landscape with a user-friendly platform, enabling seamless online transactions for businesses of all sizes.</p>
                </div>               
            </div>
            
        </div>
    </div>
    <div class="container mt-4">
       <div class="abtcontent1" data-aos="fade-up">
            <h4>Our core values</h4>
            <h2>Technology is just the foundation.</h2>
            <p>– Innovation, Integrity, Reliability, and Collaboration – guide everything we do. We strive to constantly innovate, build trust, deliver dependable services, and foster strong partnerships to collectively achieve success.</p>
            <p>Ready to join the Paysant Payment Orchestration Platform? Explore our office, contact us with your needs, and experience the difference seamless payments can make.</p>
       </div>
       <div class="row abtcontent2 my-4">
        <div class="col-lg-6 col-12 mb-5" data-aos="zoom-in-up" data-aos-delay="100">
            <div class="card d-flex p-4" style="flex-direction: row">
                <div class="col-4 d-flex justify-content-center align-items-start">
                    <img class="abtimgs" src="{{env('APP_URL')}}/assets/img/abtimg1.png" alt="">
                </div>
                <div class="col-8 ">
                    <h2>Innovation</h2>
                    <span>We're not just payment processors, we're visionaries. We push boundaries, embrace creative ideas, and constantly develop cutting-edge solutions that make payments easier, faster, and better for you.</span>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12 mb-5" data-aos="zoom-in-up" data-aos-delay="300">
            <div class="card d-flex p-4" style="flex-direction: row">
                <div class="col-4 d-flex justify-content-center align-items-start">
                    <img class="abtimgs" src="{{env('APP_URL')}}/assets/img/abtimg4.png" alt="">
                </div>
                <div class="col-8 d-flex flex-column">
                    <h2>Integrity</h2>
                    <span>Transparency and trust are the cornerstones of everything we do. We operate with honesty and ethical practices, building strong, reliable partnerships with every client.</span>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12 mb-5" data-aos="zoom-in-up" data-aos-delay="500">
            <div class="card d-flex p-4" style="flex-direction: row">
                <div class="col-4 d-flex justify-content-center align-items-start">
                    <img class="abtimgs" src="{{env('APP_URL')}}/assets/img/abtimg3.png" alt="">
                </div>
                <div class="col-8 d-flex flex-column">
                    <h2>Reliability</h2>
                    <span>When it comes to your payments, peace of mind is paramount. That's why we deliver robust, dependable services you can count on, ensuring your transactions are always smooth and secure.</span>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12 mb-5" data-aos="zoom-in-up" data-aos-delay="700">
            <div class="card d-flex p-4" style="flex-direction: row">
                <div class="col-4 d-flex justify-content-center align-items-start">
                    <img class="abtimgs" src="{{env('APP_URL')}}/assets/img/abtimg2.png" alt="">
                </div>
                <div class="col-8 d-flex flex-column">
                    <h2>Collaboration</h2>
                    <span>We believe in the power of team bond, dedication and hard work. We foster strong internal and external partnerships, combining our expertise with yours to achieve collective success.</span>
                </div>
            </div>
        </div>
    </div>
    
        <div class="row my-3 d-flex justify-content-center align-items-center">
            <div class="col-12 col-lg-6 col-md-10 text-center">
                <h4 class="mb-4" style="color: var(--main-color); font-weight:600; font-size:35px">Our Office</h4>
                <span style="color: var(--sec-color);line-height:25px;">Don't hesitate to contact us using any of the communication channels provided below. We assure you a prompt response and are eager to assist you in any way we can.</span>
            </div>                
       </div>

       <div class="row my-3">
            <div class="col-12"  data-aos="fade-up">
                <div class="card text-center p-5 d-flex justify-content-center align-items-center">
                    <div style="direction: flex; flex-direction:column">
                        <img src="{{env('APP_URL')}}/assets/img/tnimg.png" style="width: 50%" alt="">
                        <h4 class="my-3" style="color: var(--main-color); font-weight:600">Tamilnadu, India</h4>
                    </div>
                    <div class="mt-3" style="direction: flex; flex-direction:column ">
                        <i class="fa-regular fa-envelope" style="color: var(--sec-color);font-size:25px;"></i>
                        <h6 class="mt-2" style="color: var(--main-color); font-weight:600">ecombuyer.in</h6>
                    </div>
                    <div class="mt-3" style="direction: flex; flex-direction:column ">
                        <i class="fa-solid fa-mobile-screen" style="color: var(--sec-color);font-size:25px;"></i>
                        <h6 class="mt-2" style="color: var(--main-color); font-weight:600">+91 70922 22525</h6>
                    </div>
                    <span class="mt-3" style="color: var(--main-color)">3/38, Main Road,omshakthi, Ganapati Ngr,palur, Kuthur, Tiruchirappalli, Manachanallur, Tamil Nadu, India, 621216.</span>
                </div>
            </div>
       </div>
    </div>
    .
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
                            <a href="{{route('user.privacy')}}">Privacy</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000, // Duration of animation in milliseconds
                easing: 'ease-in-out', // Easing function for the animation
                once: true // Whether animation should happen only once or every time you scroll up/down to it
            });
        });
    </script>
<script>
    // JavaScript to change navbar background on scroll
    window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
            if (window.scrollY > 0) {
                navbar.style.backgroundColor = '#fff';     
                navbar.style.boxShadow = '2px 3.464px 24px 0px rgba(106, 105, 194, 0.25)';     
            } else {
                navbar.style.backgroundColor = 'transparent'; 
                navbar.style.boxShadow = 'none'; 
            }
        });
</script>
<script>
     // Scroll Top
     $(document).ready(function() {
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
        });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-GKwjsm0PHG4lJ6bDhUWunlKVm5+3O/qwBhQmBou/5A3rHx2R3YwDt40FQu59kuA4" crossorigin="anonymous"></script>
</body>
</html>