<?php include '../parts/head.php' ?>
<!--
Testing Card

Payment succeeds
4242 4242 4242 4242

Payment requires authentication
4000 0025 0000 3155

Payment is declined
4000 0000 0000 9995
-->

<script src="https://js.stripe.com/v3/"></script>
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
            <!--card data will load dynamically-->
            <div id="items">
            </div>

            <center>
                <h1>Total: <span id="totalPrice" class="price-color">LKR.0.00</span></h1></center>
            <center>
                <button id="checkout-button" disabled>Order</button>
            </center>
        </div>
    </div>

    <?php include '../parts/bottomNavbar.php' ?>
</div><?php include '../parts/footer.php' ?>
</body>
<script>
    let total = 0;
    let product_ids = [];

    const update = async () => {
        cart = JSON.parse($.cookie('cart'));
        for (let i = 0; i < cart.length; i++) {
            let id = cart[i]['id'];
            let qty = cart[i]['qty'];
            await addCard(id, qty);
            product_ids.push({"id": id, "qty": qty});
        }

        total = Math.round(total * 100) / 100;
        $('#totalPrice').html('LKR ' + total);
    }

    const addCard = async (id, qty) =>
        $.getJSON("<?php echo $GLOBALS['domain'] ?>/common/functions/getProduct.php?id=" + id, function (data, status) {
            let price = parseFloat(data["price"]) * qty;
            total += price;
            $('#items').append(
                '<div class="ui-grid-c back-box" style="padding: 5px; margin-bottom: 10px">\n' +
                '                <div class="ui-block-a " style="width: 15%;">\n' +
                '                    <img class="center" src="' + data["image"] + '"\n' +
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
    if ($.cookie('cart') != null) {
        update();
        $('#checkout-button').attr('disabled', false);
    }

    var headers = {
        "Content-Type": "application/json",
        "Access-Control-Origin": "*"
    }

    // Create an instance of the Stripe object with API key
    var stripe = Stripe("pk_test_51Hs4vICZjSyoKagriy62PgWm6qQLhrJtIYyy3Lq4GWCGNodf82TR4SFuLY4J4mcjNX45Kf7Yfjg80dv665AMmzK400rmoSi33N");
    var checkoutButton = document.getElementById("checkout-button");

    checkoutButton.addEventListener("click", function () {
        fetch("../../common/functions/checkout.php", {
            method: "POST",
            body: JSON.stringify(product_ids)
        })
            .then(function (response) {
                return response.json();
            })
            .then(function (session) {
                return stripe.redirectToCheckout({sessionId: session.id});
            })
            .then(function (result) {
                // If redirectToCheckout fails due to a browser or network
                // error, you should display the localized error message to your
                // customer using error.message.
                if (result.error) {
                    alert(result.error.message);
                }
            })
            .catch(function (error) {
                console.error("Error:", error);
            });
    });
</script>
</html>
