<!DOCTYPE html>
<html lang="en">
<head>
    <? require '../global/header.php'; ?>
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <style>
        /* Style for the vision and mission boxes */
        .vision-box, .mission-box {
            background-color: orange;
            padding: 20px;
            margin: 20px;
            color: white;
            border-radius: 5px;
            width: 300px;
            text-align: center;
            display: inline-block;
            vertical-align: top;
        }

        /* Style for the vision and mission titles */
        .vision-box h4, .mission-box h4 {
            color: black;
        }
    </style>
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
    <div class="main-banner">
        <img src="../assets/images/aabg.png" class="center" alt="Aishah Aims 1">
        <div class="video-overlay header-text">
            <div class="caption" style="cursor: default;">
                <h6>Work safe, Home safely</h6>
                <h4 class="text-center">5 Vessel That Provide <br><em> Offshore Marine Services</em></h4>
            </div>
        </div>
    </div>
    <div class="request-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>Request a call back right now ?</h4>
                    <span>Any question, or any problem just contact us.</span>
                </div>
                <div class="col-md-4">
                    <a href="contact.html" class="border-button">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Vision <em>Mission</em></h2>
                        <span>vision and mission for our company</span>
                    </div>
                    <div class="testimonial-item">
                        <div class="inner-content">
                            <!-- Vision Box -->
                            <div class="vision-box">
                                <h4>Vision</h4>
                                <p>"To become an ultimate integrated services provider in Oil and Gas Industry"</p>
                            </div>

                            <!-- Mission Box -->
                            <div class="mission-box">
                                <h4>Mission</h4>
                                <p>"We provide quality services to the Oil and Gas Industry with emphasis on:"<br>
                                    <b>Financial Value:</b> "We are maximizing stakeholders' value through increasing of financial performance"<br>
                                    <b>Internal Process:</b> "We are promoting quality, healthy, safety, environmentally and security practice during delivering services"<br>
                                    <b>Customer Focus:</b> "We gain customer loyalty by continual innovation and improvement of high-quality products and services that provide the best value"<br>
                                    <b>Human Capital:</b> "We are focusing on developing human capital capabilities"
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? include '../global/footer.php'; ?>
    <? require '../global/script.php'; ?>
</div>
<script type="text/Javascript">
    const cleared = [0, 0, 0]; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
</script>
</body>
</html>
