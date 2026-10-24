<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/view/home.php"><h2>AIMS-GLOBAL HOLDINGS SDN BHD</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <? echo ($navbar_active == 'home')?'active':''?>"><a class="nav-link " href="../view/home.php">Home</a></li>
                    <li class="nav-item <? echo ($navbar_active == 'about')?'active':''?>"><a class="nav-link" href="../view/about.php">About Us</a></li>
                    <li class="nav-item <? echo ($navbar_active == 'team')?'active':''?>"><a class="nav-link" href="../view/team.php">Our Team</a></li>
                    <li class="nav-item <? echo ($navbar_active == 'gallery')?'active':''?>"><a class="nav-link" href="../view/gallery.php">Gallery</a></li>
                    <li class="nav-item <? echo ($navbar_active == 'contact')?'active':''?>"><a class="nav-link" href="../view/contact.php">Contact Us</a></li>
                    <li class="nav-item dropdown"><a class="nav-link" data-toggle="dropdown" href="#">Login</a>
                        <ul class="dropdown-content">
                            <li><a href="https://www.aimsglobal.com.my/aims/app/view/login.php" target="_blank">AIMS-Office</a></li>
                            <li><a href="https://aimsglobal.com.my/aims/age/view/login.php" target="_blank">Ship Management System</a></li>
                            <li><a href="http://aimsglobal.com.my/cpbdsystem/view/login.php" target="_blank">Computerizes Maintenance Management System</a></li>
                            <li><a href="https://cpms.aimsglobal.com.my/view/login.php" target="_blank">Commerce Performance Monitoring System</a></li>
                            <!--<li><a href="https://aimsglobal.com.my/sparks/view/login.php" target="_blank" style="pointer-events: none;">Smart Parking System</a></li>-->
                            <li><a href="https://link2u.aimsglobal.com.my/" target="_blank">Link2u</a></li>
                            <li><a href="https://corp.aimsglobal.com.my/" target="_blank">CorpAdmin</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>