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
                        <h1>HSSE</h1>
                        <span>We have over 18 years of experience</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="more-infohsse about-infohsse">
        <div class="page-heading2 header-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="more-infohsse-content">
                            <div class="row">
                                <div class="col-md-6 align-self-center">

                                    <div class="right-content">
                                        <h2>HEALTH, SAFETY AND <em>ENVIRONMENT POLICY</em></h2>
                                        <img src="../assets/images/hssepolicy.png" alt="" width="400px">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="tm-bg-white-transparent tm-intro">
                                        <div class="left-image">
                                            <img src="../assets/images/hsse.png" alt="">
                                        </div>
                                    </div>
                                </div>
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