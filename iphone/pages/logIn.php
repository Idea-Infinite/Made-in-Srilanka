<!-- This is login page-->
<div data-role="page" id="login"
     style='background-image: url("../common/assets/images/christmas.jpg"); background-size: cover;'>
    <?php include 'parts/header.php' ?>

    <div role="main" class="ui-content">

        <div class="header-title">
            <h3>Login</h3>
            <img src="../common/assets/images/icons/login.png" height="35px" width="35px">
        </div>
        <div class="back-box" style="padding: 50px 20px; background-color: rgba(0, 0, 0, 0.5)">
            <form>

                <input type="text" name="username" id="username" value="" placeholder="Username">
                <input type="password" name="password" id="password" value="" placeholder="Password">

                <button style="opacity: 1">Sign In</button>
                <center>
                    <a href="#register"
                       style="font-weight: 100; color: white; font-family: 'Poppins', sans-serif; font-size: 12px;">
                        Don't have an account?
                    </a>
                </center>
            </form>
        </div>


    </div>
    <div style="margin-bottom: 100px;">
        <?php include 'parts/footer.php' ?>
    </div>
</div>pe