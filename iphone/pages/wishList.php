<?php include '../parts/head.php' ?>
<!-- This is wishList page-->
<div data-role="page" id="wishList">

    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content" style="padding: 0">
        <!-- POI Card-->
        <div class="ui-grid-a search">
            <div class="header-title">
                <h3>Wish List</h3>
                <img src="../../common/assets/images/icons/wishList.png" height="35px" width="35px">
            </div>
            <div class="back-box">
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
        </div>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    </html>
