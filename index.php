<?php
    include('conn.php');
    if(isset($_POST['submit'])){
		$client_name = $_POST['cname'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$service = $_POST['service'];
		$location = $_POST['location'];
		$date = $_POST['date'];
		
		$sql = "INSERT INTO `appointments`(`name`, `contact`, `email`, `service`, `location`, `date`) VALUES ('$client_name','$contact','$email','$service','$location','$date')";
	  
	
		if(mysqli_query($conn, $sql)){
			echo "<script>alert('Your application form has been submited.')</script>";
		}
		else
			echo "<script>alert('Error in submiting your application')</script>";
	  }
?>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   ZENITH PHYSIOTHERAPY QLD
  </title>
  <link rel="icon" type="image/x-icon" href="image/logo.png">
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
    background-color: #f8f9fa;
            text-align: center;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #1d1c1c;
        }
        .navbar-nav .nav-link {
            color: #6c757d;
        }
        .navbar-nav .nav-link:hover {
            color: #f4f1f1;
        }
        .hero-section {
            position: absolute;
            height:600px;
            background-color: #6c8c7b;
            color: #fff;
            padding: 60px 0;
            position: relative;
        }
        .hero-section .content {
            max-width: 600px;
            margin-bottom: 80px;
        }
        .hero-section .content h1 {
            font-size: 48px;
            font-weight: bold;
        }
        .hero-section .content p {
            font-size: 18px;
            margin-top: 20px;
        }
        .hero-section .content .btn {
            margin-top: 30px;
            padding: 10px 20px;
            border-radius: 50px;
        }
        .hero-section .contact-info {
            margin-top: 30px;
        }
        .hero-section .contact-info p {
            margin: 0;
        }
        .hero-section .image {
            position: relative;
            top: 0;
            bottom: 400px;
            right:-48;
            height:581px;
            width: 80%;
            background: url('image/top1.webp') no-repeat center center;
            background-size: cover;
            border-radius: 50px;
            border-bottom-left-radius: 50px;
        }
        @media  screen and (min-width:760px) {
            .hero-section .image {
                width: 45%;
                position: relative;
                right:-57;
                height:581px;
                background: url('image/top1.webp') no-repeat center center;
                background-size: cover;
                border-radius: 50px;
                border-bottom-left-radius: 50px;
            }
        }
        @media  screen and (min-width:10px) and (max-width:760px) {
            .intro{
            margin-top:650px;
        }
        .expertise-details img{
            width:30%;
            height:30%;
        }
        .image-section img {
            width:100% !important;
            height:20% !important;
        }
        }
        .side-buttons {
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
        }
        .side-buttons .btn {
            display: block;
            margin-bottom: 10px;
            border-radius: 0;
        }
        .logo {
            margin-top: 50px;
        }
        .welcome-text {
            color: #6c757d;
            font-size: 14px;
            letter-spacing: 2px;
            margin-top: 20px;
        }
        .main-text {
            color: #343a40;
            font-size: 24px;
            margin-top: 20px;
            margin-bottom: 40px;
        }
        .text-section{
            margin-top:20px;    
        }
        .three, .pain{
            margin-top:60px;
        }
        .heading {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }
        .subheading {
            font-size: 1rem;
            color: #666;
            margin-bottom: 30px;
        }
        .list-group-item {
            border: none;
            padding: 0.5rem 0;
            color: #6c757d;
        }
        .list-group-item i {
            color: #6c757d;
            margin-right: 10px;
        }
        .btn-custom {
            background-color: #d1e7dd;
            color: #0f5132;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #c7dfd4;
        }
        .image-container {
            border-radius: 15px;
            overflow: hidden;
        }
        /*Expertise*/
        .expertise-section {
            text-align: center;
            background-color: #f0f4f3;
            padding: 50px 0;
        }
        .expertise-section h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .expertise-section p {
            font-size: 1rem;
            color: #6c757d;
        }
        .expertise-content {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }
        .expertise-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .expertise-list li {
            background-color: #fff;
            border-radius: 10px;
            margin-bottom: 10px;
            padding: 15px;
            text-align: left;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .expertise-list li.active {
            background-color: #d1e7dd;
        }
        .expertise-list li i {
            margin-right: 10px;
            font-size: 1.5rem;
        }
        .expertise-details {
            margin-left: 30px;
            max-width: 600px;
        }
        .expertise-details img {
            width: 100%;
            border-radius: 10px;
        }
        .expertise-details h3 {
            font-size: 1.75rem;
            margin-top: 20px;
        }
        .expertise-details p {
            font-size: 1rem;
            color: #6c757d;
            margin-top: 10px;
        }
        /*massage*/
        .massage{
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 0;
        }
        .left-section {
            background-color: #d3c6b1;
            padding: 50px;
        }
        .right-section {
            padding: 0;
        }
        .right-section img {
            width: 100%;
            height: 100%;
        }
        .conditions-title {
            font-size: 14px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .main-title {
            font-size: 48px;
            font-weight: 400;
            margin: 20px 0;
        }
        .condition-item {
            margin-bottom: 30px;
        }
        .condition-item h3 {
            font-size: 24px;
            font-weight: 400;
            margin-bottom: 10px;
        }
        .condition-item p {
            font-size: 16px;
            font-weight: 300;
            color: #e0e0e0;
        }
        .condition-number {
            display: inline-block;
            width: 30px;
            height: 30px;
            background-color: #ffffff;
            color: #d3c6b1;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            font-size: 16px;
            font-weight: 700;
            margin-right: 10px;
        }
        .find-out-more {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e0e0e0;
            color: #d3c6b1;
            border-radius: 20px;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            margin-top: 20px;
        }
        /*appointment*/
        .appointment{
            background-color: #f5f5f5;
        }
        .appointment-section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .appointment-container {
            display: flex;
            width: 70%;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .appointment-image {
            flex: 1;
            background: url('image/massage(2).jpg') no-repeat center center;
            background-size: cover;
        }
        .appointment-form {
            flex: 1;
            background-color: #6e8882;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .appointment-form h2 {
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .appointment-form p {
            font-family: 'Arial', sans-serif;
            font-size: 14px;
            margin-bottom: 30px;
        }
        .appointment-form .form-control {
            background-color: transparent;
            border: 1px solid #d1e0dd;
            border-radius: 30px;
            color: white;
            margin-bottom: 15px;
            padding: 10px 20px;
        }
        .appointment-form .form-control::placeholder {
            color: #d1e0dd;
        }
        .appointment-form .btn {
            background-color: white;
            color: #333;
            border-radius: 30px;
            padding: 10px 20px;
            font-family: 'Arial', sans-serif;
            font-size: 14px;
            font-weight: bold;
        }
        .option{
            color:#6e8882;
            font-weight: 400;
        }
        /*foot*/
        .foot{
            background-color: #1d1c1c;
            color: #FFFFFF;
        }
        .footer {
            padding: 50px 0;
        }
        .footer .col {
            margin-bottom: 30px;
        }
        .footer h5 {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .footer p, .footer a {
            color: #FFFFFF;
            font-size: 14px;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer .social-icons a {
            color: #FFFFFF;
            font-size: 24px;
            margin-right: 15px;
        }
        .footer .social-icons a:hover {
            color: #A3C1AD;
        }
        .footer .email-form input[type="email"] {
            border: none;
            padding: 10px;
            border-radius: 20px 0 0 20px;
            width: 250px;
        }
        .footer .email-form .btnn {
            border: none;
            padding: 15px 20px;
            border-radius: 0 20px 20px 0;
            background-color: #A3C1AD;
            color: #FFFFFF;
        }
        .footer .email-form .btnn:hover {
            background-color: #8FAF8F;
        }
        .footer .bottom-text {
            font-size: 12px;
            margin-top: 30px;
        }
  </style>
 </head>
 <body>
  <nav class="navbar navbar-expand-lg navbar-light" id="home">
   <div class="container">
    <a class="navbar-brand" href="#">
     <img alt="PhysioZen Logo" height="50" src="image/logo.png" width="100"/>
    </a>
    <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
     <span class="navbar-toggler-icon">
     </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav ms-auto">
      <li class="nav-item">
       <a class="nav-link" href="index.php">
        Home
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#about">
        About Us
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#expertise">
        Services
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="jobs.php">
        Jobs
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="https://maps.apple.com/place?address=34%20Bowen%20St,%20Deagon%20QLD%204017,%20Australia&ll=-27.332543,153.059755&q=34%20Bowen%20St&t=m">
        Location
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#appointment">
        Contact Us
       </a>
      </li>
     </ul>
     <a class="btn btn-outline-success ms-3" href="#appointment">
      Book Appointment
     </a>
     <a class="btn btn-outline-success ms-3" href="login.php">
      Log-in
     </a>
    </div>
   </div>
  </nav>
  <!---hero section-->
  <section class="hero-section">
   <div class="container">
    <div class="row">
     <div class="col-md-6 content">
      <h1>
       Helping You Achieve Optimal Wellbeing
      </h1>
      <p>
       I believe in working with your body to restore balance without the need for harsh or painful manipulation.
      </p>
      <a class="btn btn-light" href="#">
       Choose a Specialist
      </a>
      <div class="contact-info mt-4">
       <p>
        Give us a call:
       </p>
       <p>
        <strong>
            +61 468 370 387
        </strong>
       </p>
      </div>
     </div>
     <div class="col-md-6 image">
     </div>
    </div>
   </div>
  </section>
  <div class="side-buttons">
   <a class="btn btn-warning" href="#expertise">
    Services
   </a>
   <a class="btn btn-success" href="#appointment">
    Contact
   </a>
   <a class="btn btn-success" href="#home">
    <i class='fas fa-angle-up'></i>
   </a>
  </div>
  <!---intro section-->
  <section class="intro" id="about">
    <div class="container" style="margin-top :160px">
        <div class="logo">
         <img alt="Logo with a symmetrical floral design" height="100" src="image/logo.png" width="200px"/>
        </div>
        <div class="welcome-text">
         WELCOME TO ZENITH
        </div>
        <div class="main-text">
         Targeted deep tissue and remedial massage can help to relieve tightness and tension in the body, improve circulation and lymph flow and act as a natural analgesic to pain.
        </div>
       </div>
  </section>
  <!---relax body-->
  <section class="relax">
    <div class="container">
        <div class="content">
         <div class="image-section">
          <img alt="A person receiving a relaxing foot massage in a serene environment" height="400" src="image/relax.jpg" style="width: 50% ; height: 50%; object-fit: cover; border-top-left-radius: 20px; border-bottom-left-radius: 20px;" width="600"/>
         </div>
         <div class="text-section">
          <div class="meet-janet">
           Meet Rakesh
          </div>
          <h2>
           Let's restore, relax &amp; rebalance your body
          </h2>
          <p>
           Our expert injection specialists can revitalize your appearance through minimally invasive treatments. As one of the most sought-after names in non-invasive rejuvenation, our clients come from all over the world seeking the transformative work of Dr. Rakesh and her team.
          </p>
          <a class="btn" href="index.php">
           Learn more about us
           <i class="fas fa-arrow-right">
           </i>
          </a>
         </div>
        </div>
       </div>
  </section>
  <!---info-->
  <hr>
  <section class="three">
    <div class="container">
        <div class="row justify-content-center">
         <div class="col-md-3 feature-box">
          <img alt="Abstract icon representing helping since 2012" height="50" src="https://storage.googleapis.com/a1aa/image/YylSKOlzzQr9KJYT9zmrMn9H9uUuMuuDqMyw5zIomij55e2JA.jpg" width="50"/>
          <h3>
           Helping Hands
          </h3>
          <p>
           Our clinic provides high-quality, hands-on and one-on-one treatments.
          </p>
          <a href="index.php" style="text-decoration: none;color:#000">
           ABOUT ME →
          </a>
         </div>
         <div class="col-md-1 d-flex align-items-center">
          <div class="divider">
          </div>
         </div>
         <div class="col-md-3 feature-box">
          <img alt="Abstract icon representing trusted by thousands" height="50" src="https://storage.googleapis.com/a1aa/image/5EfeYigeWgfG8SWsfpR5beiz4gPWEIMSCLVHeCwe6i1pln7tTA.jpg" width="50"/>
          <h3>
           Trusted by Thousands
          </h3>
          <p>
           We offer high quality services. Check out patients’ testimonials!
          </p>
          <a href="index.php" style="text-decoration: none;color:#000">
           VIEW REVIEWS →
          </a>
         </div>
         <div class="col-md-1 d-flex align-items-center">
          <div class="divider">
          </div>
         </div>
         <div class="col-md-3 feature-box">
          <img alt="Abstract icon representing covered by insurance" height="50" src="https://storage.googleapis.com/a1aa/image/d3KS4UowfXz6KChkKL8FFbjvTOZ6pggEH7MTGyeMUxukn7tTA.jpg" width="50"/>
          <h3>
           Covered by Insurance
          </h3>
          <p>
           Majority of our services are covered by insurance. Check out our FAQ.
          </p>
          <a href="index.php" style="text-decoration: none;color:#000">
           READ MORE →
          </a>
         </div>
        </div>
       </div>
  </section>
  <hr>
   <!---Causing pain to you-->
   <section class="pain">
    <div class="container">
        <div class="row align-items-center">
         <div class="col-md-6">
          <h1 class="heading">
           Is pain causing you to miss out on life?
          </h1>
          <p class="subheading">
           Within our luxurious sanctuary, no concern goes unaddressed. We delicately treat you like a masterpiece in progress, an endeavor deserving the glowing canvass of your dreams.
          </p>
          <div class="row">
           <div class="col-md-6">
            <ul class="list-group">
             <li class="list-group-item">
              <i class="fas fa-check">
              </i>
              Chronic pain
             </li>
             <li class="list-group-item">
              <i class="fas fa-check">
              </i>
              Spinal pain
             </li>
             <li class="list-group-item">
              <i class="fas fa-check">
              </i>
              Facet joint pain
             </li>
             <li class="list-group-item">
              <i class="fas fa-check">
              </i>
              Disc pain
             </li>
             <li class="list-group-item">
              <i class="fas fa-check">
              </i>
              Post-traumatic pain
             </li>
             <li class="list-group-item">
              <i class="fas fa-check">
              </i>
              Pain involving the central or peripheral nervous system
             </li>
            </ul>
           </div>
           <div class="col-md-6">
            <ul class="list-group">
             <li class="list-group-item">
              <i class="fas fa-check">
              </i>
              Nerve root pain
             </li>
             <li class="list-group-item">
              <i class="fas fa-check">
              </i>
              Muscular pain
             </li>
             <li class="list-group-item">
              <i class="fas fa-check">
              </i>
              Radicular pain such as brachalgia and sciatica
             </li>
             <li class="list-group-item">
              <i class="fas fa-check">
              </i>
              Pain associated with other chronic diseases such as arthritis, endometriosis, headache and pancreatitis.
             </li>
             <li class="list-group-item">
              <a href="index.php" style="color: #0f5132; text-decoration: none;">
               ...and much more!
              </a>
             </li>
            </ul>
           </div>
          </div>
          <button class="btn btn-custom mt-4">
           MEET OUR TEAM
           <i class="fas fa-arrow-right">
           </i>
          </button>
         </div>
         <div class="col-md-6">
          <div class="image-container">
           <img alt="Two women smiling and stretching" class="img-fluid" height="400" src="image/pain.jpg" width="600"/>
          </div>
         </div>
        </div>
       </div>
   </section>
   <br><br>
   <!---expertise-->
   <section class="expertise-section" id="expertise">
    <h2>
     Areas of Expertise
    </h2>
    <p>
     Treatment-based Chiropractic, Acupuncture, Massage Therapy, Physiotherapy &amp; Osteopathy.
    </p>
    <div class="expertise-content">
     <ul class="expertise-list">
      <li class="active" onclick="dry()">
       <i class="fas fa-user-md">
       </i>
       Dry needling
      </li>
      <li onclick="style='background-color:#d1e7dd',massage()">
       <i class="fas fa-spa">
       </i>
       Massage
      </li>
      <li onclick="style='background-color:#d1e7dd',therapy()">
       <i class="fas fa-hand-holding-heart">
       </i>
       Manual therapy
      </li>
      <li onclick="style='background-color:#d1e7dd',prenatal()">
       <i class="fas fa-leaf">
       </i>
       prenatal and postnatal massage
      </li>
      <li onclick="style='background-color:#d1e7dd',drainage()">
       <i class="fas fa-water">
       </i>
       Lymphatic Drainage
      </li>
      <li onclick="style='background-color:#d1e7dd',occu()">
        <i class="fa fa-wheelchair"></i>
        </i>
        Occupational Therapy
       </li>
       <li onclick="style='background-color:#d1e7dd',support()">
        <i class='fas fa-hand-holding-heart'></i>
        Support Work Services
       </li>
     </ul>
     <div class="expertise-details">
      <img alt="A person receiving osteopathy treatment" height="400" src="image/dry.jpg" width="600"/>
      <h3 id="hed">
       Dry needling
      </h3>
      <p id="descrip">
        Zenith Physiotherapy in Queensland provides dry needling to relieve muscle pain and tension. This targeted technique uses fine needles to release tight spots, promoting better mobility and pain relief, especially for chronic pain and sports injuries. With a skilled team, Zenith integrates dry needling into customized treatment plans for effective, lasting recovery.
      </p>
     </div>
    </div>
   </section>
   <!--massage-->
   <section class="massage">
    <div class="container">
        <div class="row">
         <div class="col-md-6 left-section">
          <div class="conditions-title">
           Common Conditions
          </div>
          <div class="main-title">
           Massage to release the stress &amp; tension of everyday life
          </div>
          <div class="condition-item">
           <div class="condition-number">
            1
           </div>
           <h3>
            Back &amp; Neck Pain
           </h3>
           <p>
            Caused by arthritis, disc degeneration, narrowing of the spinal canal, muscle inflammation, strain or trauma.
           </p>
          </div>
          <div class="condition-item">
           <div class="condition-number">
            2
           </div>
           <h3>
            Hip and Knee Pain
           </h3>
           <p>
            Pain in the knees and hips can be caused by a variety of conditions including osteoarthritis.
           </p>
          </div>
          <div class="condition-item">
           <div class="condition-number">
            3
           </div>
           <h3>
            Sports Injuries
           </h3>
           <p>
            If you are suffering with an injury that is preventing you from performing at your best, then we can help.
           </p>
          </div>
          <div class="condition-item">
           <div class="condition-number">
            4
           </div>
           <h3>
            Muscle Spasm &amp; Tension
           </h3>
           <p>
            Twenty first century living involves a lot of sitting whether at a desk at work, in a car/ train on the daily commute, or at home whilst reading or gaming.
           </p>
          </div>
         </div>
         <div class="col-md-6 right-section">
          <img alt="A person receiving a massage in a calm and serene environment" height="600" src="image/massage(1).jpg" width="800"/>
         </div>
        </div>
       </div>
   </section>
   <!--appointment-->
   <section class="appointment" id="appointment">
    <div class="appointment-section">
        <div class="appointment-container">
         <div class="appointment-image">
         </div>
         <div class="appointment-form">
          <form action="" method="POST">
          <img alt="Logo" class="mb-3" height="50" src="image/logo.png" width="100"/>
          <h2>
           Book an Appointment
          </h2>
          <p>
           Your life is waiting. Fast, long-lasting relief is nearby.
          </p>
          <input class="form-control" placeholder="Your Name"  name="cname" type="text"/>
          <div class="d-flex">
           <input class="form-control me-2" placeholder="Your Phone" name="contact" type="text"/>
           <input class="form-control" placeholder="Your Email" name="email" type="email"/>
          </div>
          <select class="form-control" name="service">
           <option class="option" value="">Choose a Service</option>
           <option class="option" value="Dry needling">Dry needling</option>
           <option class="option"  value="Massage">Massage</option>
           <option class="option"   value="Prenatal and Postnatal massage">Prenatal and Postnatal massage</option>
           <option class="option" value="Lymphatic Drainage">Lymphatic Drainage</option>
           <option class="option" value="Manual therapy">Manual therapy</option>
          </select>
          <select class="form-control" name="location">
           <option class="option" value="">Choose location</option>
           <option class="option" value="Deagon">Deagon</option>
           <option class="option" value="CresPeregian Springs">CresPeregian Springs</option>
          </select>
          <div class="d-flex">
           <input class="form-control me-2" name="date" placeholder="Select Date" type="date"/>
          </div>
          <button class="btn mt-3" type="submit" name="submit">
           BOOK ONLINE
          </button>
          </form>
         </div>
        </div>
       </div>
   </section>
   <!---foot-->
   <section class="foot">
    <div class="container footer">
        <div class="row text-center">
         <div class="col-12">
          <h2>
           Get a special 50% new patient discount and unleash your health.
          </h2>
          <form class="email-form d-inline-flex mt-3">
           <input placeholder="Email*" required="" type="email"/>
           <a class="btnn" href="mailto:zenithphysiotherapy2024@gmail.com?subject=Client query" target="_blank" type="submit">
            <i class="fas fa-arrow-right"></i>
           </a>
          </form>
         </div>
        </div>
        <hr class="my-5" style="border-color: rgba(255, 255, 255, 0.2);"/>
        <div class="row text-center text-md-start">
         <div class="col-md-3">
          <img alt="logo" class="mb-3" height="50" src="image/logo.png" width="100"/>
          <h5>
           ZENITH PHYSIOTHERAPY QLD
          </h5>
          <div class="social-icons">
           <a href="https://www.facebook.com/zenithphysiotherapy2024?mibextid=kFxxJD">
            <i class="fab fa-facebook">
            </i>
           </a>
           <a href="https://www.instagram.com/Zenithphysiotherapy">
            <i class="fab fa-instagram">
            </i>
           </a>
          </div>
         </div>
         <div class="col-md-2">
          <h5>
           Pages
          </h5>
          <p>
           <a href="#about">
            About Us
           </a>
          </p>
          <p>
           <a href="#expertise">
            Our Services
           </a>
          </p>
          <p>
           <a href="jobs.php">
            Jobs
           </a>
          </p>
          <p>
           <a href="https://maps.apple.com/place?address=34%20Bowen%20St,%20Deagon%20QLD%204017,%20Australia&ll=-27.332543,153.059755&q=34%20Bowen%20St&t=m">
            Location
           </a>
          </p>
          <p>
           <a href="#appointment">
            Contact us
           </a>
          </p>
         </div>
         <div class="col-md-2">
          <h5>
           Our Services
          </h5>
          <p>
           Manual Therapy
          </p>
          <p>
           Lymphatic Drainage
          </p>
          <p>
           Pilates
          </p>
          <p>
           Dry needling
          </p>
          <p>
           Massage
          </p>
          <p>
           Prenatal and Postnatal massage
          </p>
         </div>
         <div class="col-md-2">
          <h5>
           Our Team
          </h5>
          <p>
            Dr. Rakesh
           </p>
           <p>
             Dr. Rupinder Kaur
            </p>
         </div>
         <div class="col-md-3">
          <h5>
           Contact Us
          </h5>
          <p>
            34 Bowen street, Deagon, QLD 4017
          </p>
          <p>
            48 Kauri CresPeregian Springs QLD 4573
          </p>
          <p>
           <a href="https://maps.apple.com/place?address=34%20Bowen%20St,%20Deagon%20QLD%204017,%20Australia&ll=-27.332543,153.059755&q=34%20Bowen%20St&t=m">
            View Directions
           </a>
          </p>
          <p>
            +61 468 370 387
          </p>
          <p>
            +61 424 411 103 
          </p>
          <p>
            zenithphysiotherapy2024@gmail.com
          </p>
         </div>
        </div>
       </div>
   </section>
   <script>
    let head = document.getElementById('hed');
    let desc = document.getElementById('descrip');
        function massage(){
            head.innerHTML="Massage";
            desc.innerHTML="Zenith Physiotherapy offers expert manual therapy and massage services to relieve pain, restore movement, and enhance well-being. Their tailored approach includes soft tissue mobilization, joint manipulation, myofascial release, and therapeutic massage for comprehensive, personalized care.";
        }
        function dry(){
            head.innerHTML="Dry needling";
            desc.innerHTML="Zenith Physiotherapy in Queensland provides dry needling to relieve muscle pain and tension. This targeted technique uses fine needles to release tight spots, promoting better mobility and pain relief, especially for chronic pain and sports injuries. With a skilled team, Zenith integrates dry needling into customized treatment plans for effective, lasting recovery.";
        }
        function therapy(){
            head.innerHTML="Manual Therapy";
            desc.innerHTML="Zenith Physiotherapy provides expert manual therapy to relieve pain, restore movement, and improve well-being. Their hands-on techniques, tailored to each patient, include soft tissue mobilization, joint manipulation, and myofascial release for effective, personalized care.";
        }
        function prenatal(){
            head.innerHTML="Prenatal and Postnatal Massage";
            desc.innerHTML="Zenith Physiotherapy offers specialized Prenatal and Postnatal Massage services, providing gentle, therapeutic care tailored to the needs of mothers before and after childbirth. Prenatal massage helps relieve back pain, reduce swelling, and promote relaxation during pregnancy, while postnatal massage aids in recovery, reducing muscle tension, and improving circulation. Designed with safety and comfort in mind, these massages offer nurturing support to help mothers feel their best throughout their journey.";
        }
        function drainage(){
            head.innerHTML="Lymphatic Drainage";
            desc.innerHTML="Zenith Physiotherapy’s Lymphatic Drainage service uses gentle, rhythmic massage techniques to stimulate lymph flow, reduce swelling, and promote detoxification. This specialized therapy supports the immune system, enhances healing, and is ideal for reducing post-surgical swelling, managing lymphedema, and improving overall well-being.";
        }
        function pilates(){
            head.innerHTML="Pilates";
            desc.innerHTML="Zenith Physiotherapy offers Pilates sessions designed to improve core strength, flexibility, and body alignment. With a focus on controlled movements and breathing, Pilates enhances muscle tone, posture, and balance. Suitable for all fitness levels, it’s an effective low-impact workout that supports rehabilitation, reduces pain, and boosts overall physical wellness.";
        }
        function occu(){
            head.innerHTML="Occupational Therapy";
            desc.innerHTML="Comming Soon.....";
        }
        function support(){
            head.innerHTML="Support Work Services";
            desc.innerHTML="Comming Soon.....";
        }
   </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>