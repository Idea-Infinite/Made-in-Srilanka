<div data-role="panel" data-display="overlay" data-position-fixed="true" id="sideMenu"  style="min-width: 400px; z-index: 1010;">
    <!-- panel content goes here -->
    <div style="height: 150px; background-color:#f3f3f3; padding: 20px; display: flex">
        <img src="../../common/assets/images/icons/user.png" height="100px" width="100px">
        <div class="side-menu-info">
            <p>Hi Snoopy</p>
            <p>Diamonds: 50</p>
            <p>View Profile</p>
        </div>
    </div>
    <table class="side-menu" style="text-align: center">
        <tr>
            <td><a href="../pages/home.php"><img src="../../common/assets/images/icons/home.png" width="35" height="35"><br/>Home</a></td>
            <td><a href="../pages/booking.php"><img src="../../common/assets/images/icons/booking.png" width="35" height="35"><br/>Book Class</a></td>
            <td><a href="../pages/contactUs.php"><img src="../../common/assets/images/icons/contact_us.png" width="35" height="35"><br/>Contact Us</a></td>
        </tr>
        <tr>
            <td><a href="../pages/shop.php"><img src="../../common/assets/images/icons/shop.png" width="35" height="35"><br/>Shop</a></td>
            <td><a href="../pages/orderHistory.php"><img src="../../common/assets/images/icons/order_history.png" width="35" height="35"><br/>Order History</a></td>
            <td><a href="../pages/about.php"><img src="../../common/assets/images/icons/icons8_information_96px.png" width="35" height="35"><br/>About Us</a></td>
        </tr>
        <tr>
            <td><a data-rel="popup" data-position-to="window" href="#viewQR"><img src="../../common/assets/images/icons/qr.png" width="35" height="35"><br/>Scan QR</a></td>
            <td><a href="../pages/sellWithUs.php"><img src="../../common/assets/images/icons/cash.png" width="35" height="35"><br/>Sell with Us</a></td>
            <td><a href="../pages/logIn.php"><img src="../../common/assets/images/icons/exit.png" width="35" height="35"><br/>Logout</a></td>
        </tr>
    </table>

    <div style="width: 100%; background-color:#f3f3f3; padding: 0; position:absolute; bottom: 0">
        <p style="text-align: center;">Version 1.0.0</p>
    </div>
</div>

<?php include("../popups/viewQR.php") ?>
