<?php include '../parts/head.php' ?>
<!-- This is booking page-->
<div data-role="page" id="booking"
     style='background-image: url("../../common/assets/images/booking_back.jpg");
     background-size: cover; background-position: bottom;'>
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">


        <div class="back-box" style="padding: 50px 20px; background-color: rgba(0, 0, 0, 0.7)">
            <div class="header-title" style="color: white">
                <h3>Booking</h3>
                <img src="../../common/assets/images/icons/booking.png" height="35px" width="35px">
            </div>
            <form class="booking-form">
                <input type="text" name="firstName" id="firstName" value="" placeholder="Name">
                <select name="select-location" id="select-location">
                    <option value="1" disabled hidden selected>Select Location</option>
                    <option value="2">The 2nd Option</option>
                    <option value="3">The 3rd Option</option>
                    <option value="4">The 4th Option</option>
                </select>
                <select name="select-time" id="select-time">
                    <option value="1" disabled hidden selected>Select Time Slot</option>
                    <option value="2">The 2nd Option</option>
                    <option value="3">The 3rd Option</option>
                    <option value="4">The 4th Option</option>
                </select>
                <select name="select-Session" id="select-Session">
                    <option value="1" disabled hidden selected>Select Session</option>
                    <option value="2">The 2nd Option</option>
                    <option value="3">The 3rd Option</option>
                    <option value="4">The 4th Option</option>
                </select>
                <center>
                    <span style="color:#fff;">Note: The payment of LKR 2500/= need to paid for these session.</span>
                </center>

                <button style="opacity: 1; width: 205px; margin: 25px auto auto auto;">Place Booking</button>
            </form>
        </div>
        <?php include '../parts/bottomNavbar.php' ?>
    </div><?php include '../parts/footer.php' ?>
</div>
    </body>
    </html>
