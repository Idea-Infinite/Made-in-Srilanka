<?php include '../parts/head.php' ?>
<!-- This is booking page-->
<div data-role="page" id="booking"
     style='background-image: url("../common/assets/images/booking_back.jpg");
     background-size: cover; background-position: bottom;'>
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">

        <div class="header-title">
            <h3>Booking</h3>
            <img src="../../common/assets/images/icons/booking.png" height="35px" width="35px">
        </div>
        <div class="back-box" style="padding: 50px 20px; background-color: rgba(0, 0, 0, 0.5)">
            <form>
                <input type="text" name="firstName" id="firstName" value="" placeholder="Name" required>
                <select name="select-native-1" id="location" required>
                    <option value="1" disabled hidden selected>Select Location</option>
                    <option value="2">Nugegoda</option>
                    <option value="3">Kurunegala</option>
                    <option value="4">Kandy</option>
                </select>
                <select name="select-native-1" id="timeSlot" required>
                    <option value="1" disabled hidden selected>Select Time Slot</option>
                    <option value="2">15:00 p.m</option>
                    <option value="3">16:00 p.m</option>
                    <option value="4">17:00 p.m</option>
                </select>
                <select name="select-native-1" id="select-native-1" required>
                    <option value="1" disabled hidden selected>Select Session</option>
                    <option value="2">Hand Craft</option>
                    <option value="3">Wooden Craft</option>
                </select>
                <center>
                    <span style="color:#fff;">Note: The payment of LKR 2500/= need to paid for these session.</span>
                </center>

                <button style="opacity: 1">Place Booking</button>
            </form>
        </div>
        <?php include '../parts/bottomNavbar.php' ?>
    </div><?php include '../parts/footer.php' ?>
    </body>
    </html>
