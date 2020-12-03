<?php include 'parts/head.php' ?>
<body>
    <!-- This is page 1-->
    <div data-role="page" id="page1">

        <!-- header logo-->
        <div data-role="header" data-position="fixed"
            class="header">
            <img src="images/logo.png" class="logo" width="127" height="56">
        </div>

        <!-- video -->
        <video style="object-fit: cover;" width="100%" height="240" autoplay>
            <source src="videos/intro.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- welcome note-->
        <div style="position: absolute;">
            <h2
                style="padding: 5px 20px; margin-top: -120px; font-size: 20;
                color: rgb(255, 255, 255); font-family: 'Poppins', sans-serif; font-weight: 200;">
                Hello Snoopy, What DIY do you want
                today?
            </h2>
        </div>

        <div role="main" class="ui-content" style="margin-top: -250px;">
            <!-- POI Card-->
            <div class="ui-grid-a search" data-filter="true" data-filter-placeholder="Search for DIY products" style="margin-top: 200px;">
                <h3>Recommended DYI</h3>
                <?php
                    
                ?>
                <div class="ui-block-a card ui-corner-all custom-corners">
                    <div class="ui-bar ui-bar-a ui-card">
                        <span class="flaticon-122-heart fav-icon-card"></span>
                        <img class="center" src="images/cat.png" /></br>
                        <span>Cat A </span> </br> <span class="card-price">LKR 500.00</span>
                    </div>
                </div>
                <div class="ui-block-b card ui-corner-all custom-corners">
                    <div class="ui-bar ui-bar-a ui-card">
                        <span class="flaticon-122-heart fav-icon-card"></span>
                        <img class="center" src="images/elephant.png" /></br>
                        <span>Elephant A </span> </br> <span class="card-price">LKR 500.00</span>
                    </div>
                </div>
                <div class="ui-block-a card ui-corner-all custom-corners">
                    <div class="ui-bar ui-bar-a ui-card">
                        <span class="flaticon-122-heart fav-icon-card"></span>
                        <img class="center" src="images/dog.png" /></br>
                        <span>Dog A </span> </br> <span class="card-price">Rs. 500.00</span>
                    </div>
                </div>
                <div class="ui-block-b card ui-corner-all custom-corners">
                    <div class="ui-bar ui-bar-a ui-card">
                        <span class="flaticon-122-heart fav-icon-card"></span>
                        <img class="center" src="images/elephant.png" /></br>
                        <span>Elephant B </span> </br> <span class="card-price">Rs. 500.00</span>
                    </div>
                </div>
                <div class="ui-block-a card ui-corner-all custom-corners">
                    <div class="ui-bar ui-bar-a ui-card">
                        <span class="flaticon-122-heart fav-icon-card"></span>
                        <img class="center" src="images/dog.png" /></br>
                        <span>Dog B </span> </br> <span class="card-price">Rs. 500.00</span>
                    </div>
                </div>
                <div class="ui-block-b card ui-corner-all custom-corners">
                    <div class="ui-bar ui-bar-a ui-card">
                        <span class="flaticon-122-heart fav-icon-card"></span>
                        <img class="center" src="images/cow.png" /></br>
                        <span>Cow A </span> </br> <span class="card-price">Rs. 500.00</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer-->
        <div style="background-color:#54568C; padding: 20px 50px 50px 50px;">
            <div style="float: left;"><a style="color: white;" href="#aboutus">About Us</a></div>
            <div style="float: right;"><a style="color: white;" href="#signin">Sign In / Sign
                    Up</a></div>
        </div>

        <!-- Navbar -->
        <div data-role="footer" data-position="fixed">
            <nav data-role="navbar">
                <ul>
                    <li><a href="#page1" class="ui-btn menu ui-btn-active"><span class="flaticon-053-home"></span></a>
                    </li>
                    <li><a href="#page2" class="ui-btn menu"><span class="flaticon-122-heart"></span></a></li>
                    <li><a href="#Page3" class="ui-btn menu"><span class="flaticon-008-shopping-cart"></span></a></li>
                    <li><a href="#Page4" class="ui-btn menu"><span class="flaticon-119-tag"></span></a></li>
                </ul>
            </nav>
        </div>

    </div>

    <!-- This is page 2-->
    <div data-role="page" id="page2">
        <!-- header logo-->
        <div data-role="header" data-position="fixed"
            style="margin: auto; text-align: center; background-color:#54568C;">
            <img src="images/logo.png" style="float: left;" width="100" height="100">
            <h1 class="header-title">Made In Sri Lanka</h1>
        </div>


        <!-- Footer-->
        <div style="background-color:#54568C; padding: 20px 50px 50px 50px;">
            <div style="float: left;"><a style="color: white;" href="#aboutus">About Us</a></div>
            <div style="float: right;"><a style="color: white;" href="#signin">Sign In / Sign
                    Up</a></div>
        </div>

        <!-- Navbar -->
        <div data-role="footer" data-position="fixed">
            <nav data-role="navbar">
                <ul>
                    <li><a href="#page1" class="ui-btn menu"><span class="flaticon-053-home"></span></a></li>
                    <li><a href="#page2" class="ui-btn menu ui-btn-active"><span class="flaticon-122-heart"></span></a>
                    </li>
                    <li><a href="#page3" class="ui-btn menu"><span class="flaticon-008-shopping-cart"></span></a></li>
                    <li><a href="#page4" class="ui-btn menu"><span class="flaticon-119-tag"></span></a></li>
                </ul>
            </nav>
        </div>

    </div>

    <!-- This is page 3-->
    <div data-role="page" id="page3">
        <!-- header logo-->
        <div data-role="header" data-position="fixed"
            style="margin: auto; text-align: center; background-color:#54568C;">
            <img src="images/logo.png" style="float: left;" width="100" height="100">
            <h1 class="header-title">Made In Sri Lanka</h1>
        </div>

        <!-- Footer-->
        <div style="background-color:#54568C; padding: 20px 50px 50px 50px;">
            <div style="float: left;"><a style="color: white;" href="#aboutus">About Us</a></div>
            <div style="float: right;"><a style="color: white;" href="#signin">Sign In / Sign
                    Up</a></div>
        </div>

        <!-- Navbar -->
        <div data-role="footer" data-position="fixed">
            <nav data-role="navbar">
                <ul>
                    <li><a href="#page1" class="ui-btn menu"><span class="flaticon-053-home"></span></a></li>
                    <li><a href="#page2" class="ui-btn menu"><span class="flaticon-122-heart"></span></a></li>
                    <li><a href="#page3" class="ui-btn menu ui-btn-active"><span
                                class="flaticon-008-shopping-cart"></span></a></li>
                    <li><a href="#page4" class="ui-btn menu"><span class="flaticon-119-tag"></span></a></li>
                </ul>
            </nav>
        </div>

    </div>

    <!-- This is page 4-->
    <div data-role="page" id="page4">
        <!-- header logo-->
        <div data-role="header" data-position="fixed"
            style="margin: auto; text-align: center; background-color:#54568C;">
            <img src="images/logo.png" style="float: left;" width="100" height="100">
            <h1 class="header-title">Made In Sri Lanka</h1>
        </div>

        <!-- Footer-->
        <div style="background-color:#54568C; padding: 20px 50px 50px 50px;">
            <div style="float: left;"><a style="color: white;" href="#aboutus">About Us</a></div>
            <div style="float: right;"><a style="color: white;" href="#signin">Sign In / Sign
                    Up</a></div>
        </div>
        <!-- Navbar -->
        <div data-role="footer" data-position="fixed">
            <nav data-role="navbar">
                <ul>
                    <li><a href="#page1" class="ui-btn menu"><span class="flaticon-053-home"></span></a></li>
                    <li><a href="#page2" class="ui-btn menu"><span class="flaticon-122-heart"></span></a></li>
                    <li><a href="#page3" class="ui-btn menu"><span class="flaticon-008-shopping-cart"></span></a></li>
                    <li><a href="#page4" class="ui-btn menu ui-btn-active"><span class="flaticon-119-tag"></span></a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>



</body>

</html>