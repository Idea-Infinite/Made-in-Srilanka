<?php include '../parts/head.php' ?>
<!-- This is store page-->
<div data-role="page" id="product">

    <?php include '../parts/header.php' ?>

    <?php
    $data = $GLOBALS['db'];
    $json = json_decode($data, true);
    $id = $_GET['id'];
    ?>
    <div role="main" class="ui-content">

        <div class="header-title">
            <h3>Product</h3>
            <img src="../../common/assets/images/icons/login.png" height="35px" width="35px">
        </div>

        <div class="ui-bar ui-bar-a ui-card" style="height: unset; max-width: 70%; margin: auto;">

            <span class="flaticon-122-heart fav-icon-card"></span>
            <img class="center" src="../images/cat.png" style="max-width: 120px">
            <div class="ui-grid-a">
                <div class="ui-block-a" style="width: 80%">
                    <p style="font-weight: 200; font-family: 'Poppins';"><?php echo $json[$id]['name'] ?? '' ?> </p>
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
                    <img src="../../common/assets/images/icons/ar.png">
                </div>
            </div>
        </div>

        <!-- text area -->
        <div class="ui-grid-a" style="padding: 12px;">
            <div class="ui-block-a" style="width:65%">
                <div style="margin-top: 41px">
                    <p><?php echo $json[$id]['description'] ?? '' ?></p>
                </div>
            </div>

            <div class="ui-block-b" style="width: 35%">
                <div>
                    <p>
                    <center style="margin-bottom: -15px">Have a question?</center>
                    </p>
                    <button style="margin-bottom: 5px; font-size: 12px">chat now</button>
                </div>
            </div>
        </div>
        <div data-role="collapsible" data-enhanced="true"
             class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-collapsed">
                        <span class="ui-collapsible-heading ui-collapsible-heading-collapsed" style="margin-top: -30px;
                         padding: 0 12px;">
                            <a href="#" class="ui-collapsible-toggle">
                            Readmore
                            </a>
                        </span>

            <div class="ui-collapsible-content ui-collapsible-content-collapsed" aria-hidden="true">
                <p style="text-align: justify"><?php echo $json[$id]['longDescription'] ?? '' ?></p>
            </div>
        </div>

        <!-- BUTTONS -->
        <div style="
   display: inline-flex;width: 100%;
">
            <button style="margin: 10px;">Add to Cart</button>
            <button style="margin: 10px">Buy Now</button>
        </div>

        <b><span>Similar Items</span></b>
        <div class="ui-grid-a">
            <?php
            for ($i = 0; $i < 2; $i++) {
                if ($i == 0) {
                    $column = 'a';
                } else {
                    $column = 'b';
                }
                $name = $json[$i]['name'];
                $price = $json[$i]['price'];
                $key = $i;
                include '../parts/poiCard.php';
            }
            ?>
        </div>
        <div>
            <form>
                <label>Comments</label>
                <input type="text" name="comment" placeholder="Comments">
            </form>
            <table>
                <tr>
                    <td>
                        <img src="../../common/assets/images/icons/user.png" height="100px" width="100px">
                    </td>
                    <td>
                        <div class="product-comment"></div>
                        <h3>Snoopy</h3>
                        <span>eureviuryeoniuty</span>
                        <div>
                            <a style="margin: 10px">reply</a><a>like</a>
                        </div>
                        <div/>
                    </td>
                    </td>
                </tr>
            </table>
        </div>


        <?php include '../parts/bottomNavbar.php' ?>
    </div><?php include '../parts/footer.php' ?>
    </body>
    </html>
