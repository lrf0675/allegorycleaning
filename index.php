<?php

if ($_POST['submit']) {
    $to      = 'contacts@allegorycleaning.com';
    $subject = 'Contact Inquiry';
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr><td colspan='2'>CONTACT FORM INQUIRY</td></tr>";
    $message .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['contactName']) . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['contactEmail']) . "</td></tr>";
    $message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['contactPhone']) . "</td></tr>";
    $message .= "<tr><td><strong>Message:</strong> </td><td>" . $_POST['contactMessage'] . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    $mail = mail($to, $subject, $message, $headers);

    if($mail) {
      $status = 'ok';
      return print_r($status);

    } else {
      $status = 'notok';
      return print_r($status);
    }
}

if ($_POST['submit_subscription']) {
    $to      = 'subscribe@allegorycleaning.com';
    $subject = 'Subscribe Newsletter';
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr><td colspan='2'>SUBSCRIBE TO NEWSLETTER</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['subscrEmail']) . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    $mail = mail($to, $subject, $message, $headers);

    if($mail) {
      $status = 'ok';
      return print_r($status);

    } else {
      $status = 'notok';
      return print_r($status);
    }
}

?>

<!DOCTYPE html><!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]--><!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]--><!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
  <head>
    <title>Allegory Cleaning</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="google-site-verification" content="Q6SC16IobGbZy4-29Qtzj9k0_QJFP3y0pdEA9JqMbk8" />
    <link rel="stylesheet" href="assets/css/app.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
    <!-- if lt IE 9 script(src="http://html5shiv.googlecode.com/svn/trunk/html5.js")-->
  </head>

  <body>
    <div id='popup-notify' class='status'>
      <div class='popup-content'>
      </div>
    </div>

    <div class="header">
      <div class="block">
        <div class="block-onefourth">
          <a href="/" class="logo"></a>
        </div>
        <div class="block-twothird">
          <button class="mob-menu fa-navicon" id="menu"></button>
          <ul class="navigation mobile" id="navigation">
            <li><a href="#home"><span class="icn-home"></span>Home</a></li>
            <li><a href="#about-us"><span class="icn-about"></span>About</a></li>
            <li><a href="#services"><span class="icn-services"></span>Services</a></li>
            <li><a href="#contact"><span class="icn-contact"></span>Contact</a></li>
          </ul>
          <div class="navigation-shaded">
            <a href="#contact">
              <span class="icn-calendar"></span>
              <p>Book my cleaning</p>
              <em>972-496-1630</em>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="featured parallax-window" data-parallax="scroll" data-image-src="assets/img/featured-bg.jpg" id="home" data-speed="0.5">
        <div class="block featured-texts">
          <span>Welcome to</span>
          <h1>Allegory Cleaning</h1>
          <h2>Commercial &amp; Janitorial cleaning services</h2>

          <a href="#contact"class="btn btn-lg btn-green"><span class="icn-homesearch"></span>Free estimates</a>
          <a href="#contact" target="_blank" class="btn btn-lg btn-blue"><span class="icn-cards"></span>Credit cards accepted</a>
        </div>
      </div>

      <div class="content-onwhite" id="services">
        <div class="block">
        <h1>Services</h1>
        <div class="block-full">
          <div class="block-onehalf">
            <h2 class="heading-blue">Janitorial Cleaning <span class="arr-blue"></span></h2>
            <p>
              A clean building is not only a reflection of your business, but is also a boost to your employees’ morale.
              We will make sure your building projects an image that it is well cared for!
            <br>
            Our janitorial services include:
            <ul style='font-family: "Open Sans"; font-size:15px;'>
              <li>Interior Glass Cleaning</li>
              <li>Carpet Care</li>
              <li>Hard-Surface Floor Care</li>
              <li>Restroom Sanitation</li>
              <li>High and Low Dusting</li>
              <li>Cafeteria and Food Services Cleaning</li>
              <li>Wastebasket emptied and liners replaced</li>
              <li>Disinfect doorknobs, light switches, and phones</li>    
            </ul>
          </p>
          </div>
          <div class="block-onehalf content-img content-img-right">
            <img src="assets/img/commercial-cleaning.png" alt="Commerical Cleaning">
          </div>
        </div>

        <div class="block-full">
          <div class="block-onehalf content-img content-img-left">
            <img src="assets/img/residential-cleaning.png" alt="Commercial Cleaning">
          </div>
          <div class="block-onehalf">
            <h2 class="heading-green heading-right">Commercial Cleaning <span class="arr-green"></span></h2>
            <p>
              We also provide special services, such as carpet spotting, carpet cleaning, move in/move out and construction clean up for both residential and commercial customers.
              <br>
              Some of our commerical services include:
              <ul style='font-family: "Open Sans"; font-size:15px;'>
                <li>Contract Cleaning</li>
                <li>Office Cleaning</li>
                <li>Carpet Cleaning</li>
                <li>Contruction Cleanup</li>
                <li>Move In/Move Out Cleaning</li>
                <li>Medical Office Cleaning</li>
              </ul>
            </p>
          </div>
        </div>
        </div>
      </div>

      <div class="content-onblue" id="about-us">
        <div class="content-background parallax-window" data-parallax="scroll" data-image-src="assets/img/blue-scenic.jpg" data-speed="0.5">
          <div class="block">
            <h1 class="heading-white">About Us</h1>
            <div class="paragraph-centered">
              <p><strong>We are proud to serve property managers and business owners alike with the highest quality of excellence. We are detail oriented and hold ourselves to the highest standards. Give us a call today and let us take care of the dirty work for you. Thank you again and we look forward to talking to you soon.</strong></p>

              <p>
                We are licensed, insured and bonded to service commercial establishments.
                We use environmentally safe chemicals and equipment allowing us to obtain high quality work.
                Our friendly staff members are trained with all equipment and chemicals, so that we can do the best job each time ensuring customer satisfaction.
                Our goal is to provide the highest quality work at the most affordable prices, and to take the burden of cleaning off your shoulders so that you can tend to other important matters.
                We guarantee that we can meet or beat your current cleaning charges, and get better quality cleaning work.
                Customer satisfaction is our number one goal, if you are not completely satisfied we will do what we can to earn your satisfaction.
              </p>

            <div class="btn-grp">
              <!--<a href="#" class="btn btn-md btn-gray">Read more</a>-->
              <a href="#contact" class="btn btn-md btn-green">Book cleaning</a>
            </div>
            </div>
          </div>
        </div>
      </div>

      <div class="content-ongray clients">
        <div class="block">
          <h1 class="heading-blue">What our client says</h1>

          <div class="box-quote">
            <ul class="slider-box slider-texts">
              <li>
                <div class="block">
                <img src="assets/img/client.png" alt="">
                <div class=""><p>“Allegory Cleaning, we're very happy with your cleaning service.  We'd be happy to recommend your company anytime!"<small>Robert, <em>Operation Manager</em></small></p>
                </div>
                </div>
              </li>

              <li>
                <div class="block">
                <img src="assets/img/client.png" alt="">
                <div class=""><p>“Our office was in pretty bad shape. Working magic is an understatement. An absolutely wonderful job. Allegory Cleaning is an honest professional, reasonably priced, and the work he does is incredible. I am sold." <small>Kathy, <em>Operation Manager</em></small></p>
                </div>
                </div>
              </li>

              <li>
                <div class="block">
                <img src="assets/img/client.png" alt="">
                <div class=""><p>“Just wanted to let you know how impressed we are with the office cleaning. Since we switched to Allegory Cleaning we really feel we're getting our money's worth."<small>Bill, <em>Operation Manager</em></small></p>
                </div>
                </div>
              </li>
            </ul>
          </div>

        </div>
      </div>

      <div class="content-ongreen" id="contact">
        <div class="content-background-slim parallax-window" data-parallax="scroll" data-image-src="assets/img/green-scenic.jpg" data-z-index="5" data-speed="0.7">
          <div class="block">
            <div class="block-onehalf">
              <h1 class="heading-white">Contact us</h1>
              <div class="content-details-md"><span class="icn-map"></span>
              5435 North Garland Ave #140-272<br>
              Garland, TX 75040
              </div>
              <div class="content-details-lg"><span class="icn-cphone"></span>
              972-496-1630 (phone) <br>
              972-496-1695 (fax)
              </div>
            </div>
            <div class="block-onehalf">
              <form class="form-contact" name="contactForm" id="contactForm" method="post">
                <label><span>Name (required)</span><input type="text" name="contactName" id="contactName"></label>
                <label for=""><span>Email (required)</span><input type="email" name="contactEmail" id="contactEmail"></label>
                <label for=""><span>Phone</span><input type="tel" name="contactPhone" id="contactPhone"></label>
                <label for=""><span>Message</span><textarea name="contactMessage" id="contactMessage"></textarea></label>
                <input type="submit" value="send" id="submit" name="submit">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="block">
        <div class="block-onefourth">
          <h3 class="heading-white">Subscribe to Newsletter</h3>
          <form action="#" class="form-newsletter" id="subscriptionForm">
            <div class="single-input">
              <input type="email" placeholder="Email address" name="subscrEmail">
              <input type="submit" value="Send" id="submit_subscription" name="submit_subscription">
            </div>
          </form>

          <ul class="social">
            <li><a href="https://www.facebook.com/allegorycleaning/" target="_blank" class="icn-fb"><span>Facebook</span></a></li>
            <li><a href="https://www.instagram.com/allegorycleaning/" target="_blank" class="icn-is"><span>Instagram</span></a></li>
            <li><a href="https://www.linkedin.com/company/allegory-cleaning" target="_blank" class="icn-li"><span>LinkedIn</span></a></li>
            <!--<li><a href="#" target="_blank"  class="icn-tw"><span>Twitter</span></a></li>
            <li><a href="#" target="_blank" class="icn-gl"><span>Google Plus</span></a></li>
            <li><a href="#" target="_blank" class="icn-yt"><span>Youtube</span></a></li>-->
          </ul>
        </div>

        <div class="block-twothird">
          <div class="block-onefourth block-padonleft">
            <h3 class="heading-white">Sitemap</h3>

            <ul class="list-vertical">
              <li><a href="#home">Home</a></li>
              <li><a href="#about-us">About us</a></li>
              <li><a href="#contact">Contact</a></li>
              <!--<li><a href="#">Career</a></li>-->
              <!--<li><a href="#">Site Map</a></li>-->
              <!--<li><a href="#">How it Works</a></li>-->
              <!--<li><a href="#">Blog</a></li>-->
              <li><a href="#services">Services</a></li>
            </ul>
          </div>

          <div class="block-twothird">
            <h3 class="heading-white">Service Area</h3>

            <ul class="list-vertical">
              <li><a href="#">Dallas</a></li>
              <li><a href="#">Irving</a></li>
              <li><a href="#">Garland</a></li>
              <li><a href="#">Plano</a></li>
              <li><a href="#">Lewisville</a></li>
              <li><a href="#">Mesquite</a></li>
              <li><a href="#">Richardson</a></li>
              <li><a href="#">Grand Prairie</a></li>
              <li><a href="#">Fate</a></li>
              <li><a href="#">Carrollton</a></li>
              <li><a href="#">Frisco</a></li>
            </ul>

            <ul class="list-vertical">
              <li><a href="#">McKinney</a></li>
              <li><a href="#">Rowlett</a></li>
              <li><a href="#">Flower Mound</a></li>
              <li><a href="#">Arlington</a></li>
              <li><a href="#">Duncanville</a></li>
              <li><a href="#">Terrell</a></li>
              <li><a href="#">Coppell</a></li>
              <li><a href="#">Euless</a></li>
              <li><a href="#">Desoto</a></li>
            </ul>

            <ul class="list-vertical">
              <li><a href="#">Allen</a></li>
              <li><a href="#">Balch Springs</a></li>
              <li><a href="#">Lancaster</a></li>
              <li><a href="#">Grapevine</a></li>
              <li><a href="#">Rockwall</a></li>
              <li><a href="#">Melissa</a></li>
              <li><a href="#">Crandall</a></li>
              <li><a href="#">Anna</a></li>
              <li><a href="#">Sunnyvale</a></li>
            </ul>

            <ul class="list-vertical">
              <li><a href="#">Addison</a></li>
              <li><a href="#">Fort Worth</a></li>
              <li><a href="#">Sachse</a></li>
              <li><a href="#">Little Elm</a></li>
              <li><a href="#">Forney</a></li>
              <li><a href="#">Royse City</a></li>
              <li><a href="#">Seagoville</a></li>
              <li><a href="#">The Colony </a></li>
              <li><a href="#">Celina</a></li>
            </ul>

            <ul class="list-vertical">
              <li><a href="#">Lake Dallas</a></li>
              <li><a href="#">Farmersville</a></li>
              <li><a href="#">Prosper</a></li>
              <li><a href="#">Quinlan</a></li>
              <li><a href="#">Wylie</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="block site-rights">
        <div class="block-full footer-full">
          <div class="block-onehalf">
            <p>&copy; 2015 Allegory Cleaning - All rights reserved</p>
          </div>
          <div class="block-onehalf">
            <p><span><a href="#">Terms of Service</a></span><span><a href="#">Privacy Policy</a></span></p>
          </div>
        </div>
      </div>
    </div>
    <div id="loading"></div>
  <script src="assets/js/app.min.js"></script>
  </body>
</html>