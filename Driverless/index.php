<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Driverless is a company that provides information about autonomous vehicles, including the Artificial Intelligence (AI) technology that is used to develop these vehicles.">
    <meta name="author" content="Driverless">

    <!-- Website Title -->
    <title>Driverless - Landing Page</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
	
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <a class="navbar-brand logo-text page-scroll" href="index.html">Driverless</a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#intro">INTRO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">TECHNOLOGY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="vehicledisplay.php">VEHICLES</a>
                </li>

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.php"><span class="item-text">TERMS CONDITIONS</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.php"><span class="item-text">PRIVACY POLICY</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="faq.php"><span class="item-text">FAQ</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="userupdate.php">PROFILE</a>
                </li>
            </ul>
        </div>
    </nav> <!-- end of navbar -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>BEST <span id="js-rotating">VEHICLES, AI TECH, OFFERS</span></h1>
                            <p class="p-heading p-large">Driverless is a company specializing in autonomous vehicles using Artificial Intelligence (AI) technology.</p>
                            <a class="btn-solid-lg page-scroll" href="#intro">DISCOVER</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">INTRO</div>
                        <h2>Moving Lives in a New Direction</h2>
                        <p>Autonomous technology is giving people a new kind of freedom – to go when they want, where they want, whilst making the concerns and frustrations with driving a thing of the past.</p>
                        <p class="testimonial-text">"To get a safe road experience for those inside and outside vehicles is the first priority of autonomous vehicles."</p>
                        <div class="testimonial-author">- Driverless -</div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <iframe width="100%" height="300" src="https://www.youtube.com/embed/tlThdr3O5Qo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin-top: 60px;"></iframe>
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->

    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-binoculars fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Hazard Analysis</h4>
                            <p>Hazard analysis is performed on behavioural and embedded controls software, hardware, vehicle platform integration and operations of vehicles before driving in the real world.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-list-alt fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Crash Avoidance</h4>
                            <p>Thousands of crash avoidance tests are completed to analyze the vehicle's response in dangerous situations like pedestrians jaywalking, motorcyclists weaving through traffic or a vehicle suddenly pulling out of driveways.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-chart-pie fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Reliability & Durability</h4>
                            <p>The vehicle requires to work well under extreme environmental conditions during its lifetime. Exposing to ultraviolet radiation, bombarding with powerful water jets, heating and freezing for weeks at a time is done to analyze any weaknesses and continuously make design improvements.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->

    <!-- Services -->
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">TECHNOLOGY</div>
                    <h2>It's Time for Robots<br>to Do the Driving</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->   

    <!-- Details 1 -->
	<div id="details" class="accordion">
		<div class="area-1">
		</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2">
            
            <!-- Accordion -->
            <div class="accordion-container" id="accordionOne">
                <h2>How it Works</h2>
                <div class="item">
                    <div id="headingOne">
                        <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                            <span class="circle-numbering">1</span><span class="accordion-title">Keeping an Eye on All at Once</span>
                        </span>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOne">
                        <div class="accordion-body">
                            The vehicle's perception system takes complex data gathered from its advanced sensors, and deciphers what's around it through technology like machine learning - from vehicles to construction, pedestrians to cyclists, and more. It also responds to signs and signals, like traffic light colours and temporary stop signs.
                        </div>
                    </div>
                </div> <!-- end of item -->
            
                <div class="item">
                    <div id="headingTwo">
                        <span class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                            <span class="circle-numbering">2</span><span class="accordion-title">Predicting Before Things Happen</span>
                        </span>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOne">
                        <div class="accordion-body">
                            Driving situations may involve several objects, each with their own unique behaviors and intentions.  The AI understands how a car moves differently than a pedestrian, cyclist, or any other object, and then predicts possible paths that the other road users may take in the blink of an eye.
                        </div>
                    </div>
                </div> <!-- end of item -->
            
                <div class="item">
                    <div id="headingThree">
                        <span class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                            <span class="circle-numbering">3</span><span class="accordion-title">Planning for the Safest Outcome</span>
                        </span>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOne">
                        <div class="accordion-body">
                            The AI takes all information from its highly-detailed maps, what objects are around and where they might go and then plans to take the best route. It instantly determines the exact speed, trajectory, lane, and steering maneuvers required to behave safely throughout its journey.
                        </div>
                    </div>
                </div> <!-- end of item -->
            </div> <!-- end of accordion-container -->
            <!-- end of accordion -->

		</div> <!-- end of area-2 -->
    </div> <!-- end of accordion -->
    <!-- end of details 1 -->

    <!-- Details 2 -->
	<div class="tabs">
        <div class="area-1">
            <div class="tabs-container">
                
                <!-- Tabs Links -->
                <ul class="nav nav-tabs" id="ariaTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-th"></i> Vision</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-th"></i> Backups</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-th"></i> Testing</a>
                    </li>
                </ul>
                <!-- end of tabs links -->
                
                <!-- Tabs Content -->
                <div class="tab-content" id="ariaTabsContent">

                    <!-- Tab -->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <h4>Seeing the Road in Multiple Dimensions</h4>
                        <p>A single integrated system of sensors and compute provides a comprehensive view whether it's near or far, day or night.</p>
                        
                        <!-- Progress Bars -->
                        <div class="progress-container">
                            <div class="title">Traffic Efficiency 100%</div>
                            <div class="progress">
                                <div class="progress-bar first" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="title">Prevention of Car Crashes 76%</div>
                            <div class="progress">
                                <div class="progress-bar second" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="title">Environmentally Friendly 90%</div>
                            <div class="progress">
                                <div class="progress-bar third" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div> <!-- end of progress-container -->
                        <!-- end of progress bars -->
                        
                    </div> <!-- end of tab-pane --> 
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                        <ul class="list-unstyled li-space-lg first">
                            <li class="media">
                                <div class="media-bullet">1</div>
                                <div class="media-body"><strong>Secondary computer</strong> stops the vehicle if failure of the primary sytem is detected</div>
                            </li>
                            <li class="media">
                                <div class="media-bullet">2</div>
                                <div class="media-body"><strong>Collision detection and avoidance systems</strong> are always vigilant</div>
                            </li>
                            <li class="media">
                                <div class="media-bullet">3</div>
                                <div class="media-body"><strong>Redundant braking</strong> provides a safe stop if needed</div>
                            </li>
                        </ul>
                        <ul class="list-unstyled li-space-lg last">
                            <li class="media">
                                <div class="media-bullet">4</div>
                                <div class="media-body"><strong>Redundant steering</strong> with independent controllers and separate power supplies</div>
                            </li>
                            <li class="media">
                                <div class="media-bullet">5</div>
                                <div class="media-body"><strong>Backup power systems</strong> are provided for each of the critical driving systems</div>
                            </li>
                            <li class="media">
                                <div class="media-bullet">6</div>
                                <div class="media-body"><strong>Cybersecurity</strong> protects from malicious activity</div>
                            </li>
                        </ul>
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                        <p><strong>Testing</strong> is the backbone of everything.</p>
                        <p><strong>Putting tech to the test</strong>, the vehicles are rigorously put through more challenging scenarios than those encountered on the road to validate federal safety regulations and guidelines.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Closed courses</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Public roads</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Simulations</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Crash avoidance</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Hazard analysis</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Reliability & Durability</div>
                            </li>
                        </ul>
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                </div> <!-- end of tab-content -->
                <!-- end of tabs content -->

            </div> <!-- end of tabs-container -->
        </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2"></div> <!-- end of area-2 -->
    </div> <!-- end of tabs -->
    <!-- end of details 2 -->

    <!-- Testimonials -->
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Read Our User Testimonials</h2>
                    <p class="p-heading">Explore diverse perspectives on autonomous driving.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/Brian.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">With autonomous driving technology, no matter what disability you have,  you not only get to and from where you need to go, but also you have that extra safety.</div>
                                            <div class="testimonial-author">Brian</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/Brennan.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">After getting epilepsy, a lot of adults realize driving is going to be a major issue. I think autonomous vehicles will be very helpful for transportation.</div>
                                            <div class="testimonial-author">Brennan Feldman</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/Max.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Transportation is a significant challenge of being blind because I can't drive. The potential of self-driving cars is just limitless.</div>
                                            <div class="testimonial-author">Max</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/Kelly.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I think self-driving vehicles are absolutely a game-changer. I believe that they are the key to driving down fatalities in the future.</div>
                                            <div class="testimonial-author">Kelly</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/Santos.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Being able to have dignified, reliable and safe transportation is an absolute turning point for our senior population.</div>
                                            <div class="testimonial-author">Santos</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/Barbara.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">The best solution will be to place autonomous vehicles on our roadways and take driver error out of the equation if this epidemic of road fatalities does not being to subside.</div>
                                            <div class="testimonial-author">Barbara</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                            
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of sliedr-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of testimonials -->

    <!-- About -->
    <div id="about" class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/About.jpg" alt="about us">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7 col-xl-6">
                    <div class="text-container">
                        <div class="section-title">ABOUT</div>
                        <h2>We're Passionate About AI Tech Used in Developing Self-driving Vehicles</h2>
                        <p>Our goal is to provide safety and ease to get around without the need for anyone in the driver’s seat.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Autonomous driving means nothing without safe driving.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Autonomous vehicles can improve the world's access to mobility while saving thousands of lives now lost to traffic crashes.</div>
                            </li>
                        </ul>

                        <!-- Counter -->
                        <div id="counter">
                            <div class="cell">
                                <div class="counter-value number-count" data-count="3700">1</div>
                                <div class="counter-info">deaths worldwide due to vehicle crashes everyday</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="1472">1</div>
                                <div class="counter-info">road fatalities<br>in the UK<br>in 2020</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="95">1</div>
                                <div class="counter-info">percent of crashes<br>involve human error<br>in the UK</div>
                            </div>
                        </div>
                        <!-- end of counter -->

                    </div> <!-- end of text-container -->      
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of about -->

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>Get In Touch With Us</h2>
                        <p>You can use the contact form below for any questions and inquiries. Before submitting the form, please read the <a href="faq.php" style="color: black;"><b>FAQs</b></a> to know if your questions are already answered.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>22nd Innovative Street, San Francisco, CA 94043, US</li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+81 720 22 126</a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+81 720 22 128</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:office@driverless.com">office@driverless.com</a></li>
                        </ul>
                        <h3>Follow Driverless On Social Media</h3>

                        <span class="fa-stack">
                            <a href="https://www.facebook.com/">
                                <span class="hexagon"></span>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.twitter.com/">
                                <span class="hexagon"></span>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.pinterest.com/">
                                <span class="hexagon"></span>
                                <i class="fab fa-pinterest fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/">
                                <span class="hexagon"></span>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://mm.linkedin.com/">
                                <span class="hexagon"></span>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#https://www.behance.net/">
                                <span class="hexagon"></span>
                                <i class="fab fa-behance fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false" action="index.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="txtUsername" name="txtUsername" value="<?php if (isset($_SESSION['username'])) { echo $_SESSION['username']; } else { echo "Please Login First."; } ?>" required>
                            <label class="label-control" for="txtUsername">Username</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="txtEmail" name="txtEmail" value="<?php if (isset($_SESSION['email'])) { echo $_SESSION['email']; } ?>" required>
                            <label class="label-control" for="txtEmail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="txtComment" name="txtComment" required></textarea>
                            <label class="label-control" for="txtComment">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I agree with Driverless's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a> 
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button" name="btnSubmit">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>Few Words About Driverless</h4>
                        <p class="white">We're passionate about providing the best information for everyone who are interested in autonomous vehicles and AI Tech.</p>
                        <script src="https://cdn.logwork.com/widget/countdown.js"></script>
                        <a href="https://logwork.com/countdown-rsb7" class="countdown-timer" data-timezone="America/Los_Angeles" data-textcolor="#ffffff" data-date="2021-12-25 08:00" data-unitscolor="#ffffff">Christmas Discounts</a>
                        <h4>Join Our Newsletter</h4>
                        <form action="index.php" method="POST">
                            <input type="email" name="emailnews" placeholder="Enter your email" style="width: 70%; height: 3.125rem; border-radius: 0.25rem;">
                            <button type="submit" class="form-control-submit-button" name="btnsignupnews" style="width: 20%;">JOIN</button>
                        </form>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Links</h4>
                        <ul class="list-unstyled li-space-lg white">
                            <li>
                                <a class="white" href="faq.php">FAQ</a>
                            </li>
                            <li>
                                <a class="white" href="terms-conditions.php">Terms & Conditions</a>
                            </li>
                            <li>
                                <a class="white" href="privacy-policy.php">Privacy Policy</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Newsfeed</h4>
                        <ul class="list-unstyled li-space-lg white"> 
                            <li>
                                <a class="white" href="https://www.bmw.sr/en/topics/fascination-bmw/bmw-personal-copilot.html">BMW</a>
                            </li>
                            <li>
                                <a class="white" href="https://news.mit.edu/topic/autonomous-vehicles">MIT News</a>
                            </li>
                            <li>
                                <a class="white" href="https://www.autonews.com/topic/autonomous-vehicle">Automotive News</a>
                            </li>
                        </ul>
                        <div id="google_translate_element"></div>
                        <script> 
                            function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en'
                            }, 'google_translate_element');
                            }
                        </script>
                        <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <!-- weather widget start -->
                        <div id="m-booked-vertical-one-prime-66726"> 
                            <div class="weather-customize weather-booked-vertical-one-prime" style="width:180px;">  
                                <div class="booked-vertical-prime-in"> 
                                    <div class="booked-vertical-prime"> 
                                        <div class="bwop-city">San Francisco</div> 
                                            <div class="bwop-icon wm18 "></div> 
                                                <div class="booked-bwop-today"> 
                                                    <div class="booked-bwop-today-temperature"> 
                                                        <div class="booked-wzs-bwop-val"> 
                                                            <div class="booked-bwop-number"><span class="plus">+</span>15</div> 
                                                            <div class="booked-bwop-dergee"> 
                                                                <div class="booked-wzs-bwop-dergee-val">&deg;</div> 
                                                                <div class="booked-wzs-bwop-dergee-name">C</div> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="booked-bwop-today-extreme"> 
                                                        <div class="booked-bwop booked-pd-h"><span>High:</span><span class="plus">+</span>16</div> 
                                                        <div class="booked-bwop booked-pd-l"><span>Low:</span><span class="plus">+</span>14</div> 
                                                    </div> 
                                                </div> 
                                        <div class="bwop-state"> Rain </div> 
                                    </div> 
                                </div> 
                            </div> 
                        </div>
                                <script type="text/javascript"> 
                                    var css_file=document.createElement("link"); 
                                    var widgetUrl = location.href; 
                                    css_file.setAttribute("rel","stylesheet"); 
                                    css_file.setAttribute("type","text/css"); 
                                    css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-prime-vertical-one.css?v=0.0.1'); 
                                    document.getElementsByTagName("head")[0].appendChild(css_file); 
                                    function setWidgetData_66726(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-vertical-one-prime-66726'); 
                                    if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); 
                                    objMainBlock.innerHTML = data.results[i].html_code; 
                                    if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=18163;type=7;scode=124;ltid=3458;domid=w209;anc_id=53319;countday=undefined;cmetric=1;wlangID=1;color=137AE9;wwidth=180;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";
                                    widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';rand_id=66726';
                                    var weatherBookedScript = document.createElement("script"); 
                                    weatherBookedScript.setAttribute("type", "text/javascript"); 
                                    weatherBookedScript.src = widgetSrc; 
                                    document.body.appendChild(weatherBookedScript) 
                                </script>
                        <!-- weather widget end -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 - 2021 Driverless</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
        	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>

<?php

include('connect.php');

if (isset($_POST['btnSubmit'])) 
{
    $userid = $_SESSION['userid'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $comment = $_POST['txtComment'];

    $insert = "INSERT INTO contactus(UserID,Username,Email,Comment)
               VALUES('$userid','$username','$email','$comment')";
    $query = mysqli_query($connection,$insert);
    if ($query) 
    {
        echo "<script>alert('Your message was sent successfully.');</script>";
    }
}

if (isset($_POST['btnsignupnews'])) 
{
    $emailnews = $_POST['emailnews'];

    $insertemail = "INSERT INTO newsletter(Email)
                    VALUES('$emailnews')";
    $run = mysqli_query($connection,$insertemail);
    if ($run) 
    {
        echo "<script>alert('You have successfully subscribed to our newsletter.');</script>";
    }
}

?>