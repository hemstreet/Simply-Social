<?php
function printGridPost() {
    $post = '<div class="post rounded grid">Grid post</div>';
    for($x = 0; $x < 3; $x++) {
        echo $post;
    }
}
?>

<div class="grid col">

    <?php printGridPost(); ?>
</div>

<div class="grid col">
    <?php printGridPost(); ?>
</div>

<div class="grid col">
    <?php printGridPost(); ?>
</div>