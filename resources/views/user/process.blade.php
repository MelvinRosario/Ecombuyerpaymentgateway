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
     .servicemain{
        padding: 10px
     }
     .servicemain h6{
        font-size: 30px;
        color: var(--sec-color);
     }
     .servicemain h1{
        font-size: 40px;
        color: var(--main-color);
        font-weight: 600;
     }
     .servicemain p{
        font-size: 20px;        
        color: var(--sec-color);        
     }
     .servicecontent2 h6{
        font-size: 25px;
        font-weight: 600;
        text-align: center;
        color: rgb(46, 190, 46);
     }
     .servicecontent2 h1{
        font-size: 45px;
        font-weight: 600;
        text-align: center;
        color: #fff;
     }
     .servicecontent2 span{
        color: #fff;
        letter-spacing: 1px;
     }

     .card h5{
        text-align: center;
        font-weight: 600;
        color: var(--main-color);
     }
     .card h6{
        font-weight: 600;
        color: var(--main-color);
        margin-top: 15px;
     }
     .card span{
        color: var(--main-color);
        text-align: center;
     }
     .card{
    border: none;    
    border-radius: 20px;
    min-height: 200px !important;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    box-shadow: 2px 3.464px 24px 0px rgba(106, 105, 194, 0.25);
}
.mtstyle{
    background: var(--main-color);
    padding-top:80px;
    padding-bottom:80px;
    margin-top: -60px;
}
@media only screen and (max-width: 767px){
    .hidden{
        display: none !important;
    }
    .servicemain p {
    font-size: 19px;
    color: var(--sec-color);
}
.servicemain h1 {
    font-size: 30px;
    color: var(--main-color);
    font-weight: 600;
}
.servicemain h6 {
    font-size: 25px;
    color: var(--sec-color);
}
}
@media only screen and (min-width: 768px) and (max-width:1023px){
    .hidden{
        /* display: none !important; */
    }
    .servicemain p {
    font-size: 18px;
    color: var(--sec-color);
}
.servicemain h1 {
    font-size: 25px;
    color: var(--main-color);
    font-weight: 600;
}
.servicemain h6 {
    font-size: 25px;
    color: var(--sec-color);
}
.mtstyle{
    background: var(--main-color);
    padding-top:100px;
    padding-bottom:200px;
    margin-top: -140px;
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
                <li><a href="{{route('user.index')}}">Home</a></li>
                <li><a href="{{route('user.services')}}">Services</a></li>
                <li><a href="{{route('user.process')}}" class="{{ request()->routeIs('user.process') ? 'active' : '' }}">Processing</a></li>
                <li><a href="{{route('user.about')}}">About us</a></li>               
                <li><a href="{{route('user.contact')}}">Contact</a></li>            
            </ul>
            <h1 class="logo">Ecom Buyer</h1>
        </div>
    </nav>
    {{-- end --}}
   
    {{-- hero container --}}
    
        <div class="container-fluid hero-container" >
            <div class="container hero" style="background: none !important">
                <div class="row"> 
                    <div class="col-md-6 col-lg-6 hero1">
                        <div style="display: flex;flex-direction:column;justify-content:flex-start" class="servicemain" data-aos="fade-left">                                                                  
                            <h1 class="mb-3">Ecom Buyer: Delivering Exceptional Payment Processing Solutions</h1>
                            <p class="mb-3">Ecom Buyer is built on a fundamental commitment to excellence, ensuring that your partnership with us translates to tangible success. We understand that your business growth is paramount, and this unwavering dedication fuels every collaboration. Open a Free Account and Experience Seamless Integration:</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 hidden"  style="display:flex;justify-content:center;align-items:center">
                        <img src="{{env('APP_URL')}}/assets/img/paymentprocess.png" style="width: 100%" data-aos="fade-right" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
    <div class="container-fluid mtstyle">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" data-aos="fade-up">
                <div class="col-lg-3 col-12 col-md-4 mb-5 " data-aos="zoom-in" data-aos-delay="100">
                    <div class="card p-2">
                        <h5>Robust Architecture</h5>
                        <span>Our Payment API boasts a stable and scalable infrastructure, guaranteeing reliable and high-performance transactions.</span>
                    </div>                               
                </div>
                <div class="col-lg-3 col-12 col-md-4 mb-5 " data-aos="zoom-in" data-aos-delay="200">
                    <div class="card p-2">
                        <h5>Unwavering Security</h5>
                        <span>Our Payment API boasts a stable and scalable infrastructure, guaranteeing reliable and high-performance transactions.</span>
                    </div>                               
                </div>
                <div class="col-lg-3 col-12 col-md-4 mb-5 " data-aos="zoom-in" data-aos-delay="300">
                    <div class="card p-2">
                        <h5>Global Reach</h5>
                        <span>We utilize robust encryption protocols to ensure the security of sensitive payment information, safeguarding your transactions against potential threats.</span>
                    </div>                               
                </div>
                <div class="col-lg-3 col-12 col-md-4 mb-5 " data-aos="zoom-in" data-aos-delay="400">
                    <div class="card p-2">
                        <h5>Real-Time Operations</h5>
                        <span>Enjoy swift and efficient payment processing with our real-time capabilities, minimizing delays and optimizing the user experience.</span>
                    </div>                               
                </div>
                <div class="col-lg-3 col-12 col-md-4 mb-5 " data-aos="zoom-in" data-aos-delay="500">
                    <div class="card p-2">
                        <h5>Instant Insights</h5>
                        <span>Stay informed with immediate updates and notifications on transaction statuses through our Webhook support.</span>
                    </div>                               
                </div>
                <div class="col-lg-3 col-12 col-md-4 mb-5 " data-aos="zoom-in" data-aos-delay="600">
                    <div class="card p-2">
                        <h5>User-Centric Control</h5>
                        <span>Access intuitive dashboards designed for managing transactions, tracking performance, and gaining valuable insights into your payment activities.</span>
                    </div>                               
                </div>
                <div class="col-lg-3 col-12 col-md-4 mb-5 " data-aos="zoom-in" data-aos-delay="700">
                    <div class="card p-2">
                        <h5>Expert Support</h5>
                        <span>Leverage our dedicated developer support team to ensure your team receives the assistance needed for successful integration and ongoing optimization.</span>
                    </div>                               
                </div>
                <div class="col-lg-3 col-12 col-md-4 mb-5 " data-aos="zoom-in" data-aos-delay="800">
                    <div class="card p-2">
                        <h5>Clear Documentation</h5>
                        <span>Our comprehensive documentation facilitates a smooth onboarding process for developers, empowering them to easily integrate our API into their applications.</span>
                    </div>                               
                </div>                
            </div>
        </div>
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
                           <a href="{{route('user.about')}}"> About us</a>
                        </li>
                        <li>
                            <a href="{{route('user.terms')}}">Terms</a>
                        </li>
                        <li>
                            <a href="{{route('user.privacy')}}">Privacy</a>
                        </li>
                        <li>
                            <a href="{{route('user.contact')}}">Contact</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // Navbar background change on scroll
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

    // Initialize AOS (Animate On Scroll)
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 1000, 
            easing: 'ease-in-out', 
            once: true 
        });
    });

    // Scroll to top functionality
    $(window).on('scroll', function () {
        var scrollTop = $(".scrollToTop");
        if ($(this).scrollTop() < 500) {
            scrollTop.removeClass("active");
        } else {
            scrollTop.addClass("active");
        }
    });

    $('.scrollToTop').on('click', function () {
        $('html, body').animate({ scrollTop: 0 }, 500);
        return false;
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow.js/1.1.2/wow.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-GKwjsm0PHG4lJ6bDhUWunlKVm5+3O/qwBhQmBou/5A3rHx2R3YwDt40FQu59kuA4" crossorigin="anonymous"></script>
</body>
</html>