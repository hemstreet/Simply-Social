<?php
function printGridPost() {
    for($x = 0; $x < 3; $x++) {
        echo '<div class="post grid">';
        $post = rand(0,2);
        if( $post == 0) {
            include('posts/_post-grid.php');
        }
        else if($post == 1)
        {
            include('posts/grid/_post-photo.php');
        }
        else {
            include('posts/grid/_post-video.php');
        }
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