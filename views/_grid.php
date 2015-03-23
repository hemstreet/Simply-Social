<?php
function printGridPost() {
    for($x = 0; $x < 3; $x++) {
        echo '<div class="post grid">';
        include('_post.php');
        echo '</div>';
    }
}
?>

<div class="grid col three">

    <?php printGridPost(); ?>
</div>

<div class="grid col three">
    <?php printGridPost(); ?>
</div>

<div class="grid col three">
    <?php printGridPost(); ?>
</div>