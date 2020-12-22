<?php
$file = basename($_SERVER["SCRIPT_FILENAME"], '.php');
?>
<!-- Navbar -->
<div data-role="footer" data-position="fixed" class="bottom_nav_bar">
    <nav data-role="navbar">
        <ul>
            <li><a href="../pages/home.php"
                   class="ui-btn menu <?php if ($file == 'home') echo ' ui-btn-active' ?>"><span
                            class="flaticon-053-home"></span></a>
            </li>
            <li><a href="../pages/wishList.php"
                   class="ui-btn menu <?php if ($file == 'wishList') echo ' ui-btn-active' ?>"><span
                            class="flaticon-122-heart"></span></a></li>
            <li><a href="../pages/cart.php"
                   class="ui-btn menu <?php if ($file == 'cart') echo ' ui-btn-active' ?>"><span
                            class="flaticon-008-shopping-cart"></span></a></li>
            <li><a href="../pages/slashIt.php"
                   class="ui-btn menu <?php if ($file == 'slashIt') echo ' ui-btn-active' ?>"><span
                            class="flaticon-119-tag"></span></a></li>
        </ul>
    </nav>
</div>