<?php include '../parts/head.php' ?>
<!-- This is store page-->
<div data-role="page" id="product">

    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">

        <div class="header-title">
            <h3>Product</h3>
            <img src="../../common/assets/images/icons/login.png" height="35px" width="35px">
        </div>

        <div class="back-box">
            <div class="ui-block-a  card ui-corner-all custom-corners">
                <div class="ui-bar ui-bar-a ui-card">
                    <span class="flaticon-122-heart fav-icon-card"></span>
                    <img class="center" src="../images/cat.png" width="80" height="80"></br>
                    <p class="card-title"><?php echo $namesss ?? 'jjjjj' ?> </p> </br> <span class="card-price">LKR 500.00</span>
                </div>
            </div>
        </div>

        <!-- POI Card-->
        <div class="ui-grid-a search" data-filter="true" data-filter-placeholder="Search for DIY products"
             style="margin-top: 200px;">
            <div>
                <h3 style="float: left; font-weight: 800">Recommended DYI</h3>
                <a href="pages/store.php" data-transition="pop" style="float: right; line-height: 3.5em;">View All</a>
            </div>
            <?php
            $data = file_get_contents('..\common\db.json');
            $json = json_decode($data, true);

            foreach ($json as $key => $item) {
                if ($key % 2 == 0) {
                    $column = 'a';
                } else {
                    $column = 'b';
                }
                $name = $item['name'];
                include '../parts/poiCard.php';
            }
            ?>
        </div>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
</div>
    </body>
    </html>
