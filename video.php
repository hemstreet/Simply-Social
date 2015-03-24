<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Simply Social</title>
    <?php include(__DIR__ . '/views/_head.php'); ?>
</head>
<body class="home grid">
<?php include(__DIR__ . '/views/_navigation.php'); ?>
<div class="hero">
    <div class="highlight rounded">
        <input type="text" value="What's on your mind?"/>
        <a href="#" class="action photo"><span>Add Photo</span></a>
        <a href="#" class="action video"><span>Add Video</span></a>
    </div>
    <div class="container">
        <ul class="list toggle">
            <li><a href="index.php">All Posts</a></li>
            <li><a href="/photo.php">Photos</a></li>
            <li><a href="/video.php" class="current">Videos</a>
            <li></li>
        </ul>
    </div>
</div>
<div class="container content">
    <?php include(__DIR__ . '/views/_grid-video.php'); ?>

</div>
<?php include(__DIR__ . '/views/_footer.php'); ?>
</body>
</html>