<?php include '../parts/head.php' ?>
<!-- This is shop page-->
<div data-role="page" id="shop">
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">
        <div class="header-title" style="margin-bottom: 10px;">
            <h3>Shop</h3>
            <img src="../../common/assets/images/icons/shop.png" height="35px" width="35px">
        </div>
        <!-- POI Card-->
        <div class="ui-grid-a search" data-filter="true" data-filter-placeholder="Search for DIY products"
             style="margin-top: 10px;">
            <div>
                <h3 style="float: left; font-weight: 800">Recommended DYI</h3>
                <a data-ajax="false" href="../pages/store.php" data-transition="pop"
                   style="float: right; line-height: 3.5em;">View
                    All</a>
            </div>
            <?php
            $data = $GLOBALS['db'];
            $json = json_decode($data, true);

            foreach ($json as $key => $item) {
                if ($key % 2 == 0) {
                    $column = 'a';
                } else {
                    $column = 'b';
                }
                $name = $item['name'];
                $price = $item['price'];
                include '../parts/poiCard.php';
            }
            ?>
        </div>
    </div>
    <?php include '../parts/bottomNavbar.php' ?>
    <?php include '../parts/footer.php' ?>
</div>
</body>
</html>
