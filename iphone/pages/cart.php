<?php include '../parts/head.php' ?>
<!-- This is shop page-->
<div data-role="page" id="cart">
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">
        <div class="header-title" style="margin-bottom: 10px;">
            <h3>Cart</h3>
            <img src="../../common/assets/images/icons/checkout.png" height="35px" width="35px">
        </div>
        <!-- POI Card-->
        <div>
            <!--card 1-->
            <div id="items">
            </div>

            <center><h1>Total: <span id="totalPrice" class="price-color">LKR.0.00</span></h1></center>
            <center>
                <button>Checkout</button>
            </center>

        </div>
    </div>

    <?php include '../parts/bottomNavbar.php' ?>
</div><?php include '../parts/footer.php' ?>
</body>
<script>
    let total = 0;

    const update = async () => {
        cart = JSON.parse($.cookie('cart'));
        for (let i = 0; i < cart.length; i++) {
            let id = cart[i]['id'];
            let qty = cart[i]['qty'];
            await addCard(id, qty);
        }

        $('#totalPrice').html('LKR ' + total);
    }

    const addCard = async (id, qty) =>
        $.getJSON("/mobile/common/functions/getProduct.php?id=" + id, function (data, status) {
            let price = parseFloat(data["price"]);
            total += price;

            $('#items').append(
                '<div class="ui-grid-c back-box" style="padding: 5px; margin-bottom: 10px">\n' +
                '                <div class="ui-block-a " style="width: 15%;">\n' +
                '                    <img class="center" src="../images/cat.png"\n' +
                '                         style="width: 35px; top: 50%; position: absolute; transform: translateY(-50%);">\n' +
                '                </div>\n' +
                '                <div class="ui-block-b" style="width: 50%;">\n' +
                '                    <p>' + data["name"] + '</p>\n' +
                '                </div>\n' +
                '                <div class="ui-block-c" style="width: 10%;">\n' +
                '                    <p>x' + qty + '</p>\n' +
                '                </div>\n' +
                '                <div class="ui-block-d" style="width: 25%; font-size: 20px; ">\n' +
                '                    <p> LKR ' + price + '</p>\n' +
                '                </div>\n' +
                '            </div>');

        });

    update();

</script>
</html>
