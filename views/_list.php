<?php
function printPost() {
    $post = '<div class="post rounded list">List post</div>';
    for($x = 0; $x < 10; $x++) {
        echo $post;
    }
}
?>

<?php printPost(); ?>