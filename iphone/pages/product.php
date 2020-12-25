<?php include '../parts/head.php' ?>
<!-- This is store page-->
<div data-role="page" id="product">

    <?php include '../parts/header.php' ?>

    <?php
    $data = $GLOBALS['db'];
    $json = json_decode($data, true);
    $id = $_GET['id'];
    ?>
    <div role="main" class="ui-content">

        <div class="header-title">
            <h3>Product</h3>
            <img src="../../common/assets/images/icons/login.png" height="35px" width="35px">
        </div>

        <div class="ui-bar ui-bar-a ui-card" style="height: unset; max-width: 70%; margin: auto;">

            <span class="flaticon-122-heart fav-icon-card" id="<?php echo $id ?>" onclick="favourite(this)"></span>
            <?php echo '<img class="center" src="', $json[$id]['image'], '" style="max-width: 120px">' ?? '' ?>
            <div class="ui-grid-a">
                <div class="ui-block-a" style="width: 80%">
                    <p style="font-weight: 200; font-family: 'Poppins';"><?php echo $json[$id]['name'] ?? '' ?> </p>
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                        if ((int)$json[$id]['rating'] <= $i) {
                            echo
                            '<span class="fa fa-star"></span>';
                        } else {
                            echo
                            '<span class="fa fa-star fa-checked"></span>';
                        }
                    }
                    ?>
                    <p class="card-price" style="position: relative"><?php echo $json[$id]['price'] ?? '' ?></p>
                </div>
                <div class="ui-block-b" style="width: 20%">
                    <a href="#viewAR" data-rel="popup" data-position-to="window"
                       data-transition="pop"><img src="../../common/assets/images/icons/ar.png"></a>
                </div>
            </div>
        </div>

        <!-- text area -->
        <div class="ui-grid-a" style="padding: 12px;">
            <div class="ui-block-a" style="width:65%">
                <div style="margin-top: 41px">
                    <p><?php echo $json[$id]['description'] ?? '' ?></p>
                </div>
            </div>

            <div class="ui-block-b" style="width: 35%">
                <div>
                    <p>
                    <center style="margin-bottom: -15px">Have a question?</center>
                    </p>
                    <a data-rel="popup" data-position-to="window"
                       data-transition="pop" href="#chatWithSeller">
                        <button style="margin-bottom: 5px; font-size: 12px">chat now</button>
                    </a></div>
            </div>
        </div>
        <div data-role="collapsible" data-enhanced="true"
             class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-collapsed">
                        <span class="ui-collapsible-heading ui-collapsible-heading-collapsed" style="margin-top: -30px;
                         padding: 0 12px;">
                            <a href="#" class="ui-collapsible-toggle">
                            Readmore
                            </a>
                        </span>

            <div class="ui-collapsible-content ui-collapsible-content-collapsed" aria-hidden="true">
                <p style="text-align: justify"><?php echo $json[$id]['longDescription'] ?? '' ?></p>
            </div>
        </div>

        <!-- BUTTONS -->
        <div style="
   display: inline-flex;width: 100%;
">
            <button id="addToCart" style="margin: 10px;">Add to Cart</button>
            <button style="margin: 10px">Buy Now</button>
        </div>

        <b><span>Similar Items</span></b>
        <div class="ui-grid-a">
            <?php
            for ($i = 0; $i < 2; $i++) {
                if ($i == 0) {
                    $column = 'a';
                } else {
                    $column = 'b';
                }
                $name = $json[$i]['name'];
                $price = $json[$i]['price'];
                $image = $json[$i]['image'];
                $key = $i;
                include '../parts/poiCard.php';
            }
            ?>
        </div>
        <?php include '../parts/comments.php' ?>

        <?php include '../popups/chatWithSeller.php' ?>
        <?php include '../popups/viewAR.php' ?>
        <?php include '../parts/bottomNavbar.php' ?>
    </div><?php include '../parts/footer.php' ?>
    </body>
    <script>
        $(window).on('load', function () {
            if ($.cookie('wishList') != null) {
                data = JSON.parse($.cookie('wishList'));
                for (let i = 0; i < data.length; i++) {
                    $("#" + data[i]).css('color', 'red');
                }
            }
        });

        function favourite(e) {
            let id = e.id;
            if ($.cookie('wishList') != null) {
                data = JSON.parse($.cookie('wishList'));
                if (!data.includes(id)) {
                    data.push(id);
                    $(e).css('color', 'red')
                } else {
                    data = data.filter(item => item !== id);
                    $(e).css('color', 'black')
                }
            } else {
                data = [];
                data.push(id);
                $(e).css('color', 'red')
            }
            $.cookie('wishList', JSON.stringify(data), {path: '/'});
        }

        $addCartButton = $('#addToCart');
        $addCartButton.on('click', function () {
            let found = false;
            let qty = 1;
            if ($.cookie('cart') != null) {
                data = JSON.parse($.cookie('cart'));
                for (let i = 0; i < data.length; i++) {
                    if (data[i]['id'] === <?php echo $id ?>) {
                        data[i]['qty'] = data[i]['qty'] + 1;
                        qty = data[i]['qty'];
                        found = true;
                        break;
                    }
                }
            } else {
                data = [];
            }
            if (!found) {
                data.push({"id": <?php echo $id ?>, "qty": qty});
            }
            $.cookie('cart', JSON.stringify(data), {path: '/'});
            $('#addToCart').html('Added ' + qty);
            alert("Added to the cart");
        });
    </script>
    </html>
