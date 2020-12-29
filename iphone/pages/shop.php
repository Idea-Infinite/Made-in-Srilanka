<?php include '../parts/head.php' ?>
<!-- This is shop page-->
<div data-role="page" id="shop">
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content" style="margin: 0; padding: 0;">
        <div class="header-title" style="margin-bottom: 10px;">
            <h3>Shop</h3>
            <img alt="page_icon" src="../../common/assets/images/icons/shop.png" height="35" width="35">
        </div>
        <!-- POI Card-->
        <div class="ui-grid-d search" data-filter="true" data-filter-placeholder="Search for DIY products"
             style="padding: 15px; width: fit-content; margin: 10px auto 100px auto;">
            <div>
                <h3 style="float: left; font-weight: 800">DYI Products</h3>
            </div>
            <?php
            $data = $GLOBALS['db'];
            $json = json_decode($data, true);

            foreach ($json as $key => $item) {
                if ($key % 4 == 0) {
                    $column = 'a';
                } else if ($key % 4 == 1) {
                    $column = 'b';
                } else if ($key % 4 == 2) {
                    $column = 'c';
                } else {
                    $column = 'd';
                }
                $name = $item['name'];
                $price = $item['price'];
                $image = $item['image'];
                include '../parts/poiCard.php';
            }
            ?>
        </div>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    <script>
        if ($.cookie('wishList') != null) {
            data = JSON.parse($.cookie('wishList'));
            for (let i = 0; i < data.length; i++) {
                $("#" + data[i]).css('color', 'red');
            }
        }

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
    </script>
    </html>
