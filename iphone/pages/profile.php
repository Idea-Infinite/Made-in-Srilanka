<?php include '../parts/head.php' ?>
<!-- This is profile page-->
<div data-role="page" id="profile"
     style='background-image: url("../common/assets/images/profile-back.jpg");
     background-size: cover; background-position: bottom;'>

    <?php include '../parts/header.php' ?>

    <div class="header-title" style="margin-top: -10px;">
        <h3>Profile</h3>
        <img src="../../common/assets/images/icons/registration.png" height="35px" width="35px">
    </div>
    <div style="padding: 10px 20px; background-color: rgba(0, 0, 0, 0)">
        <div class="back-box" style="padding: 50px 20px;">
            <center>
                <img src="../../common/assets/images/icons/user.png" height="100px" width="100px">
            </center>
            <table style="width:100%; padding-top: 40px">
                <tr>
                    <td>Username</td>
                    <td>Smith</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>Smith@gmail.com</td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td>Smith</td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>Jackson</td>
                </tr>
            </table>
            <div style="display: flex; padding-top: 20px">
                <button style="opacity: 1; font-size: 14px;">Order History</button>
                <div style="width: 20px"></div>
                <button style="opacity: 1; font-size: 14px;">Edit Details</button>
            </div>
        </div>
        <?php include '../parts/bottomNavbar.php' ?>
    </div><?php include '../parts/footer.php' ?>
    </body>
    </html>
