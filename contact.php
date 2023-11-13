<?php
require_once ('couch/cms.php');
?>

<cms:template title='Home' icon='home'>
    <cms:editable name="body" label="Body" type="richtext" />
    <cms:editable name="excerpt" label="Excerpt" type="textarea" />
</cms:template>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="general_style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>Rale Way Farm - Contact</title>
</head>
<body>
  <div class="navbar">
    <div class="logo"><img src="./assets/Rayvalley favicon 1.png"></div>
    <div>
    <ul class="menu-bar">
        <li ><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php" class="current">Contact Us</a></li>
    </ul>
    </div>
    <div class="mini-bar">
        <div class="place-order"><p><a href="/">Join Now</a></p></div>
        <div class="hamburger-menu">
            <label for="checkbox_toggle" class="hamburger">
                <span>&#9776;</span>
                <input type="checkbox" id="checkbox_toggle" style="display: none;"/>
                <div>
                    <ul class="menu-bar">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li class="current"><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </label>
        </div>
    </div>
</div>
    <div class="container">
    <h1 class="h1-responsive clients-title text-center shadow-sm py-2">Talk to us</h1>

    <div class="contact-section">
        <div class="row">

            <div class="col-sm-6">
                <div class="card align-items-center" >
                    <div class="card-body py-2">
                        <div class="card-title py-2">
                            <h4 class="h4-responsive">How can we help?</h4>
                        </div>
                         <form class="comment-form py-2" action="">
                      <div class="form-group py-2">
                          <label for="name"><span class="sr-only">Name</span></label>
                          <input type="text" placeholder="Name" id="name" required>
                      </div>
                      <div class="form-group py-2">
                          <label for="email"><span class="sr-only">Email:</span></label>
                          <input type="email" placeholder="Email" id="email" required>
                      </div>
                      <div class="form-group py-2">
                          <label for="text-area"><span class="sr-only">Query or suggestion</span></label>
                         <textarea name="textarea" placeholder="Talk to us here..." id="textarea" cols="23" rows="3" required></textarea>
                      </div>
                      <div class="card-button">
                         <button type="submit" class="btn btn-lg submit-btn">Submit</button>
                      </div>
                     
                  </form>
                    </div>
        
                </div>
            </div>
        
                <div class="col-sm-6 opening-hours">
                  <div class="container">

                    <h3 class="h3-responsive py-2 mx-2">Opening Hours</h3>
                    <hr>
                    <div class="content py-2 mx-2">
                  <h6 class="h6-responsive"><span><i class="fa fa-clock-o" aria-hidden="true"></i> </span> Monday-Friday: 08:00-16:00</h6>
                  <h6 class="h6-responsive"><span><i class="fa fa-clock-o" aria-hidden="true"></i> </span> Weekends: 09:00-13:00</h6>
                  <h6 class="h6-responsive"><span><i class="fa fa-clock-o" aria-hidden="true"></i> </span> Public Holidays: 10:00-16:00</h6>
                    </div>

                    <div class="socials py-2 mx-2">
                      <h3 class="h3-responsive">Get in touch with us</h3>
                      <hr>
                      <h6 class="h6-responsive"><span> <i class="fa fa-envelope" aria-hidden="true"></i> </span>ralewayfarm@gmail.com</h6>
                      <h6 class="h6-responsive"><span> <i class="fa fa-phone" aria-hidden="true"></i> </span>09137819640</h6>
                      <h6 class="h6-responsive"><span> <i class="fa fa-home" aria-hidden="true"></i> </span>Illishan-Remo, Ogun State<br>Nigeria, 20-60</h6>
                    </div>

   <div class="social py-3 text-center text-black" style="cursor: pointer;">
        <i class="fa fa-facebook fa-2x mx-1" aria-hidden="true"></i>

        <i class="fa fa-twitter fa-2x mx-1" aria-hidden="true"></i>

        <i class="fa fa-instagram fa-2x mx-1" aria-hidden="true"></i>
        <i class="fa fa-home fa-2x mx-1" aria-hidden="true"></i>
  </div>
                  </div>
                </div>
    </div>
    </div>
    </div>
</body>
</html>

<?php
COUCH::invoke();
?>