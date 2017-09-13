
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TEDx NcuIndia :Uncliched-">
    <meta name="author" content="E-Cell"> 
    <link rel="shortcut icon" href="favicon.ico" />
    <title>TEDx NcuIndia</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.btn-danger {
    color: #fff;
    background-color: #ff2b06;
    border-color: #ff2b06;
}

pqwer {
  text-align: center;
  font-size: 60px;
}
</style>




</head>





<body id="page-top" class="index">

<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><img src="images/logo11.png" class="img-responsive" alt="TEDx  NcuIndia"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#page-top">home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Speakers</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio1">team</a>
                    </li>
                    <li class="page-scroll">
                        <a href="https://www.flickr.com/photos/152831292@N02/with/36172831905/ " target = "_blank">Gallery</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index1.html">Past Talks</a>
                    </li>
                   <!--<li class="page-scroll">
                        <a href="sponsers.html">Sponsors</a>
                    </li>
                    -->
                    

                    <li class="page-scroll">
                    <button type="button" class="btn btn-danger" style="font-size: 24px;   margin-left: 15px; " data-toggle="modal" data-target="#myModal">Register</button>
                    <!--<button class="button" style="vertical-align:middle"><span>Register </span></button>-->	
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>





     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">TEDx '17 Registration</h4>
        </div>
        <div class="modal-body">
         <iframe src="https://goo.gl/forms/q4WBRDGxgRvzwaLB2" frameborder="0" style="width:100%;" height="900"></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <!--<img class="img-responsive" src="img/profile.png" alt="">-->
                    <div class="intro-text">
                        <h1 class="name">CTRL+ALT+DEL Reset the way you think this October 28<sup>th</sup></h1>
                       
                        <pqwer id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("October 28, 2017 09:00:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
</span>
                        <h2>Witness !deas brewing this October 28<sup>th</sup></h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>SPEAKERS</h2>
                    <hr class="star-primary">
                </div>
            </div>
           <!-- <h1 style="text-align: center;"> COMING SOON </h1>-->
            



            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                            	<p>Onkar Khullar</p>
							<p>Entrepreneur, Author</p>
						
    
                            </div>
                        </div>
                        <img src="images/speakers/ok1.png" class="img-responsive" alt="Cabin">
                    </a>
                </div>
				<div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                            <p>Rahul Tyagi</p>
							<p>Co-Founder Lucideus</p>
                            </div>
                        </div>
                        <img src="images/speakers/rt1.jpg" class="img-responsive" alt="Slice of cake">
                    </a>
                </div>
				
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                               <p>Nazia Erum</p>
							<p>Communication Specialist, Writer</p>
                            </div>
                        </div>
                        <img src="images/speakers/na1.jpg" class="img-responsive" alt="Circus tent">
                    </a>
                </div>
				
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <p>Rahul Arya</p>
							<p>Sand Artist, Actor</p>
                            </div>
                        </div>
                        <img src="images/speakers/ra1.jpg" class="img-responsive" alt="Game controller">
                    </a>
                </div>
				
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                 <p>Khurafati Nitin</p>
							<p>Radio Jockey</p>
                            </div>
                        </div>
                        <img src="images/speakers/kn.jpg" class="img-responsive" alt="Safe">
                    </a>
                </div>
				
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                 <p>Ustad Ajmad Ali Khan</p>
							<p>Musician</p>
                            </div>
                        </div>
                        <img src="images/speakers/alk1.jpg" class="img-responsive" alt="Submarine">
                    </a>
                </div>
            </div>
           
        </div>
    </section>

    

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>ABOUT</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <h4 style="text-align:center;"> TED </h4>
                    <p style="text-align:justify;">TEDx is an amazing community made of people that organize incredible events around the world. TEDx was created in the spirit of TED’s mission, “ideas worth spreading.” The program is designed to give communities, organizations and individuals the opportunity to stimulate dialogue through TED-like experiences at the local level.</p>
                </div>
                <div class="col-lg-4">
                    <h4 style="text-align:center;"<>TEDx The Northcap University </h4>
                    <p style="text-align:justify;">In the spirit of ideas worth spreading, TEDxTheNorthcapUniversity is back after three years, and with it brings an indispensable opportunity of erudition. Our talks today aim to curate a journey of enlightenment, aided by brilliant ideas shared by diverse speakers. The TEDxTheNorthcapUniversity 2017 conference will promise to bring out ideas niched behind the barriers, be it societal or shrouded in the subconscious. We hope TEDxTheNorthcapUniversity 2017 will help making a difference in perspective and aids in unearthing what really matters today, for a better tomorrow.</p>
                </div>
                <!--<div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <bold> For More!</bold>
                    </a>
                </div>-->
            </div>
        </div>
    </section>
   

    <!--Portfolio section-->
    <section id="portfolio1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>TEAM</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center" style="padding-left:45px;padding-right:45px;">
                <img src="images/team/kshitij.jpg" class="img-responsive img-circle" alt="">
                    <p style="font-family:SansRegular;font-size:1.2em;margin-bottom:0;font-weight:bold;text-align:center;">kshitiz Kaushik</p>
                    <p style="font-family:SansLight;margin-bottom:0;font-size:1.1em;text-align:center;">Hospitality & Registration</p>
                    <p style="font-family:SansLightIt;font-size:0.9em;margin-bottom:0;text-align:center;"></p>
                    <ul class="list-inline social-buttons">
                            
                        <li><a href="https://www.linkedin.com/in/kshitez-kaushik-28b34989" target="_blank"><img src="images/ln.png" aria-hidden="true" style="color: black;"></i>
</a></li>
                        <!--<li><a href="/cdn-cgi/l/email-protection#8de6e0ece3ecfecde4e4f9e6a3eceea3e4e3" target="_blank"><i class="fa fa-envelope-o" style="color: black;"></i></a></li>-->
                    </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center" style="padding-left:45px;padding-right:45px;">
                <img src="images/team/ab.jpg" class="img-responsive img-circle" alt="">
                    <p style="font-family:SansRegular;font-size:1.2em;margin-bottom:0;font-weight:bold;text-align:center;">Abhishek Barry</p>
                    <p style="font-family:SansLight;margin-bottom:0;font-size:1.1em;text-align:center;">Media & Publicity</p>
                    <ul class="list-inline social-buttons">
                            
                       <li><a href="https://www.linkedin.com/in/abhishek-barry-631672112" target="_blank"><img src="images/ln.png" aria-hidden="true" style="color: black;"></i>
                        </a>
                        </li>
                    </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center" style="padding-left:45px;padding-right:45px;">
                <img src="images/team/kartavya.JPG" class="img-responsive img-circle" alt="">
                    <p style="font-family:SansRegular;font-size:1.2em;margin-bottom:0;font-weight:bold;text-align:center;">Kartavya Atri</p>
                    <p style="font-family:SansLight;margin-bottom:0;font-size:1.1em;text-align:center;">Student Coordinator</p>
                     <p style="font-family:SansLightIt;font-size:0.9em;margin-bottom:0;text-align:center;"></p>
                    
                   
                    <ul class="list-inline social-buttons">
                            
                           <li><a href="https://www.linkedin.com/in/kartavya-atri-69626510a" target="_blank"><img src="images/ln.png" aria-hidden="true" style="color: black;"></i>
                        </ul>
                        </a>
                        </li>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center" style="padding-left:45px;padding-right:45px;">
                <img src="images/team/Vishal.jpg" class="img-responsive img-circle" alt="">
                    <p style="font-family:SansRegular;font-size:1.2em;margin-bottom:0;font-weight:bold;text-align:center;">Vishal Kanwar</p>
                    <p style="font-family:SansLight;margin-bottom:0;font-size:1.1em;text-align:center;">Graphic Designing</p>
                   <p style="font-family:SansLightIt;font-size:0.9em;margin-bottom:0;text-align:center;"></p>
                    <ul class="list-inline social-buttons">
                            
                        <li><a href="https://www.linkedin.com/in/vishal-kanwar-05024b116/" target="_blank"><img src="images/ln.png" aria-hidden="true" style="color: black;"></i>
                        </ul>
                        </a>
                        </li>
            </div>

        </div>
        
        <div class="row" style="margin-bottom:10vh;">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center" style="padding-left:45px;padding-right:45px;">
                <img src="images/team/sushma.JPG" class="img-responsive img-circle" alt="">
                    <p style="font-family:SansRegular;font-size:1.2em;margin-bottom:0;font-weight:bold;text-align:center;">Sushma Yellapragada</p>
                    <p style="font-family:SansLight;margin-bottom:0;font-size:1.1em;text-align:center;">Creativity</p>
                     <p style="font-family:SansLightIt;font-size:0.9em;margin-bottom:0;text-align:center;"></p>
                    <ul class="list-inline social-buttons">
                            
                       <li><a href="https://www.linkedin.com/in/sushma-yellapragada-5781b9126/" target="_blank"><img src="images/ln.png" aria-hidden="true" style="color: black;"></i>
                        </ul>
                        </a>
                        </li>
                    
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center" style="padding-left:45px;padding-right:45px;">
                <img src="images/team/sb.jpg" class="img-responsive img-circle" alt="">
                    <p style="font-family:SansRegular;font-size:1.2em;margin-bottom:0;font-weight:bold;text-align:center;">Sahil Bansal</p>
                    <p style="font-family:SansLight;margin-bottom:0;font-size:1.1em;text-align:center;">Registrations</p>
                     <p style="font-family:SansLightIt;font-size:0.9em;margin-bottom:0;text-align:center;"></p>
                      <ul class="list-inline social-buttons">
                    <li><a href="https://www.linkedin.com/in/sahil-bansal-93b58788" target="_blank"><img src="images/ln.png" aria-hidden="true" style="color: black;"></i>
                        </ul>
                        </a>
                        </li>
                    
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center" style="padding-left:45px;padding-right:45px;">
                <img src="images/team/rishabh.jpeg" class="img-responsive img-circle" alt="">
                    <p style="font-family:SansRegular;font-size:1.2em;margin-bottom:0;font-weight:bold;text-align:center;">Rishabh Singhal</p>
                    <p style="font-family:SansLight;margin-bottom:0;font-size:1.1em;text-align:center;">Content Writing</p>
                        <p style="font-family:SansLightIt;font-size:0.9em;margin-bottom:0;text-align:center;"></p>
                      <ul class="list-inline social-buttons">
                    <li><a href="https://www.linkedin.com/in/rishabh-singhal-497686aa" target="_blank"><img src="images/ln.png" aria-hidden="true" style="color: black;"></i>
                        </ul>
                        </a>
                        </li>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center" style="padding-left:45px;padding-right:45px;">
                <img src="images/team/prateek.jpg" class="img-responsive img-circle" alt="">
                    <p style="font-family:SansRegular;font-size:1.2em;margin-bottom:0;font-weight:bold;text-align:center;">Prateek Arora</p>
                    <p style="font-family:SansLight;margin-bottom:0;font-size:1.1em;text-align:center;">Web</p>
                       <p style="font-family:SansLightIt;font-size:0.9em;margin-bottom:0;text-align:center;"></p>
                      <ul class="list-inline social-buttons">
                     <li><a href="https://www.linkedin.com/in/prateek-arora-1b3209104" target="_blank"><img src="images/ln.png" aria-hidden="true" style="color: black;"></i>
                        </ul>
                        </a>
                        </li>
            </div>
        </div>
    </section> 

    <section id="portfolio1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>FACULTY ADVISOR</h3>
                    <hr class="star-primary">
                </div>


                                
            <div class="row">
                <div class="col-lg-3">
                    <img src="images/speakers/jyotika.jpg" class="img-responsive" alt="Submarine">
                </div>

                <div class="col-lg-8">
                    
                    <p style="text-align:justify;">Ms Jyotika Pruthi completed her journey of graduation (BTech) from MDU Rohtak and carried forward her academics with completion of post-graduation (M.Tech) from Banasthali University. She is pursuing PhD from NCU Gurugram. She has undergone an industrial training from iGate PATNI, Noida. She has published 20 research papers in International Journals and Conferences including IEEE (London, UK) and Springer (Las Vegas, USA). She worked under the professor of IIT Bombay and presented her research findings at IIT Bombay, IIT Madras and IIM Ahmedabad. She has won many awards along with the Interscience Young Investigator Researcher award for best paper and best poster presentation in various International Conferences. She has twice won the IET UK, Delhi Network Young Professionals PATW Competition (Presentation) at Northern Zone Level and recently even won the Best Paper Award at International Conference in JNU, New Delhi. She was awarded for demonstrating few projects in Vigyan Mela at Miranda House, Delhi University. She has even undertaken the project of Content Writing for a firm. Her articles have also been published in leading newspapers, online portals like CSR Times and Wisdom Blow. Her area of interest includes Digital Image Processing, Biomedical Engineering and Artificial Intelligence.

  </p>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Reach Us</h3>
                        <p>The NorthCap University
                            <br>+91-9953220240<br></p>
                         
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Also available on</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/tedxthenorthcap/" target="_blank"><img src="images/fb.png"></a>
                            </li>
                           
                            <li>
                                <a href="https://www.instagram.com/tedx_thenorthcapuniversity/" target="_blank"><img src="images/instagram.png"></a>
                            </li>
                            <li>
                               <a href="https://www.youtube.com/user/ITMUGurgaon" target="_blank"><img src="images/Youtube-icon.png"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About TEDx The NorthCap University</h3>
                        <p>TEDx The NorthCap University aims at building a TED like environment  in order to bring new ideas and innovations to the fore. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        © Copyright 2017   |   All Rights Reserved   |   Website developed by Web Team, The NorthCap University, Gurgaon   |   This TEDx event is independently organized.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Onkar Khullar</h2>
                            <hr class="star-primary">
                            <img src="images/speakers/ok.png" class="img-responsive img-centered" alt="">
                            <p>Onkar Kishan Khullar is India’s First Cause Artist: Using his creative skills for the good of the world. He is popularly known as “Digital Gandhi”, “OK” or “Gareebo Ka Steve Jobs”. he’s a person with 10 lives moving ahead with the talisman “My Destiny is Sealed, but The Journey is my Choice”.
He’s an author and blogger: had written 3 books and more on counting. A social entrepreneur: started various social ventures including JAR Jewelry and I Impact India partners. A TEDx speaker: has given engaging workshops & speaker sessions across the nation. A storyteller: runs a successful presentation design firm which provides end to end solutions regarding Speeches and Presentation. A Philosopher: at the age of 22 he started his own way of life called The 5 Year Old Philosophy. A Brand Creator: since half a decade he has been creating new brands and revamping old ones. A Scientist: Constantly Experimenting with his Body, Mind and Companies by creating theories. An Artist: He believes he is the pencil in the hands of GODS and create art pieces out of waste material. A Cause Consultant: provides creative solutions to Non-Profits and CSR wings. And Digital Gandhi: In 2016, he has pledged to Spearhead India’s Social Entrepreneurship Movement amongst the youth called ‘digital Gandhi’.
Achievements:
•   Received the Pride of India Award from Nidhi Foundation for Innovative CSR and Cause Marketing.
•   Karmaveer Chakra form ICONGO for the youngest cause consultant in the world.
•   Listed among the top 50 social entrepreneurs in the world.
•   Started his own company, I Impact India at the age of 21, creating a niche for himself as the youngest consultant in the cause Branding & Marketing Industry Internationally.
•   His first stint at entrepreneurship came in the form of I Impact India partners. He then went on to launch his second venture called presentation. Ink. 
•   He is the on the board advisors for various non-profits in India and is the Consulting Director of the UK Based Innovation Firm Chakraviyuh.
•   He is well renowned for introducing a new way of life called 5 year Old Philosophy through his book 5-year-old Billionaire.</p>
                            <ul class="list-inline item-details">
                                
                                <li>Date:
                                    <strong>28<sup>th</sup>October 2017
                                    </strong>
                                </li>
                                
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Rahul Tyagi</h2>
                            <hr class="star-primary">
                            <img src="images/speakers/rt.jpg" class="img-responsive img-centered" alt="">
                            <p>Rahul Tyagi VP-Lucideus Training is a post-graduate with majors in Computer Science and has conducted to his account, more than a hundred training sessions globally in past 5 years. Being a cyber space researcher himself, Rahul can claim to have found critical vulnerabilities on websites of VMware,Forbes, Intel, Sony, HP, Discovery Networks, TED and many more. He is also listed in BlackBerry Hall of Fame for his contributions to the organization. A Published Author of two books - Hacking Crux 1 & 2 - both on information security. He has been covered extensively by the global media and is one of the most followed Indian Information Security Expert on various social media platforms.</p>
                            <ul class="list-inline item-details">
                                
                                <li>Date:
                                    <strong>28<sup>th</sup>October 2017
                                    </strong>
                                </li>
                                
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Nazia Erum</h2>
                            <hr class="star-primary">
                            <img src="images/speakers/na.jpg" class="img-responsive img-centered" alt="">
                            <p>An authur, TEDx Speaker, communications consultant and startup enthusiast. Her core expertise being multimedia communications strategy and application across industries. 

From being trained as a journalist to being the youngest Indian to represent south-east Asia at the Global Fund Board, Nazia Erum believes in serially reinventing herself. Previously, she had at the age of 19years, been the co-founder of the citizen journalism based startup, Purdafash.com which had raised seed funding much before startups became a buzzword in India. Now she runs TheLuxuryLabel.in, an Indian workwear brand for women. 

She has researched and authored many publications for lead development organisations, documenting their work processes and growth story. Some of these are 'Closer to ground' for UNDP, 'Art of Resilience' for Francois-Xavier Bagnound India and the 140 yrs commemoration book of extensively researched stories for TLMTI's Princess Diana Center for Media. She has worked at startups, development sector, multilateral organizations and at MoHFW.

She also writes at CNN News18, Daily O and HuffingtonPost and is a panellist at various gender summits and television news debates. Next up is a book on Mothering a Muslim (JuggernautBooks) and a compilation of her experiences while working at the United Nations. She is also a winner of the Orange Flower Awards.</p>
                            <ul class="list-inline item-details">
                               
                                <li>Date:
                                    <strong>28<sup>th</sup>October 2017
                                    </strong>
                                </li>
                                
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Rahul Arya</h2>
                            <hr class="star-primary">
                            <img src="images/speakers/ra.jpg" class="img-responsive img-centered" alt="">
                            <p>Rahul Arya is India's First Sand Artist. He showcased his art on Indian television on SONY, Star Plus, Colors, CNN IBN, NDTV India & many more. His artwork & storytelling has been critically appreciated by Sachin Tendulkar, Shahrukh Khan & many more. Internationally Acclaimed Sand Artist Performed over 500 shows worldwide from entertainment, Private, corporate to Bollywood. His Amazing Art got him Standing Ovation.
 </p>
                            <ul class="list-inline item-details">
                               
                                <li>Date:
                                    <strong>28<sup>th</sup>October 2017
                                    </strong>
                                </li>
                                
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Khurafati Nitin</h2>
                            <hr class="star-primary">
                            <img src="images/speakers/kn1.jpg" class="img-responsive img-centered" alt="">
                            <p>I am Khurafati Nitin . I host the Reverse Drive Prime Time show, 5:00PM-9:00PM, Monday to Friday on 92.7 BIG FM Delhi.
In all humility i also would like to tell you that i am the most awarded radio jockey of India. I started my radio career over 17 years back, with All india Radio. 
I have been awarded the RAPA award, Promaxx award,Paranshree award,Media Federation of India Award(thrice),Indian Achiever's award for the best Radio jockey across India 2012 and 2014 for my CSR initiatives on radio and three prestigious New York Festival Awards.</p>
                            <ul class="list-inline item-details">
                               
                                <li>Date:
                                    <strong>28<sup>th</sup> October 2017
                                    </strong>
                               
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Ustaad Ajmad Ali Khan</h2>
                            <hr class="star-primary">
                            <img src="images/speakers/alk.jpg" class="img-responsive img-centered" alt="">
                            <p>Amjad Ali Khan (IAST: Amjad Ali Khan, Devanagari: अमजद अली ख़ान) (born 9 October 1945) is an Indian classical musician who plays the Sarod. Khan was born into a musical family and has performed internationally since the 1960s. He was awarded India's second highest civilian honor Padma Vibhushan in 2001.Khan first performed in the United States in 1963 and continued into the 2000s, with his sons. He has experimented with modifications to his instrument throughout his career. Khan played with the Hong Kong Philharmonic Orchestra and worked as a visiting professor at the University of New Mexico. In 2011, he performed on Carrie Newcomer's album Everything is Everywhere</p>
                            <ul class="list-inline item-details">
                                
                                <li>Date:
                                    <strong>28<sup>th</sup> October 2017
                                    </strong>
                                </li>
                                
                            </ul>
                            <button id="btnSubmit" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

    <!--GoogleAnalytics Plugin-->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96752096-1', 'auto');
  ga('send', 'pageview');

    </script>

</body>

</html>
