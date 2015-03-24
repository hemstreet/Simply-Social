<?php
function printPost() {

    for($x = 0; $x < 10; $x++) {
        echo '<div class="post rounded list">';
        $post = rand(0,2);
        if( $post == 0) {
            include('posts/_post-list.php');
        }
        else if($post == 1)
        {
            include('posts/list/_post-photo.php');
        }
        else {
            include('posts/list/_post-video.php');
        }

        echo '</div>';
    }
}
?>

<?php printPost(); ?>