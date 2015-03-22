<?php
function printPost() {
    $post = '<div class="post rounded grid">Grid post</div>';
    for($x = 0; $x < 3; $x++) {
        echo $post;
    }
}
?>

<div class="grid col">

    <?php printPost(); ?>
</div>

<div class="grid col">
    <?php printPost(); ?>
</div>

<div class="grid col">
    <?php printPost(); ?>
</div>