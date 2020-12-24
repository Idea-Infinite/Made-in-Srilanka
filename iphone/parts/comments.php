<div>

    <form>
        <label>Comments</label>
        <input id="input-comment" type="text" name="comment" placeholder="Comments">
        <button type="save" style="opacity: 1">Save</button>


    </form>
    <table>
        <tr>
            <td>
                <img src="../../common/assets/images/icons/user.png" height="100px" width="100px">
            </td>
            <td>
                <div class="product-comment"></div>
                <h3>Snoopy</h3>
                <p>I would like to say: </p>
                <script>$('#save').click(function () {
                        $("p").append($
                        "input-comment"
                    )
                        ;
                    });</script>
                <div>
                    <a style="margin: 10px">reply</a><a>like</a>
                </div>
                <div/>
            </td>
            </td>
        </tr>
    </table>
</div>
