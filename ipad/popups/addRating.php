<!--intro_popup1-->
<center>
    <div data-role="popup" id="popuprating" data-theme="a" class="ui-content">
        <div class='starrr'
             id='star1'></div>
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
        </script>
    </div>
</center>