<div class="ui-grid-a">
    <label>Comments</label>
    <input type="text" data-clear-btn="true" name="comment" id="inputComment" value="">
    <button id="postBtn" style="opacity: 1" onclick="getInputValue(this);">Post</button>
    <ul id="ul" style="list-style: none; margin-left: -40px;">
        <li>
            <table>
                <tr>
                    <td>
                        <img src="../../common/assets/images/icons/user.png" height="100px" width="100px">
                    </td>
                    <td>
                        <div class="product-comment"></div>
                        <h3>Goofy</h3>
                        <p>What are the colours available?</p>
                        <div>
                            <a style="margin: 10px">reply</a><a>like</a>
                        </div>
                    </td>
                </tr>
            </table>
        </li>
    </ul>
</div>

<script>
    function getInputValue(e) {
        let comment = $('#inputComment').val();
        $("#ul").append('' +
            ' <li>' +
            '<table>' +
            '<tr>' +
            '<td>' +
            '<img src="../../common/assets/images/icons/user.png" height="100px" width="100px">' +
            '</td>' +
            '<td>' +
            '<div class="product-comment"></div>' +
            '<h3>Snoopy</h3>' +
            '<p id="snoopyComment">' + comment + '</p>' +
            '<div>' +
            '<a style="margin: 10px">reply</a><a>like</a>' +
            '</div>' +
            '<div/>' +
            '</td>' +
            '</td>' +
            '</tr>' +
            '</table>' +
            '</li>');

    }

</script>