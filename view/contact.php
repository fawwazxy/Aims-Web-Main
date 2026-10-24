<?php
$navbar_active = 'contact';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <? include '../global/header.php'?>
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
</head>
<body>
<div id="wrapper">
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <header>
        <? include '../global/navbar.php'; ?>
        <div class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <ul class="left-info">
                            <img src="../assets/images/logo.png" title="1" alt="1">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tm-bg-black-transparent tm-intro">

                        <h1>Contact Us</h1>
                        <span>feel free to send us a message now!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-item">
                        <i class="fa fa-phone"></i>
                        <h4>Phone</h4>
                        <p></p>
                        <a href="#">Phone: 09-6228848</a></br>
                        <a href="#">Fax: 09-6238848</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <h4>Email</h4>
                        <p></p>
                        <a href="#">hr@aimsglobal.com.my</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-item">
                        <i class="fa fa-map-marker"></i>
                        <h4>Location</h4>
                        <p>NO 20 & 21 Blok B, Bestari Centre, Jalan Hiliran<br>20300 Kuala Terengganu, Malaysia</p>
                        <a href="#">View on Google Maps</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-item">
                        <ul class="social-icons">
                            <li><a rel="nofollow" href="https://www.facebook.com/Aims-Global-Holdings-Sdn-Bhd-1543140265933754/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <h4>Facebook</h4>
                            <p>Aims-Global Holding Sdn Bhd</p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="callback-form contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Send us a <em>message</em></h2>
                            <span>Any problem? you can text me</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="contact-form">
                            <form id="contact" action="" method="get">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <fieldset>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <fieldset>
                                            <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1986.3030403059097!2d103.13094401146091!3d5.323975120159694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b7bf1cdba34365%3A0xda40dd291d8f515a!2sAims%20Global%20Holdings%20Sdn.Bhd!5e0!3m2!1sen!2smy!4v1601785376029!5m2!1sen!2smy" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <? include '../global/footer.php'; ?>
    <? require '../global/script.php'; ?>
</div>
<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/Javascript">
    const cleared = [0, 0, 0]; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
    $(document).ready(function(){
        $('#contact').submit(function(e){
            alert('Form submitted successfully');
        });
    });
</script>
</body>
</html>