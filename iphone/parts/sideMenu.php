<div data-role="panel" data-display="overlay" data-position-fixed="true" id="sideMenu">
    <!-- panel content goes here -->
    <div style="height: 150px; background-color:#f3f3f3; padding: 20px; display: flex">
        <img src="../../common/assets/images/icons/user.png" height="100px" width="100px">
        <div class="side-menu-info">
            <p>Hi Snoopy</p>
            <p>Diamonds: 50</p>
            <p>View Profile</p>
        </div>
    </div>
    <table class="side-menu">
        <tr>
            <td><img src="../../common/assets/images/icons/home.png" width="35" height="35"></td>
            <td><a href="../pages/home.php">Home</a></td>
        </tr>
        <tr>
            <td><img src="../../common/assets/images/icons/shop.png" width="35" height="35"></td>
            <td><a href="../pages/shop.php">Shop</a></td>
        </tr>
        <tr>
            <td><img src="../../common/assets/images/icons/booking.png" width="35" height="35"></td>
            <td><a href="../pages/booking.php">Book Class</a></td>
        </tr>
        <tr>
            <td><img src="../../common/assets/images/icons/order_history.png" width="35" height="35"></td>
            <td><a href="../pages/orderHistory.php">Order History</a></td>
        </tr>
        <tr>
            <td><img src="../../common/assets/images/icons/contact_us.png" width="35" height="35"></td>
            <td><a href="../pages/contactUs.php">Contact Us</a></td>
        </tr>
        <tr>
            <td><img src="../../common/assets/images/icons/icons8_information_96px.png" width="35" height="35"></td>
            <td><a href="../pages/about.php">About Us</a></td>
        </tr>
        <tr>
            <td><img src="../../common/assets/images/icons/cash.png" width="35" height="35"></td>
            <td><a href="../pages/sellWithUs.php">Sell with Us</a></td>
        </tr>
        <tr>
            <td><img src="../../common/assets/images/icons/qr.png" width="35" height="35"></td>
            <td><a data-rel="popup" data-position-to="window" href="#viewQR">Scan QR</a></td>
        </tr>
        <tr>
            <td><img src="../../common/assets/images/icons/exit.png" width="35" height="35"></td>
            <td><a  href="#popupDialog" data-rel="popup" data-position-to="window" data-transition="pop">Logout</a></td>
        </tr>
    </table>
    <div data-role="popup" id="popupDialog" data-overlay-theme="b" data-theme="b" data-dismissible="true"
         style="max-width:400px;">
        <div data-role="header" data-theme="a">
            <h1>Delete Page?</h1>
        </div>
        <div role="main" class="ui-content">
            <h3 class="ui-title">Are you sure you want to Logout?</h3>
            <a href="../pages/logIn.php" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b"
               data-transition="flow">Logout</a>
        </div>
    </div>

    <div style="width: 100%; background-color:#f3f3f3; padding: 0; position:absolute; bottom: 0">
        <p style="text-align: center;">Version 1.0.0</p>
    </div>
</div><!-- /panel -->

<?php include("../popups/viewQR.php") ?>