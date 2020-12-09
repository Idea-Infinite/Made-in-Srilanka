<!-- This is shop page-->
<div data-role="page" id="shop">

    <!-- header logo-->
    <div data-role="header" data-position="fixed"
         class="header">
        <img src="images/logo.png" class="logo" width="127" height="56">
    </div>

    <div role="main" class="ui-content" style="margin-top: -250px;">
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
                include 'parts/poiCard.php';
            }
            ?>
        </div>
    </div>
    <?php include 'parts/bottomNavbar.php' ?>
    <?php include 'parts/footer.php' ?>
</div>