<?php include '../parts/head.php' ?>
<!-- This is page 1-->
<div data-role="page" id="page1">
    <?php include '../parts/header.php' ?>

    <!-- video -->
    <video style="object-fit: cover;" width="100%" height="240" autoplay>
        <source src="../videos/intro.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- welcome note-->
    <div style="position: absolute;">
        <h2 style="padding: 5px 20px; margin-top: -120px; font-size: 20px; color: rgb(255, 255, 255); font-family: 'Poppins', sans-serif; font-weight: 200;">
            Hello Snoopy, What DIY do you want
            today?
        </h2>
    </div>

    <div role="main" class="ui-content" style="margin-top: -250px;">
        <!-- POI Card-->
        <div class="ui-grid-c search" data-filter="true" data-filter-placeholder="Search for DIY products"
             style="margin-top: 200px;">

            <div>
                <h3 style="float: left; font-weight: 800">Recommended DYI</h3>
                <a href="shop.php" data-transition="pop" style="float: right; line-height: 3.5em;">View All</a>
            </div>

            <?php
            $data = $GLOBALS['db'];
            $json = json_decode($data, true);

            foreach ($json as $key => $item) {
                if ($key % 4 == 0) {
                    $column = 'a';
                } else if ($key % 3 == 0) {
                    $column = 'b';
                } else if ($key % 2 == 0) {
                    $column = 'c';
                } else {
                    $column = 'd';
                }
                $name = $item['name'];
                $image = $item['image'];
                $price = $item['price'];
                include '../parts/poiCard.php';
                if ($key++ == 3) break;
            }
            ?>
        </div>
        <!-- advertisement roe -->
        <div>
            <?php
            $data = $GLOBALS['db'];
            $json = json_decode($data, true);
            ?>
            <div class="ui-grid-a" style="min-width: 100%">
                <div class="ui-block-a" style="min-width: 50%; background-color: #4C5B5C; margin-top: 10px">
                    <div class="ui-bar ui-bar-a" style="height:160px; background-color: slategray">Advertisement</div>
                </div>

                <div class="ui-block-b" style="min-width: 50%">
                    <div class="ui-block-a  card ui-corner-all custom-corners" style="min-width: 50%; padding-right: 1px;">
                        <a href="product.php?id=5">
                            <div class="ui-bar ui-bar-a ui-card">
                                <span class="flaticon-122-heart fav-icon-card"></span>
                                <img class="center" src="<?php echo $json[5]['image'] ?>" width="80" height="80"></br>
                                <strong><p style="text-decoration: none"
                                           class="card-title"><?php echo $json[5]['name'] ?> </p> </br> <span
                                            class="card-price">LKR <?php echo $json[5]['price'] ?? '' ?></span></strong>
                            </div>
                        </a>
                    </div>

                    <div class="ui-block-b  card ui-corner-all custom-corners" style="min-width: 50%; padding-right: 1px;">
                        <a href="product.php?id=5">
                            <div class="ui-bar ui-bar-a ui-card">
                                <span class="flaticon-122-heart fav-icon-card"></span>
                                <img class="center" src="<?php echo $json[6]['image'] ?>" width="80" height="80"></br>
                                <strong><p style="text-decoration: none"
                                           class="card-title"><?php echo $json[6]['name'] ?> </p> </br> <span
                                            class="card-price">LKR <?php echo $json[6]['price'] ?? '' ?></span></strong>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- others -->

                <div class="ui-grid-c" style="min-width: 100%">
                    <h3 style="float: left; font-weight: 800">Offers</h3>

                    <?php
                    $data = $GLOBALS['db'];
                    $json = json_decode($data, true);

                    foreach ($json as $key => $item) {

                        if ($key % 4 == 0) {
                            $column = 'a';
                        } else if ($key % 3 == 0) {
                            $column = 'b';
                        } else if ($key % 2 == 0) {
                            $column = 'c';
                        } else {
                            $column = 'd';
                        }
                        $name = $item['name'];
                        $image = $item['image'];
                        $price = $item['price'];
                        include '../parts/poiCard.php';
                        if ($key++ == 7) break;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include '../popups/introductoryInformation.php' ?>
    <?php include '../parts/bottomNavbar.php' ?>
    <?php include '../parts/footer.php' ?>
</div>

</body>
<script>
    if (!$.cookie('introduction')){
    $(window).on('load', function () {
        $.cookie('introduction', true, {path: '/'});
        $("#popupIntroductory").popup("open");
    });
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
