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
    text-align: center;
}
.abthead h1{
    font-size: 55px;
    margin-bottom: 25px;
    font-weight: 800;
    color: var(--main-color)
}
.abthead h2{
    font-size: 45px;
    margin-bottom: 25px;
    font-weight: 700;
    color: var(--sec-color);
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
.card{
    border: none;
    border-radius: 20px;
    box-shadow: 2px 3.464px 24px 0px rgba(106, 105, 194, 0.25);
}
.abtcontent2 span{
    line-height: 28px;
}
input,textarea{
    height: 100%;
    padding: 10px 5px 10px 10px;
    width: 100%;
    border-radius: 8px;    
    border: 1px solid var(--sec-color) !important;    
}
textarea{
    resize: none;
    height: 150px !important;
    box-sizing: border-box;
}
textarea::placeholder{
    color: #000;
    font-style: italic;
}
input:focus{
    border: 1px solid var(--sec-color) !important;
}
.send button{
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    border: none;
    color: #fff;
    background: var(--sec-color);
    border-radius: 10px
}
@media only screen and (max-width: 767px){
    .termhead{
        margin-bottom: 40px;
    }
    .abthead h2 {
    font-size: 30px;
    margin-bottom: 25px;
    font-weight: 700;
    color: var(--sec-color);
}
    .abthead h1 {
    font-size: 50px;
    margin-bottom: 25px;
    font-weight: 800;
    color: var(--main-color);
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
                <li><a href="{{route('user.about')}}">About us</a></li>               
                <li><a href="{{route('user.contact')}}" class="{{ request()->routeIs('user.contact') ? 'active' : '' }}">Contact</a></li>               
            </ul>
            <h1 class="logo">Ecom Buyer</h1>
        </div>
    </nav>
    <div class="container-fluid" style="margin-top: 90px;">
        <div class="container main-container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-8 col-md-8 col-12 abthead" data-aos="fade-up">
                    <h2>CONTACT US</h2>
                    <h1>If You Have Any Query, Feel Free To Contact Us</h1>
                </div>               
            </div>
            
        </div>
    </div>
    <div class="container">     
       <div class="row abtcontent2">
        <div class="col-lg-4 col-md-6 col-12 mb-5" data-aos="zoom-in-up" data-aos-delay="100">
            <div class="card d-flex p-3 py-4" style="flex-direction: row; height:auto;justify-content:center;align-item:center">
                <div class="col-2 mx-2" >
                    <i class="fa-solid fa-phone d-flex justify-content-center align-items-center" style="font-size:20px;background: var(--main-color);width:100%;height:100%;color:#fff;border-radius:15px;"></i>
                </div>
                <div class="col-10" style="display: flex; flex-direction:column;">
                    <h5>Call to ask any question</h5>
                    <a href="tel:+917092222525" style="text-decoration: none; color:var(--main-color)">+91 70922 22525</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-5" data-aos="zoom-in-up" data-aos-delay="300">
            <div class="card d-flex p-3 py-4" style="flex-direction: row; height:auto;justify-content:center;align-item:center">
                <div class="col-2 mx-2" >                    
                    <i class="fa-regular fa-envelope d-flex justify-content-center align-items-center" style="font-size:20px;background: var(--main-color);width:100%;height:100%;color:#fff;border-radius:15px;"></i>
                </div>
                <div class="col-10" style="display: flex; flex-direction:column;">
                    <h5>Email to get free quote</h5>
                    <a href="mailto:ecombuyer.in" style="text-decoration: none; color:var(--main-color)">ecombuyer.in</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12 mb-5" data-aos="zoom-in-up" data-aos-delay="500">
            <div class="card d-flex p-3 py-4" style="flex-direction: row; height:auto;justify-content:center;align-item:center">
                <div class="col-2 mx-2" >                 
                    <i class="fa-solid fa-location-dot d-flex justify-content-center align-items-center" style="font-size:20px;background: var(--main-color);width:100%;height:35%;color:#fff;border-radius:15px;"></i>
                </div>
                <div class="col-10" style="display: flex; flex-direction:column;">
                    <h5>Office</h5>
                    <span style="text-decoration: none; color:var(--main-color)">3/38, Main Road,omshakthi, Ganapati Ngr,palur, Kuthur, Tiruchirappalli, Manachanallur, Tamil Nadu, India, 621216.</span>
                </div>
            </div>
        </div>
    </div>
    
        <div class="row my-3 d-flex justify-content-center align-items-center" data-aos="fade-up">
            <div class="col-12 col-lg-6 col-md-6">
                <form action="">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="row">
                                <div class="col-12 col-lg-6 mb-4">
                                <input type="text" placeholder="Your Name"></div>
                                <div class="col-12 col-lg-6 mb-4"><input type="text" placeholder="Your Email"></div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <input type="text" placeholder="Mobile">
                        </div>
                        <div class="col-12">
                            <textarea name="" id="" placeholder="Message" style="text-align: left">
                            </textarea>
                        </div>
                        <div class="col-12 send">
                            <button>Send Message</button>
                        </div>
                    </div>
                </form>
            </div> 
            <div class="col-12 col-lg-6 col-md-6 d-flex justify-content-center align-items-center">
                <iframe class="mb-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125385.64361455406!2d78.72874776781148!3d10.864667752831867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf63123d59f87%3A0xac66bcd1a9045cd0!2s3%2C%20Main%20Rd%2C%20Pachur%2C%20Tamil%20Nadu%20621216!5e0!3m2!1sen!2sin!4v1721634408580!5m2!1sen!2sin" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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