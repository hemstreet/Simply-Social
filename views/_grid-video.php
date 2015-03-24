<?php
function printGridVideo() {
    for($x = 0; $x < 6; $x++) {
        echo '<div class="post grid">';
            include(__DIR__ . '/posts/grid/_post-video.php');
        echo '</div>';
    }
}
?>

<div class="grid col three">

    <?php printGridVideo(); ?>
</div>

<div class="grid col three">
    <?php printGridVideo(); ?>
</div>

<div class="grid col three">
    <?php printGridVideo(); ?>
</div>