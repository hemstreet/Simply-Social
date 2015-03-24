<?php
function printGridPhoto() {
    for($x = 0; $x < 6; $x++) {
        echo '<div class="post grid">';
            include(__DIR__ . '/posts/grid/_post-photo.php');
        echo '</div>';
    }
}
?>

<div class="grid col three">

    <?php printGridPhoto(); ?>
</div>

<div class="grid col three">
    <?php printGridPhoto(); ?>
</div>

<div class="grid col three">
    <?php printGridPhoto(); ?>
</div>