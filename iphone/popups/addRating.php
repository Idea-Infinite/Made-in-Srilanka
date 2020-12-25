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
                    <td><span class="rating" data-default-rating="3"></span></td>
                </tr>
            </table>
            </p>

        </main>
        <script src="../../common/js/star/SimpleStarRating.js"></script>
        <script>
            var ratings = document.getElementsByClassName('rating');

            for (var i = 0; i < ratings.length; i++) {
                var r = new SimpleStarRating(ratings[i]);

                ratings[i].addEventListener('rate', function(e) {
                    console.log('Rating: ' + e.detail);
                });
            }
        </script>


       <!-- <div class='starrr' id='star1'></div>
        <div>
            <span class='your-choice-was' style='display: none;'>Your rating was<span class='choice'></span></span>
        </div>
        <script src="../../common/js/starrr.js"></script>
        <script>
            $('#star1').starrr({
                change: function (e, value) {
                    if (value) {
                        $('.your-choice-was').show();
                        $('.choice').text(value);
                    } else {
                        $('.your-choice-was').hide();
                    }
                }
            });
            var $s2input = $('#star2_input');
            $('#star2').starrr({
                max: 10,
                rating: $s2input.val(),
                change: function (e, value) {
                    $s2input.val(value).trigger('input');
                }
            });
        </script>-->
    </div>
</center>