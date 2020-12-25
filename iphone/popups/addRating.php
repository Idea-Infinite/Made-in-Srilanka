<!--intro_popup1-->
<center>
    <div data-role="popup" id="popuprating" data-theme="a" class="ui-content">
        <link rel="stylesheet" href="../../common/js/star/SimpleStarRating.css">
        <style>
            body {
                background-color: #999;
                font-family: sans-serif;
                margin: 0;
            }

            main {
                background-color: white;
                width: auto;
                margin: 0 auto;
                padding: 50px;
                text-align: center;
            }

            table {
                display: inline-block;
            }

            td {
                padding: 1em;
            }

            .golden {
                color: #ee0;
                background-color: #444;
            }

            .big-red {
                color: #f11;
                font-size: 50px;
            }
        </style>

        <main>
            <p>
            <table>
                <tr>
                    <td><span id="rating" class="rating" data-default-rating="0"></span></td>
                </tr>
            </table>
            </p>

        </main>

        <div style="display: flex" data-role="popup" id="rate-feedback">
            <h3>You Rated : </h3> <img style="width: 60px" src="../../common/assets/images/checked-green.png">
        </div>
        <script src="../../common/js/star/SimpleStarRating.js"></script>
    </div>
</center>