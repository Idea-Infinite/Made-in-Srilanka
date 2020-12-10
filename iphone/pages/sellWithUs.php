<!-- This is sell with us page-->
<div data-role="page" id="sellWithUs">
    <?php include 'parts/header.php' ?>

    <div role="main" class="ui-content"
         style='background-image: url("../common/assets/images/christmas.jpg"); background-size: cover;'>

        <div class="header-title">
            <h3>Sell With Us</h3>
            <img src="../common/assets/images/icons/cash.png" height="35px" width="35px">
        </div>
        <div class="back-box" style="padding: 50px 20px; background-color: rgba(0, 0, 0, 0.5)">
            <form>

                <input type="text" name="firstName" id="firstName" value="" placeholder="First Name">
                <input type="text" name="lastName" id="lastName" value="" placeholder="Last Name">
                <input type="text" name="address" id="address" value="" placeholder="Address">
                <input type="text" name="nic" id="nic" value="" placeholder="NIC">
                <input type="text" name="username" id="username" value="" placeholder="Username">
                <input type="password" name="password" id="password" value="" placeholder="Password">
                <input type="password" name="rePassword" id="rePassword" value="" placeholder="Re-type password">

                <button style="opacity: 1">Sign Up</button>
                <center>
                    <a href="#login"
                       style="font-weight: 100; color: white; font-family: 'Poppins', sans-serif; font-size: 12px;">
                        Already have an account?
                    </a>
                </center>
            </form>
        </div>


    </div>
    <div style="margin-bottom: 100px;">
        <?php include 'parts/footer.php' ?>
    </div>
</div>