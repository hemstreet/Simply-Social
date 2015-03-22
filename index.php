<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Simply Social</title>
    <?php include('views/_head.php'); ?>
</head>
<body class="list">
    <?php include('views/_header.php'); ?>
    <div class="hero">
        <div class="highlight rounded">
            <input type="text" value="What's on your mind?"/>
            <a href="#" class="photo">Add Photo</a>
            <a href="#" class="video">Add Video</a>
        </div>
        <ul class="container list toggle">
            <li><a href="#">All Posts</a></li>
            <li><a href="#">Photos</a></li>
            <li><a href="#">Videos</a>
            <li><a href="#" class="list" data-toggle="list">List View</a></li>
            <li><a href="#" class="grid" data-toggle="grid">Grid View</a></li>
        </ul>
    </div>
    <div class="container content">
        <?php include('views/_list.php'); ?>
        <?php include('views/_grid.php'); ?>

    </div>
    <?php include('views/_footer.php'); ?>
</body>
</html>