<?php include '../parts/head.php' ?>
<!-- This is shop page-->
<div data-role="page" id="orderHistory">
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">
        <div class="header-title" style="margin-bottom: 10px;">
            <h3>Order History</h3>
            <img src="../../common/assets/images/icons/shop.png" height="35px" width="35px">
        </div>
        <!-- POI Card-->
        <div class="ui-grid-a search" data-filter="true" data-filter-placeholder="Search for orders"
             style="margin-top: 10px;">
            <div>
                <table class="wish-list">
                    <tr>
                        <td style="width: 30%"><img class="center" src="../images/cat.png" width="80" height="80">

                        </td>
                        <td style="width: 30%;">
                            <p>Title</p>
                            <button style="opacity: 1; padding: 4px; background-color: #9EFFB4; color: black" disabled>
                                Success
                            </button>
                        </td>
                        <td style="width: 10%">
                            <p>x5</p>
                        </td>
                        <td style="font-size: 12px; width: 85px;">
                            <button>Rate Now</button>
                            <p>Price</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php include '../parts/bottomNavbar.php' ?>
    </div><?php include '../parts/footer.php' ?>
    </body>
    </html>
