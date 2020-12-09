<!-- This is wishList page-->
<div data-role="page" id="wishList">

    <!-- header logo-->
    <div data-role="header" data-position="fixed"
         class="header">
        <img src="images/logo.png" class="logo" width="127" height="56">
    </div>

    <div role="main" class="ui-content" style="padding: 0">
        <!-- POI Card-->
        <div class="ui-grid-a search">
            <div class="header-title">
                <h3>Wish List</h3>
                <img src="../common/assets/images/icons/wishList.png" height="35px" width="35px">
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
                    include 'parts/poiCard.php';
                }
                ?>
            </div>
        </div>
    </div>
    <?php include 'parts/bottomNavbar.php' ?>
    <?php include 'parts/footer.php' ?>
</div>