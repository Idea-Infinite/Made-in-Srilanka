<div class="ui-block-<?php echo $column ?>  card ui-corner-all custom-corners">
    <a href="product.php?id=<?php echo $key ?>">
        <div class="ui-bar ui-bar-a ui-card">
            <span class="flaticon-122-heart fav-icon-card"></span>
            <img class="center" src="<?php echo $image ?>" width="80" height="80"></br>
            <p class="card-title"><?php echo $name ?> </p> </br> <span
                    class="card-price">LKR <?php echo $price ?? '' ?></span>
        </div>
    </a>
</div>