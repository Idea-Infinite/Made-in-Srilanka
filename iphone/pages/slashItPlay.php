<?php include '../parts/head.php' ?>
<!-- This is slash it page-->
<div data-role="page" id="slashit">
    <?php include '../parts/header.php' ?>
    <?php
    $data = $GLOBALS['db'];
    $json = json_decode($data, true);
    $id = $_GET['id'];
    ?>
    <div role="main" class="ui-content">
        <center>
            <img src="../../common/assets/images/slashit/select_product.png"
                 style="margin: -20px -20px 20px -10px; width: 110%;">
        </center>

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

        <?php include '../parts/bottomNavbar.php' ?>
    </div><?php include '../parts/footer.php' ?>
    </body>
    </html>
