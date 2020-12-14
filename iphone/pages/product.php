<?php include '../parts/head.php' ?>
<!-- This is store page-->
<div data-role="page" id="product">

    <?php include '../parts/header.php' ?>

    <?php
    $data = file_get_contents('..\..\common\db.json');
    $json = json_decode($data, true);
    $id = $_GET['id'];
    ?>
    <div role="main" class="ui-content">

        <div class="header-title">
            <h3>Product</h3>
            <img src="../../common/assets/images/icons/login.png" height="35px" width="35px">
        </div>

        <div class="back-box">
            <div class="ui-block-a  card ui-corner-all custom-corners" style="width:293px; height: 203px">
                <div class="ui-bar ui-bar-a ui-card">

                    <span class="flaticon-122-heart fav-icon-card"></span>
                    <img class="center" src="../images/cat.png" width="80" height="80">
                    <div class="ui-grid-a">
                        <div class="ui-block-a">
                            <p class="card-title">
                                <?php echo $json[$id]['name'] ?? '' ?> </p>
                            <p>rating stars</p>
                            <p class="card-price">
                                <?php echo $json[$id]['price'] ?? '' ?></p>
                        </div>
                        <div class="ui-block-b">
                            <img src="../../common/assets/images/icons/ar.png">
                        </div>
                    </div>
                </div>
            </div>

            <!-- text area -->

            <p>rsgiuojsafghsuiogsjivguicuihvuihkhcguircghuirhecguihekiugvieghuiech <a>Read More</a></p>
            <div style="
   display: inline-flex;width: 100%;
">
                <button style="margin: 10px;">Add to Cart</button>
                <button style="margin: 10px">Buy Now</button>
            </div>
            <span>Similar Items</span>
            <div class="ui-grid-a">
                <div class="ui-block-a">
                    <div class="ui-bar ui-bar-a">
                        <div class="ui-bar ui-bar-a ui-card">

                            <span class="flaticon-122-heart fav-icon-card"></span>
                            <img class="center" src="../images/cat.png" width="80" height="80">
                            <div class="ui-grid-a">
                                <div class="ui-block-a">
                                    <p class="card-title">
                                        <?php echo $json[$id]['name'] ?? '' ?> </p>
                                    <p>rating stars</p>
                                    <p class="card-price">
                                        <?php echo $json[$id]['price'] ?? '' ?></p>
                                </div>
                                <div class="ui-block-b">
                                    <img src="../../common/assets/images/icons/ar.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui-block-b">
                    <div class="ui-bar ui-bar-a">
                        <div class="ui-bar ui-bar-a ui-card">

                            <span class="flaticon-122-heart fav-icon-card"></span>
                            <img class="center" src="../images/cat.png" width="80" height="80">
                            <div class="ui-grid-a">
                                <div class="ui-block-a">
                                    <p class="card-title">
                                        <?php echo $json[$id]['name'] ?? '' ?> </p>
                                    <p>rating stars</p>
                                    <p class="card-price">
                                        <?php echo $json[$id]['price'] ?? '' ?></p>
                                </div>
                                <div class="ui-block-b">
                                    <img src="../../common/assets/images/icons/ar.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            <div>
            </div>
        </div>


        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    </html>
