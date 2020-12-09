<!-- This is page 1-->
<div data-role="page" id="page1">

    <!-- header logo-->
    <div data-role="header" data-position="fixed"
         class="header">
        <img src="images/logo.png" class="logo" width="127" height="56">
    </div>

    <!-- video -->
    <video style="object-fit: cover;" width="100%" height="240" autoplay>
        <source src="videos/intro.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- welcome note-->
    <div style="position: absolute;">
        <h2
            style="padding: 5px 20px; margin-top: -120px; font-size: 20;
                color: rgb(255, 255, 255); font-family: 'Poppins', sans-serif; font-weight: 200;">
            Hello Snoopy, What DIY do you want
            today?
        </h2>
    </div>

    <div role="main" class="ui-content" style="margin-top: -250px;">
        <!-- POI Card-->
        <div class="ui-grid-a search" data-filter="true" data-filter-placeholder="Search for DIY products"
             style="margin-top: 200px;">
            <div>
                <h3 style="float: left">Recommended DYI</h3>
                <h3 style="float: right">View All</h3>
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