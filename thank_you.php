<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

   $tz = 'Asia/Kolkata';   
   date_default_timezone_set($tz);
    $mail = new PHPMailer;
    try {
        // Server settings
        $mail->SMTPDebug = 0;                                       // Disable verbose debug output
        $mail->isSMTP();                                           // Set mailer to use SMTP
        $mail->Host = 'smtp.hostinger.com';                  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                                  // Enable SMTP authentication
        $mail->Username   = 'info@naivedyacab.com';               // SMTP username
        $mail->Password   = 'Connect@nc1234';                  // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                  // TCP port to connect to

        // Recipients imesystem02@gmail.com	Ime@innovate$
        $mail->setFrom('info@naivedyacab.com', 'Naivedya Cab');
        $mail->addAddress('er.prakashpanthi@gmail.com');                 // Add a recipient

    
        //........add...
        $date = date('Y-m-d h:i A'); 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $mobile = htmlspecialchars($_POST['mobile']);
            $pickup = htmlspecialchars($_POST['pickup']);
            $drop = htmlspecialchars($_POST['drop']); 
            
            $email_body = "
            <html>
            <head>
                <title>Enquary Form Submission</title>
            </head>
            <body>
                <h2>Enquary Form Submission</h2>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Mobile:</strong> {$mobile}</p>
                <p><strong>Mobile:</strong> {$pickup}</p>
                <p><strong>Mobile:</strong> {$drop}</p>
                <p><strong>Message:</strong><br>{$date}</p>
            </body>
            </html>";

        }
        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = 'New Enquary from naivedyacab.com | '.$date;
        $mail->Body    = $email_body;
        $mail->send();
        echo 'Email has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    } 


    $base_url = 'https://naivedyacab.com/';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naivedya cab | taxi service in durg, Chhattisgarh</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./fav/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container w-100 padding-x">
            <a class="navbar-brand" href="<?php echo $base_url;?>">
                <img src="navedya_cab_logo.jpeg" class="mb-1" height="50px" alt="brand logo">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="">
                    <img src="./images/menu.webp" height="18" alt="navbar menu icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 me-auto me-lg-0 ms-lg-auto mb-lg-0 d-flex gap-4 text-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo $base_url;?>#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url;?>#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url;?>#price">Price</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url;?>#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url;?>#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <main data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" class="scrollspy-example">
       


        <!-- Services Section -->
    <br>
    <br>
        <div id="services">
            <section class="section padding-x padding-y">
                <div class="container">
                    <h2 class="section__title mt-4 mt-md-0">Thank You For Enquary.</h2>
                <center><h3>  <a>We will connect you shortly. <br> 
                For more information call : <a href="tel=+919826147544">+91 9826147544</a> <br>
            24/7 Available</h3> </center> 

                </div>
            </section>
            <!-- Services Section -->
 

             
 

            <!-- Our Best Tariff Plans -->
            <section class="section container padding-x padding-y">
                <h2 class="section__title mt-4 mt-md-0">OUR RATE START FROM</h2>
                <table
                    class="table table-striped table-bordered table-hover rounded-4 overflow-hidden w-75 mx-auto pricing__table">
                    <tbody>
                        <tr>
                            <td>Hatchback</td>
                            <td>Rs 9/Km</td>
                        </tr>
                        <tr>
                            <td>Sedan</td>
                            <td>Rs 10/Km</td>
                        </tr>
                        <tr>
                            <td>Suv</td>
                            <td>Rs 14/Km</td>
                        </tr>
                        <tr>
                            <td>Suv +</td>
                            <td>Rs 15/Km</td>
                        </tr>
                        <tr>
                            <td>LUXURY </td>
                            <td>On Demand</td>
                        </tr>
                    </tbody>
                </table>
                <p align="right" > T&C Applied*</p>
                <center> <h2>Our Service Area</h2> 
                <h3>1. Durg 2. Bilaspur 3. Raipur 4.Raigarh 5. Korba 6. Jagdalpur 7. Ambikapur 8. Kawardha</h3> 
            </center>
                <p>

                </p>
            </section>
            <!-- Our Best Tariff Plans -->

            <!-- Our Team -->
            <!-- <section class="section padding-x padding-y bg-light">
                <div class="container">
                    <h2 class="section__title mt-4 mt-md-0">OUR TEAM</h2>
                    <div class="row">
                      <center><div class="col-12 col-sm-6 col-md-3 p-sm-5 text-center">
                            <div>
                                <img src="./images/team1.jpeg" alt="team member">
                            </div>
                            <h3 class="section__heading mb-2">Suraj kumar sharma</h3>
                            <p class="section__desc" style="font-weight: 600;">DIRECTOR</p>
                        </div></center>   -->
                        <!--<div class="col-12 col-sm-6 col-md-3 p-sm-5 text-center">-->
                        <!--    <div>-->
                        <!--        <img src="./images/team1.webp" alt="team member">-->
                        <!--    </div>-->
                        <!--    <h3 class="section__heading mb-2">MARK MACGRAVEY</h3>-->
                        <!--    <p class="section__desc" style="font-weight: 600;">DIRECTOR</p>-->
                        <!--</div>-->
                        <!--<div class="col-12 col-sm-6 col-md-3 p-sm-5 text-center">-->
                        <!--    <div>-->
                        <!--        <img src="./images/team1.webp" alt="team member">-->
                        <!--    </div>-->
                        <!--    <h3 class="section__heading mb-2">MARK MACGRAVEY</h3>-->
                        <!--    <p class="section__desc" style="font-weight: 600;">DIRECTOR</p>-->
                        <!--</div>-->
                        <!--<div class="col-12 col-sm-6 col-md-3 p-sm-5 text-center">-->
                        <!--    <div>-->
                        <!--        <img src="./images/team1.webp" alt="team member">-->
                        <!--    </div>-->
                        <!--    <h3 class="section__heading mb-2">MARK MACGRAVEY</h3>-->
                        <!--    <p class="section__desc" style="font-weight: 600;">DIRECTOR</p>-->
                        <!--</div>-->
                    <!-- </div>
                </div>
            </section> -->
            <!-- Our Team -->

            <!-- Email Subscription -->
            <!-- <section class="section emailSubscription  padding-y padding-x ">
                <div class="col-12 col-md-6 text-center mx-auto my-5 ">
                    <h2 class="section__title text-white">EMAIL SUBSCRIPTION</h2>
                    <p class="section__desc text-white">Donec varius sodales orci. Class aptent taciti sociosqu ad
                        litora
                        torquent per conubia nostra, per inceptos himenaeos. Aenean a arcu</p>
                    <form class="col-12 col-md-8 mx-auto mt-5">
                        <input type="email" class="form-control p-3 shadow-none fs-5 mb-5" required
                            placeholder="Your mail (required)">
                        <button type="submit" class="primary__btn rounded py-3 px-5">SUBSCRIBE</button>
                    </form>
                </div>
            </section> -->
            <!-- Email Subscription -->
        </div>
        <div id="gallery">

            
        </div>
        <!-- Contact -->
        <section
            class="section container mx-auto row m-0 d-flex flex-column-reverse flex-md-row border-bottom padding-y padding-x">
            <div class="col-12 col-md-6  text-center">
                <div class="mb-4">
                    

                    <h2 class="section__heading">Address</h2>
                    <p class="section__desc col-12 col-md-6 mx-md-auto">Jagrati Chauk, Shankar Nagara, Durg, Chhatishgarh - 491001</p>
                </div>
                <div class="mb-4">
                    <h2 class="section__heading">Phone No</h2>
                    <p class="section__desc"><a href="tel:+919826147544">+91 9826147544</a></p>
                </div>
                <div class="mb-4">
                    <h2 class="section__heading">Email</h2>
                    <p class="section__desc">vickysunisuni81@gmail.com</p>
                </div>
            </div>
            <div class="col-12 mb-5 col-md-6">
                <form>
                    <h2 class="section__heading">Location</h2>
                    <!-- <div class="mb-4">
                        <input type="text" class=" border form-control section__desc p-3" id="name"
                            placeholder="Please Enter Name">
                    </div>
                    <div class="mb-4">
                        <input type="email" class=" border form-control section__desc p-3" id="email"
                            placeholder="Please Enter Email">
                    </div>
                    <div class="mb-4">
                        <textarea class="form-control section__desc border  p-3" placeholder="Message" id="message"
                            style="height: 100px"></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="primary__btn rounded ">Submit</button>
                    </div> -->

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238064.8384648437!2d80.99878663281251!3d21.2015678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a293da28402a10f%3A0xf59c6c1f579898ed!2sNaivedya%20Cab%20-%20Taxi%20Service!5e0!3m2!1sen!2sin!4v1720078940903!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </form>
            </div>
        </section>
        <!-- Contact -->

        <!-- Footer -->
        <footer class="py-4 section text-center">
            <p class="section__desc p-0 m-0">© 2024, All Rights Reserved <a href="https://innovativess.in/">Website Designer By Innovativess</a></p>
        </footer>
        <!-- Footer -->

        <!-- Modal -->
        <div class="modal fade" id="bookingEnquiry" tabindex="-1" aria-labelledby="bookingEnquiryLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content section">
                    <div class="modal-header  text-center">
                        <h1 class="modal-title section__heading w-100 my-2" id="bookingEnquiryLabel">GET A TAXI</h1>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-light p-5">
                        <form>
                            <div class="mb-4 shadow-sm">
                                <input type="text"
                                    class="shadow-none border-secondary rounded form-control section__desc p-3"
                                    id="name" placeholder="Enter Your Name">
                            </div>
                            <div class="mb-4 shadow-sm">
                                <input type="number"
                                    class="shadow-none border-secondary rounded form-control section__desc p-3"
                                    id="email" placeholder="Enter Mobile Number">
                            </div>
                            <div class="mb-4 shadow-sm">
                                <input type="text"
                                    class="shadow-none border-secondary rounded form-control section__desc p-3"
                                    id="name" placeholder="Enter Pickup Address">
                            </div>
                            <div class="mb-4 shadow-sm">
                                <input type="text"
                                    class="shadow-none border-secondary rounded form-control section__desc p-3"
                                    id="name" placeholder="Enter Drop Address">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer py-3 m-0 row">
                        <div class="col-6 m-0">
                            <button type="button" class="primary__btn bg-danger rounded w-100"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                        <div class="col-6 m-0">
                            <button type="button" class="primary__btn rounded w-100">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"
        defer></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        /* window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar')
            navbar.classList[window.scrollY > 350 ? 'remove' : 'add']('d-none');
        }); */
        const counters = document.querySelectorAll(".counter");
        let counterTop = $('#counter').offset().top - window.innerHeight;
        let animationStarted = false;
        $(window).scroll(function () {
            if (!animationStarted && $(window).scrollTop() > counterTop) {
                counters.forEach((counter) => {
                    counter.innerText = "0";
                    const updateCounter = () => {
                        const target = +counter.getAttribute("data-target");
                        const count = +counter.innerText;
                        const increment = target / 200;
                        if (count < target) {
                            counter.innerText = `${Math.ceil(count + increment)}`;
                            setTimeout(updateCounter, 1);
                        } else counter.innerText = target;
                    };
                    updateCounter();
                });
                animationStarted = true;
            }
        });
    </script>
    <style>
        .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
    </style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+919826147544&text=Hello%21%20naivedyacab.com" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

</body>

</html>