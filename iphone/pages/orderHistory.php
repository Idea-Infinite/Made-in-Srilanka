<?php include '../parts/head.php' ?>
<!-- This is order history page-->
<div data-role="page" id="orderHistory">
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">
        <div class="header-title" style="margin-bottom: 10px;">
            <h3>Order History</h3>
            <img src="../../common/assets/images/icons/shop.png" height="35px" width="35px">
        </div>
        <!-- POI Card-->

        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'success') {
            echo '<div class="ui-grid-c back-box" ' .
                'style="padding: 15px; margin-bottom: 10px; background-color: #D4EDDA; color: #009999">' .
                'Your Payment is Successful! You will receive your order soon.</div>';

        } else if (isset($_GET['status']) && $_GET['status'] == 'failed') {
            echo '<div class="ui-grid-c back-box" ' .
                'style="padding: 15px; margin-bottom: 10px; background-color: #F8D7DA; color: #721C24">' .
                'Your Payment is not successful! Please check your card detail.</div>';
        }
        ?>
        <div class="ui-grid-a search" data-filter="true" data-filter-placeholder="Search for orders"
             style="margin-top: 10px;">
            <div>
                <!--card 1-->
                <div class="ui-grid-c back-box" style="padding: 5px; margin-bottom: 10px">
                    <div class="ui-block-a " style="width: 15%;">
                        <img class="center" src="../images/cat.png"
                             style="width: 35px; top: 50%; position: absolute; transform: translateY(-50%);">

                    </div>
                    <div class="ui-block-b" style="width: 50%;">
                        <p>Title</p>
                        <button style="opacity: 1; padding: 4px; background-color: #9EFFB4; color: black;
                                border-color: #fff; box-shadow: none; font-size: 11px" disabled>
                            Success
                        </button>
                    </div>
                    <div class="ui-block-c" style="width: 10%;">
                        <p>x5</p>
                    </div>
                    <div class="ui-block-d" style="width: 25%; font-size: 11px; ">
                        <a href="#popuprating" data-rel="popup" data-position-to="window"
                           class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a"
                           data-transition="pop">Rate Now</a>

                        <p>Price</p>
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
                        <button style="opacity: 1; padding: 4px; background-color: #fff63f; color: black;
                                border-color: #fff; box-shadow: none; font-size: 11px" disabled>
                            Pending
                        </button>
                    </div>
                    <div class="ui-block-c" style="width: 10%;">
                        <p>x5</p>
                    </div>
                    <div class="ui-block-d" style="width: 25%; font-size: 12px; ">
                        <a href="#popuprating" data-rel="popup" data-position-to="window"
                           class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a"
                           data-transition="pop">Rate Now</a>
                        <p>Price</p>
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
                        <button style="opacity: 1; padding: 4px; background-color: #9EFFB4; color: black;
                                border-color: #fff; box-shadow: none; font-size: 11px" disabled>
                            Success
                        </button>
                    </div>
                    <div class="ui-block-c" style="width: 10%;">
                        <p>x5</p>
                    </div>
                    <div class="ui-block-d" style="width: 25%; font-size: 12px; ">

                        <a href="#popuprating" data-rel="popup" data-position-to="window"
                           class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a"
                           data-transition="pop">Rate Now</a>
                        <p>Price</p>
                    </div>
                </div>
            </div>
        </div>
        <?php include '../popups/addRating.php' ?>
        <?php include '../parts/bottomNavbar.php' ?>
    </div><?php include '../parts/footer.php' ?>
    </body>
    <script>
        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'success') {
            echo '$.removeCookie(\'cart\', { path: \'/\' });';
        }
        ?>
    </script>
    </html>
