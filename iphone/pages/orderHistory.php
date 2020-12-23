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
            <p id="loading" style="text-align: center">Loading...</p>
            <div id="items">
                <!--cards-->
            </div>
        </div>
        <?php include '../popups/addRating.php' ?>
        <?php include '../parts/bottomNavbar.php' ?>
    </div><?php include '../parts/footer.php' ?>
    </body>
    <script>
        const update = async () => {
            cart = JSON.parse($.cookie('orderHistory'));
            for (let i = 0; i < cart.length; i++) {
                let id = cart[i]['id'];
                let qty = cart[i]['qty'];
                await addCard(id, qty);
            }
        }

        const addCard = async (id, qty) =>
            $.getJSON("/mobile/common/functions/getProduct.php?id=" + id, function (data, status) {
                let price = parseFloat(data["price"]) * qty;

                $('#items').append(
                    '                <div class="ui-grid-c back-box" style="padding: 5px; margin-bottom: 10px">\n' +
                    '                    <div class="ui-block-a " style="width: 15%;">\n' +
                    '                        <img class="center" src="' + data["image"] + '"\n' +
                    '                             style="width: 75px; top: 50%; position: absolute; transform: translateY(-50%);">\n' +
                    '\n' +
                    '                    </div>\n' +
                    '                    <div class="ui-block-b" style="width: 50%;">\n' +
                    '                        <p>' + data["name"] + '</p>\n' +
                    '                        <button style="opacity: 1; padding: 4px; background-color: #fff63f; color: black;\n' +
                    '                                border-color: #fff; box-shadow: none; font-size: 11px" disabled>\n' +
                    '                            Pending\n' +
                    '                        </button>\n' +
                    '                    </div>\n' +
                    '                    <div class="ui-block-c" style="width: 10%;">\n' +
                    '                        <p>x ' + qty + '</p>\n' +
                    '                    </div>\n' +
                    '                    <div class="ui-block-d" style="width: 25%; font-size: 12px; ">\n' +
                    '                        <a href="#popuprating" data-rel="popup" data-position-to="window"\n' +
                    '                           class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a"\n' +
                    '                           data-transition="pop">Rate Now</a>\n' +
                    '                        <p>LKR ' + data["price"] + '</p>\n' +
                    '                    </div>\n' +
                    '                </div>\n');
            });

        if ($.cookie('orderHistory') != null) {
            setTimeout(function () {
                $('#loading').hide();
                update();
            }, 2000);
        }

    </script>
    </html>
