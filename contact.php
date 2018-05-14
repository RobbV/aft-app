<?php
// setting the default values
$name = null;
$email = null;
$subject = null;
$message = null;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1">
    <title>Contact</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css" />
    <!-- <link rel="stylesheet" href="bower_components/csshake/dist/csshake-slow.min.css" /> -->
    <link rel="stylesheet" href="css/contact.css" media="screen" />
  </head>
  <body>
    <ul class="navigation">
      <li class="nav-item"><a href="index.html">HOME</a></li>
      <li class="nav-item"><a href="tour.html">TOUR</a></li>
      <li class="nav-item"><a href="about.html">ABOUT AFT</a></li>
      <li class="nav-item"><a href="store.html">STORE</a></li>
      <li class="nav-item"><a href="#">CONTACT</a></li>
    </ul><input type="checkbox" id="nav-trigger" class="nav-trigger" />
    <label for="nav-trigger"></label>
      <div class="site-wrap">
    <header>
      <nav class="main-navbar">
        <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="tour.html">TOUR</a></li>
          <li><a href="about.html">ABOUT AFT</a></li>
          <li><a href="store.html">STORE</a></li>
          <li><a href="contact.html">CONTACT</a></li>
        </ul>
      </nav>
    </header>
    <main class="content">
      <h3>CONTACT US</h3>
      <form class="contact" action="email.php" method="post">
        <div class="col-md-4">
          <label for="name">Full Name</label>
          <input name="name" type="name" class="form-control" id="name" placeholder="name">
        </div>
        <div class="col-md-4">
          <label for="email">Email Address</label>
          <input name="email" type="email" class="form-control" id="email" placeholder="email">
        </div>
        <div class="col-md-4">
          <label for="subject">Subject of Message</label>
          <input name="subject" type="subject" class="form-control" id="subject" placeholder="subject of message">
        </div>
        <div class="col-md-4">
          <label for="message">Enter Your Message</label>
          <textarea name="message" class="form-control" rows="3" id="message"></textarea>
        </div>
        <button type="submit" class="btn btn-default col-md-2">Send Message</button>
      </form>
    </main>
      <footer>
        <img src="assets/images/aft-logo-white.svg" alt="" />
        <h4><i class="fa fa-copyright" aria-hidden="true"></i>  Copyright 2016. All Rights Reserved.</h4>
        <h4>Website By RobbVDesign</h4>
      </footer>
    <!-- link script files -->
    <script type="text/javascript" scr="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" scr="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </div>
  </body>
</html>
