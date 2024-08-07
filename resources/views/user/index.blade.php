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
        .counter {
  /* font-size: 3rem;  */
  /* font-weight: bold; */
}
.counter-container {
  position: relative;
  display: inline-block;
}

.counter-value {
  position: absolute;
  opacity: 0;
  transition: opacity 0.5s;
}

.counter-container .counter-value {
  opacity: 1;
}
.homeanime1, .homeanime2{
    position: absolute;    
}
.homeanime1 {
    width: 600px;
    position: absolute;
    top: 150px; 
    right: -600px;    
    animation: updown 10s linear infinite;
    
}

.progress {
	position: fixed;
	top: 0; left: 0;
	z-index: 1;
	width: 100%;
}
.progress--wpr {
	width: 100%;
	height: 8px;
}
.progress--bar {
	height: 8px;
	background-color: black;
	width: 0%;
}

@keyframes updown {
    0% {
        transform: translateY(0px) translateX(0px);
    }
    50% {
        transform: translateY(-20px) translateX(20px);
    }
    75% {
        transform:  translateY(0px) translateX(0px); 
        
    }
    100% {
        transform: translateY(-20px) translateX(20px); 
    }
}
.homeanime2 {
    width: 200px;
    position: absolute;
    z-index: -1;    
    left: -300px;
    bottom: 120px;    
    animation: updown2 10s linear infinite;
}

@keyframes updown2 {
    0% {
        transform: translateY(0px) translateX(0px);
    }
    50% {
        transform: translateY(-20px) translateX(-20px);
    }
    75% {
        transform:  translateY(0px) translateX(0px); 
    }
    100% {
        transform: translateY(-2    0px) translateX(-20px); 
    }
}
@media only screen and (max-width:1024px){
    .homeanime1{
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
                <li><a href="{{route('user.index')}}" class="{{ request()->routeIs('user.index') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{route('user.services')}}">Services</a></li>
                <li><a href="{{route('user.process')}}">Processing</a></li>
                <li><a href="{{route('user.about')}}">About us</a></li>               
                <li><a href="{{route('user.contact')}}">Contact</a></li>            
            </ul>
            <h1 class="logo">Ecom Buyer</h1>
        </div>
    </nav>    
    {{-- end --}}
    {{-- progress bar --}}
    {{-- <div class="progress">
        <div class="progress--wpr">
            <div class="progress--bar"></div>
        </div>
    </div> --}}
    {{-- end --}}
   
    {{-- hero container --}}
    <div class="main-container">
        <div class="container-fluid hero-container" >
            <div class="container hero" style="background: none !important">
                <div class="row"> 
                    <div class="col-md-12 col-lg-8 hero1 " data-aos="fade-left">
                        <div style="display: flex;flex-direction:column;justify-content:flex-start" class="hero11">
                                      
                           <h3 class="mb-3 head1" style="color: var(--sec-color);">
                            Welcome to Your Financial Hub
                           </h3>
                           <h4 class="head2 mb-3" style="color: var(--sec-color);">Ecom Buyer: Simplifying Your Payment Processes</h4>
                           <p class="mb-5 head3" style="color: var(--main-color);">Ecom Buyer is your secure and efficient solution for managing all your financial transactions in one place. In today's digital landscape, managing finances efficiently and securely is crucial. That's where Ecom Buyer comes in, offering a powerful yet simple payment processing platform designed to streamline your financial operations and provide peace of mind.</p>
                           <div class="herobuttons w-100">
                            <a href="" class="button1">Get Started</a>
                            <a href="" class="button2">Sign up</a>
                           </div>
                        </div>
                        
                            <img src="{{env('APP_URL')}}/assets/img/homeanimationimg_wb.png" data-aos="zoom-in" class="homeanime1" alt="">
                            {{-- <img src="{{env('APP_URL')}}/assets/img/homeanimationimg2_wb.png" class="homeanime2" alt=""> --}}
                        
                    </div>
                    
                </div>
            </div>
        </div>
    
    {{-- end --}}
     {{-- conunt --}}
     <div class="container" data-aos="zoom-in">
        <div class="row card countcard">
            <div class="col-xl-3 col-md-3 col-sm-6">
                <div class="single-area d-flex align-items-center justify-content-center">
                    <div class="text-area text-center">
                        <h2><span class="counter" data-target="50">0+</span></h2>
                        <p>Supported Currencies</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-6">
                <div class="single-area d-flex align-items-center justify-content-center">
                    <div class="text-area text-center">
                        <h2><span class="counter" data-target="100">0+</span></h2>
                        <p>Available Countries</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-6">
                <div class="single-area d-flex align-items-center justify-content-center">
                    <div class="text-area text-center">
                        <h2><span class="counter" data-target="70">0+</span></h2>
                        <p>Payment Methods</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-6">
                <div class="single-area d-flex align-items-center justify-content-center">
                    <div class="text-area text-center">
                        <h2><span class="counter">7</span><span>/</span><span class="counter" data-target="24">0</span></h2>
                        <p>Support Team</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        {{-- end --}}
    {{-- Unparelled --}}
    <div class="container" >
        <div class="row justify-content-center unpar" class="">
            <div class="col-lg-12">
                <div class="section-header ">
                    <!-- <h5 class="sub-title">Send money in a heartbeat</h5> -->
                    <h2 class="title text-center" style="font-size: 2.5rem; line-height: 3rem; margin-bottom:20px; color:var(--sec-color)">Unparalleled Convenience with
                        Our Payment Orchestration:
                    </h2>  
                    <div class="d-flex justify-content-center align-items-center" style="flex-direction: column">
                        <li style="padding-left: 5%;margin-left: 5%;"><span style="font-weight: bold;">
                            Effortless Payments : 
    
                        </span>
                        Process payments smoothly with our cutting-edge technology.
                    </li>
                    <li style="padding-left: 5%;margin-left: 5%;"><span style="font-weight: bold;">
                            Centralized Hub :
    
                        </span>
                        Consolidate all your payments, bills, and subscriptions for easy access.
                    </li>
                    <li style="padding-left: 5%;margin-left: 5%;"><span style="font-weight: bold;">
                        Automated Routing :
    
                        </span>
                        Eliminate manual work – payments automatically reach their destinations.
                    </li>
                    </div>              
                                      
                    <!-- <p>At Paysant, we redefine the payment industry with a commitment to transparency, ensuring every transaction is seamless and secure. Our 24/7 support ensures you're never alone in your financial journey. Experience innovation, reliability, and peace of mind with Paysant."</p> -->
                </div>
            </div>
        </div>
    </div>
    
    {{-- end --}}
    
    {{-- services --}}
    <div class="container-fluid mt-sm-1 py-5" style="background: #fff">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5" >
                    <img src="{{env('APP_URL')}}/assets/img/paymentimg.jpg" alt="" style="width: 100%; border-radius:20px">
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="service-item d-flex flex-column justify-content-center text-center " >
                                        <img src="{{env('APP_URL')}}/assets/img/grpimg1.png" alt="">
                                        <h5 class="my-2">24/7 Customer Support</h5>
                                        <p>Enjoy round-the-clock support from our dedicated team. Whenever you need assistance or have inquiries, our responsive customer support is ready to provide solutions and guidance.</p>                                    
                                    </div>
                                </div>
                                <div class="col-12" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="service-item d-flex flex-column justify-content-center text-center" >
                                        <img src="{{env('APP_URL')}}/assets/img/grpimg3.png" alt=""> 
                                        <h5 class="my-2">100% Transparent</h5>
                                        <p>Unparalleled transparency in every transaction. No hidden fees or surprises—just clear, straightforward financial interactions for complete peace of mind.</p>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="service-item d-flex flex-column justify-content-center text-center" >    
                                        <img src="{{env('APP_URL')}}/assets/img/grpimg2.png" alt="">                                
                                        <h5 class="my-2">Cutting-edge Security</h5>
                                        <p>Benefit from cutting-edge security, shielding transactions against evolving threats and vulnerabilities, ensuring your financial transactions are always secure and worry-free.</p>                                    
                                    </div>
                                </div>
                                <div class="col-12" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="service-item d-flex flex-column justify-content-center text-center ">       
                                        <img src="{{env('APP_URL')}}/assets/img/grpimg4.png" alt="">                            
                                        <h5 class="my-2">International Network</h5>
                                        <p>Seamlessly connect globally with our extensive international network. Whether sending or receiving payments, experience swift, secure, and borderless transactions across the world.</p>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end --}}
    {{-- global reach --}}
    <div class="container-fluid"  style="background: #F2F3F9" data-aos="fade-up">
        <div class="container my-3 p-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 gbox" style="display: flex;flex-direction: column">
                    <h1>Global Reach:</h1>
                    <div class="gitems">
                        <h4>Multi-currency:</h4>
                        <span>Handle transactions in multiple currencies with ease.</span>
                    </div>
                    <div class="gitems">
                        <h4>Borderless Payments:</h4>
                        <span>Send and receive money across various countries seamlessly</span>
                    </div>
                    <div class="gitems">
                        <h4>Multiple Payment Methods:</h4>
                        <span>Choose from diverse payment options for ultimate flexibility.</span>
                    </div>
                </div>              
                <div class="col-lg-6 col-md-6 col-12 gbox" style="display: flex;flex-direction: column">
                    <h1>Additional Benefits:</h1>
                    <div class="gitems">
                        <h4>Gain Insights:</h4>
                        <span>Track spending patterns for informed decisions.</span>
                    </div>
                    <div class="gitems">
                        <h4>User-Friendly Interface:</h4>
                        <span>Manage your finances effortlessly with our intuitive platform.</span>
                    </div>               
                </div>       
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center align-items-center">
                <span class="join">Join Ecom Buyer and experience the future of secure and simplified financial management.</span>
            </div>
        </div>
        </div>
    </div>
    {{-- end --}}
    {{-- why choose us --}}
    <div class="container-fluid  feature pt-5 pb-5" style="background: var(--main-color);margin-top:-15px;">
        <div class="container pt-5 text-center pb-5 mb-5">
            <div class="consolidate">
                <h5 class="sub-title">Consolidate all your payments effortlessly in one centralized platform.
                </h5>
                <h2 class="title">Unwavering Security:</h2>
                <li style="color: white;">
                    <span style="font-weight: bold; color: white;">
                        Robust Protection: 
                    </span>
                    Enjoy industry-leading security measures that shield your transactions.
                </li>
                <li style="color: white;">
                    <span style="font-weight: bold; color: white;">
                        24/7 Support: 
                    </span>
                    Our dedicated team is always available to address your concerns.
                </li>
                <li style="color: white;">
                    <span style="font-weight: bold; color: white;">
                        Complete Transparency: 
                    </span>
                    No hidden fees – you'll always know exactly what you're paying.
                </li>
            </div>       
        </div>
    </div>
    {{-- end --}}
    {{-- 4cards --}}
        <div class="container-fluid" style="margin-top: -140px">
            <div class="row fcardbox d-flex justify-content-center p-4">
                <div class="col-lg-3 col-md-6 col-12 card fc1 mx-3 mb-3" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{env('APP_URL')}}/assets/img/cardicon1.png" alt="">
                    <h5>Unified Transaction Management</h4>
                    <span>Streamline bills and subscriptions in one platform for an efficient experience</span>
                </div>
                <div class="col-lg-3 col-md-6 col-12 card fc2 mx-3 mb-3" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{env('APP_URL')}}/assets/img/cardicon2.png" alt="">
                    <h5>Secure and Convenient</h4>
                    <span>Enjoy a secure, user-friendly interface for hassle-free payments.</span>
                </div>
                <div class="col-lg-3 col-md-6 col-12 card fc3 mx-3 mb-3" data-aos="fade-up" data-aos-delay="500">
                    <img src="{{env('APP_URL')}}/assets/img/cardicon3.png" alt="">
                    <h5>Automated Routing</h4>
                    <span>Seamlessly direct payments to their respective destinations, enhancing efficiency and reducing manual intervention.</span>
                </div>
                <div class="col-lg-3 col-md-6 col-12 card fc4 mx-3 mb-3" data-aos="fade-up" data-aos-delay="700">
                    <img src="{{env('APP_URL')}}/assets/img/cardicon4.png" alt="">
                    <h5>Comprehensive Financial Insights</h4>
                    <span>Analyze spending patterns for better financial control and planning.</span>
                </div>
            </div>
        </div>
    {{-- end --}}
    {{-- how its work --}}
        <div class="container my-4 py-5">
            <div class="hiwbox">
                <span class="how">How it works?</span>
                <h2>Just few steps to start</h2>
                <span style="color: var(--sec-color)">It's easier than you think. Follow 3 simple easy steps</span>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 stepcard" data-aos="fade-up-right">
                    <img src="{{env('APP_URL')}}/assets/img/stepimg1.png" alt="">
                    <h5>Register for free</h4>
                    <span>Simply sign up online for free ...</span>
                </div>
                <div class="col-lg-3 col-md-6 col-12 stepcard"  data-aos="zoom-in-up">
                    <img src="{{env('APP_URL')}}/assets/img/stepimg2.png" alt="">
                    <h5>KYC verification</h4>
                    <span>Verify your identity with ease through our KYC process...</span>
                </div>
                <div class="col-lg-3 col-md-6 col-12 stepcard"  data-aos="zoom-in-up">
                    <img src="{{env('APP_URL')}}/assets/img/stepimg3.png" alt="">
                    <h5>Start processing</h4>
                    <span>Initiate seamless transactions with our swift and efficient processing system...</span>
                </div>
                <div class="col-lg-3 col-md-6 col-12 stepcard" data-aos="fade-up-left">
                    <img src="{{env('APP_URL')}}/assets/img/stepimg4.png" alt="">
                    <h5>You're all done!</h4>
                    <span>We inform you when the money has been sent and can also ...</span>
                </div>
            </div>
            <div class="stoday">
                <h4>Start Today</h4>
                <div style="display: flex; flex-direction:row;justify-content:center; align-items:center !important">
                    <p class="create mx-2">Create a free account</p><p><i class="fa-solid fa-arrow-right"></i></p><p class="create mx-2">Unlock a world of financial possibilities</p>
                </div>
                <p>Join thousands of satisfied customers who have already chosen Paysants to experience the difference.
                    Sign up for a free account today and unlock a world of secure, efficient, and hassle-free financial management.</p>
            </div>
        </div>
    {{-- end --}}
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
<script>

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
{{-- <script>  
document.addEventListener("DOMContentLoaded", function() {
	document.addEventListener("scroll", function() {
		getProgress();
	});

	function getProgress() {					
		var topPos = document.documentElement.scrollTop;						
		var remaining = document.documentElement.scrollHeight - document.documentElement.clientHeight;				
		var percentage = (topPos / remaining) * 100;
		document.querySelector(".progress--bar").style.width = percentage + "%";
	}
});
</script> --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 1000, 
            easing: 'ease-in-out', 
            once: true 
        });
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        function animateCounter(element) {
            const target = +element.getAttribute('data-target');
            const duration = 2000; 
            const stepTime = Math.abs(Math.floor(duration / target));
            let current = 0;
    
            function updateCounter() {
                if (current < target) {
                    current++;
                    element.textContent = current + '+';
                    setTimeout(updateCounter, stepTime);
                }
            }
    
            updateCounter();
        }
    
        function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }
    
        const counters = document.querySelectorAll('.counter');
        function checkCounters() {
            counters.forEach(counter => {
                if (isElementInViewport(counter) && !counter.classList.contains('counted')) {
                    counter.classList.add('counted');
                    animateCounter(counter);
                }
            });
        }
    
        window.addEventListener('scroll', checkCounters);
        checkCounters(); // Initial check
    });
    </script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow.js/1.1.2/wow.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-GKwjsm0PHG4lJ6bDhUWunlKVm5+3O/qwBhQmBou/5A3rHx2R3YwDt40FQu59kuA4" crossorigin="anonymous"></script>
</body>
</html>