<?php include '../parts/head.php' ?>
<!-- This is store page-->
<div data-role="page" id="product">

    <?php include '../parts/header.php' ?>

    <?php
    $data = $GLOBALS['db'];
    $json = json_decode($data, true);
    $id = $_GET['id'];
    ?>
    <div role="main" class="ui-content" style="padding: 0">

        <div class="header-title">
            <h3>Product</h3>
            <img src="../../common/assets/images/icons/login.png" height="35px" width="35px">
        </div>
        <!--start of main grid-->
        <div class="ui-grid-a" style="padding: 30px">
            <!--            start of main product block-->
            <div class="ui-block-a">
                <div class="ui-bar ui-bar-a ui-card" style="height: unset; max-width: 70%; margin: auto;">

                    <span class="flaticon-122-heart fav-icon-card" id="<?php echo $id ?>"
                          onclick="favourite(this)"></span>
                    <?php echo '<img class="center" src="', $json[$id]['image'], '" style="max-width: 120px">' ?? '' ?>
                    <div class="ui-grid-a">
                        <div class="ui-block-a" style="width: 80%">
                            <p style="font-weight: 200; font-family: 'Poppins',serif;"><?php echo $json[$id]['name'] ?? '' ?> </p>
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
                            <a data-ajax="false" href="#viewAR" data-rel="popup" data-position-to="window"
                               data-transition="pop"><img src="../../common/assets/images/icons/ar.png"></a>
                        </div>
                    </div>
                    <p><?php echo $json[$id]['description'] ?? '' ?></p>
                </div>
            </div>
            <!--            start of feature product block-->
            <div class="ui-block-b ipad-feature-product">
                <div>
                    <p>
                    <center style="margin-bottom: -15px">Have a question?</center>
                    </p>
                    <a data-rel="popup" data-position-to="window"
                       data-transition="pop" href="#chatWithSeller">
                        <button style="margin: auto;  font-size: 12px; width:40%">chat now</button>
                    </a>
                </div>
                <!-- BUTTONS -->
                <div style="display: inline-flex;width: 100%; justify-content: center">
                    <a style="margin: 10px;" href="#cart-feedback" data-rel="popup" data-transition="pop">
                        <button id="addToCart" style="margin: 10px;">Add to Cart</button>
                    </a>
                    <a style="margin: 10px">
                        <button>Buy Now</button>
                    </a>
                </div>

                <div style="display: flex" data-role="popup" id="cart-feedback">
                    <h3>Added to Cart</h3> <img style="width: 60px" src="../../common/assets/images/checked-green.png">
                </div>
                <!--                start of mini product grid-->
                <div class="ipad-feature-products-mini">
                    <div class="ui-grid-a">
                        <div class="ui-block-a">
                            <a target="_parent" href="product.php?id=<?php echo $json[$id]['id'] ?>">
                                <div class="ui-bar ui-bar-a ui-card"
                                     style="height: unset; max-width: 70%; margin: auto;">

                                    <?php echo '<img class="center" src="', $json[$id + 1]['image'], '" style="width: 100px">' ?? '' ?>
                                    <p style="font-weight: 200; font-family: 'Poppins';"><?php echo $json[$id + 1]['name'] ?? '' ?> </p>
                                    <p class="card-price"
                                       style="position: relative"><?php echo $json[$id + 1]['price'] ?? '' ?></p>
                                </div>
                            </a>
                        </div>
                        <div class="ui-block-b">
                            <a target="_parent" href="product.php?id=<?php echo $json[$id]['id'] ?>">
                                <div class="ui-bar ui-bar-a ui-card"
                                     style="height: unset; max-width: 70%; margin: auto;">
                                    <?php echo '<img class="center" src="', $json[$id + 2]['image'], '" style="width: 100px">' ?? '' ?>
                                    <div class="ui-block-a" style="width: 80%">
                                        <p style="font-weight: 200; font-family: 'Poppins';"><?php echo $json[$id + 2]['name'] ?? '' ?> </p>
                                        <p class="card-price"
                                           style="position: relative"><?php echo $json[$id + 2]['price'] ?? '' ?></p>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- text area -->
            <div class="ui-grid-a" style="padding: 12px;">
                <div class="ui-block-a" style="width:65%">
                    <div style="margin-top: 41px">
                    </div>
                </div>

            </div>

            <div>
                <h2>Product Description</h2>
                <p style="text-align: justify; font-weight: bolder; "><?php echo $json[$id]['longDescription'] ?? '' ?></p>
                <br/>
            </div>

            <!--<div data-role="collapsible" data-enhanced="true"
                 class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-collapsed">
                        <span class="ui-collapsible-heading ui-collapsible-heading-collapsed" style="margin-top: -30px;
                         padding: 0 12px;">
                            <a data-ajax="false" href="#" class="ui-collapsible-toggle">
                            Readmore
                            </a>
                        </span>

                <div class="ui-collapsible-content ui-collapsible-content-collapsed" aria-hidden="true">
                    <p style="text-align: justify"><?php /*echo $json[$id]['longDescription'] ?? '' */ ?></p>
                </div>
            </div>-->

            <?php include '../parts/comments.php' ?>
            <a data-rel="popup" data-position-to="window"
               data-transition="pop" href="#customer_Rewards">
                <button style="margin-bottom: 5px; font-size: 12px">Diamonds</button>
            </a>
            <?php include '../popups/customer_Rewards.php' ?>
            <?php include '../popups/chatWithSeller.php' ?>
            <?php include '../popups/viewAR.php' ?>
            <?php include '../parts/bottomNavbar.php' ?>
        </div><?php include '../parts/footer.php' ?>
    </div>
</div>
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
        // alert("Added to the cart");
    });
</script>
</html>
