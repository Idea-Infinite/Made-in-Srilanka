<?php include '../parts/head.php' ?>
<!-- This is shop page-->
<div data-role="page" id="cart">
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">
        <div class="header-title" style="margin-bottom: 10px;">
            <h3>Cart</h3>
            <img src="../../common/assets/images/icons/checkout.png" height="35px" width="35px">
        </div>
        <!-- POI Card-->
        <div>
            <!--card 1-->
            <div class="ui-grid-c back-box" style="padding: 5px; margin-bottom: 10px">
                <div class="ui-block-a " style="width: 15%;">
                    <img class="center" src="../images/cat.png"
                         style="width: 35px; top: 50%; position: absolute; transform: translateY(-50%);">
                </div>
                <div class="ui-block-b" style="width: 50%;">
                    <p>Title</p>
                </div>
                <div class="ui-block-c" style="width: 10%;">
                    <p>x5</p>
                </div>
                <div class="ui-block-d" style="width: 25%; font-size: 20px; ">
                    <p>$54.00</p>
                </div>
            </div>

            <!--card 2-->
            <div class="ui-grid-c back-box" style="padding: 5px; margin-bottom: 10px">
                <div class="ui-block-a " style="width: 15%;">
                    <img class="center" src="../images/cat.png"
                         style="width: 35px; top: 50%; position: absolute; transform: translateY(-50%);">
                </div>
                <div class="ui-block-b" style="width: 50%;">
                    <p>Title</p>
                </div>
                <div class="ui-block-c" style="width: 10%;">
                    <p>x5</p>
                </div>
                <div class="ui-block-d" style="width: 25%; font-size: 20px; ">
                    <p>$54.00</p>
                </div>
            </div>

            <!--card 3-->
            <div class="ui-grid-c back-box" style="padding: 5px; margin-bottom: 10px">
                <div class="ui-block-a " style="width: 15%;">
                    <img class="center" src="../images/cat.png"
                         style="width: 35px; top: 50%; position: absolute; transform: translateY(-50%);">
                </div>
                <div class="ui-block-b" style="width: 50%;">
                    <p>Title</p>
                </div>
                <div class="ui-block-c" style="width: 10%;">
                    <p>x5</p>
                </div>
                <div class="ui-block-d" style="width: 25%; font-size: 20px; ">
                    <p>$54.00</p>
                </div>
            </div>
            <center><h1>Total: <span class="price-color">LKR.10,304.00</span></h1></center>
            <center>
                <button>Checkout</button>
            </center>

        </div>
    </div>

    <?php include '../parts/bottomNavbar.php' ?>
</div><?php include '../parts/footer.php' ?>
</body>
</html>
