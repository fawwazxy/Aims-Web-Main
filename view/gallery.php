<?php
$navbar_active = 'gallery';
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
                        <h1>Gallery</h1>
                        <span>We are over 18 years of experience</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container p-3">

        <div class="fg-gallery">
            <img src="../assets/images/gallery/gallery1.jpg" alt="">
            <img src="../assets/images/gallery/gallery4.jpg" alt="">
            <img src="../assets/images/gallery/gallery3.jpg" alt="">
            <img src="../assets/images/gallery/gallery5.jpg" alt="">
            <img src="../assets/images/gallery/gallery9.jpg" alt="">
            <img src="../assets/images/gallery/gallery6.jpeg" alt="">
            <img src="../assets/images/gallery/gallery7.jpg" alt="">
            <img src="../assets/images/gallery/gallery8.jpg" alt="">
            <img src="../assets/images/gallery/gallery10.jpg" alt="">
            <img src="../assets/images/gallery/gallery11.jpg" alt="">
            <img src="../assets/images/gallery/gallery12.jpeg" alt="">
            <img src="../assets/images/gallery/gallery13.jpg" alt="">
            <img src="../assets/images/gallery/gallery14.jpg" alt="">
            <img src="../assets/images/gallery/gallery15.jpeg" alt="">
        </div>
    </div>
    <br>
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
    var a = new FgGallery('.fg-gallery', {
        cols: 4,
        style: {
            border: '10px solid #fff',
            height: '180px',
            borderRadius: '5px',
            boxShadow: '0 2px 10px -5px #858585',
        }
    })

    var a = new FgGallery('.ns', {
        cols: 3,
        style: {
            border: '0 solid #fff',
            height: '240px',
            borderRadius: '5px',
        }
    })
</script>
</body>
</html>