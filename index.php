<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Simply Social</title>
    <?php include(__DIR__ . '/views/_head.php'); ?>
</head>
<body class="home list">
    <?php include(__DIR__ . '/views/_navigation.php'); ?>
    <div class="hero">
        <div class="highlight rounded">
            <input type="text" value="What's on your mind?"/>
            <a href="#" class="action photo"><span>Add Photo</span></a>
            <a href="#" class="action video"><span>Add Video</span></a>
        </div>
        <div class="container">
            <ul class="list toggle">
                <li><a href="index.php" class="current">All Posts</a></li>
                <li><a href="/photo.php">Photos</a></li>
                <li><a href="/video.php">Videos</a>
                <li>
                    <a href="#" class="action list active" data-toggle="list"></a>
                    <a href="#" class="action grid" data-toggle="grid"></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container content">
        <?php include(__DIR__ . '/views/_list.php'); ?>
        <?php include(__DIR__ . '/views/_grid.php'); ?>

    </div>
    <?php include(__DIR__ . '/views/_footer.php'); ?>
</body>
</html>