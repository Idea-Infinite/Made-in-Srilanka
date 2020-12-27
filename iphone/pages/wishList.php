<?php include '../parts/head.php' ?>
<!-- This is shop page-->
<div data-role="page" id="shop">
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">
        <div class="header-title" style="margin-bottom: 10px;">
            <h3>WishList</h3>
            <img src="../../common/assets/images/icons/wishList.png" height="35px" width="35px">
        </div>
        <!-- POI Card-->
        <div id="content" class="ui-grid-a search" data-filter="true"
             data-filter-placeholder="Search for your wish list"
             style="margin-top: 10px;">

            <div id="items"></div>
            <a data-rel="popup" data-position-to="window"
               data-transition="pop" href="#wishListEmail">
                <button>Email My List</button>
            </a></div>
    </div>
    <?php include '../popups/wishListEmail.php' ?>
    <?php include '../parts/bottomNavbar.php' ?>
</div><?php include '../parts/footer.php' ?>
</body>
<script>
    const update = async () => {
        if ($.cookie('wishList') != null) {
            data = JSON.parse($.cookie('wishList'));
            for (let j = 0; j < data.length; j++) {
                await addCard(data[j]);
            }
        }
    }

    const addCard = async (id) =>
        $.getJSON("../../common/functions/getProduct.php?id=" + id, function (data, status) {

            $('#items').append(
                '                <div class="ui-grid-c back-box" style="padding: 5px; margin-bottom: 10px">\n' +
                '                    <div class="ui-block-a " style="width: 15%; height: 50px">\n' +
                '                        <img class="center" src="' + data["image"] + '"\n' +
                '                             style="width: 50px; top: 50%; margin-top: 30px; transform: translateY(-50%);">\n' +
                '\n' +
                '                    </div>\n' +
                '                    <div class="ui-block-b" style="width: 40%;">\n' +
                '                        <p>' + data["name"] + '</p>\n' +
                '                    </div>\n' +
                '                    <div class="ui-block-c" style="width: 17%; font-size: 12px; ">\n' +
                '                        <a data-ajax="false" href="product.php?id=' + id + '" \n' +
                '                           class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a"\n' +
                '                           data-transition="pop">View</a>\n' +
                '                    </div>\n' +
                '                    <div class="ui-block-d" style="width: 28%; height: 50px">\n' +
                '                        <p style=" font-size: 14px; color: #f5a278; font-weight: 800;">LKR ' + data["price"] + '</p>\n' +
                '                    </div>\n' +
                '                </div>\n');
        });

    setTimeout(function () {
        update();
    }, 200);
</script>
</html>
