<?php
function printPost() {

    for($x = 0; $x < 10; $x++) {
        echo '<div class="post rounded list">';
        include('_post.php');
        echo '</div>';
    }
}
?>

<?php printPost(); ?>