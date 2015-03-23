<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Simply Social</title>
    <?php include('views/_head.php'); ?>
</head>
<body class="home list">
    <?php include('views/_navigation.php'); ?>
    <div class="hero">
        <div class="highlight rounded">
            <input type="text" value="What's on your mind?"/>
            <a href="#" class="action photo">Add Photo</a>
            <a href="#" class="action video">Add Video</a>
        </div>
        <div class="container">
            <ul class="list toggle">
                <li><a href="#">All Posts</a></li>
                <li><a href="#">Photos</a></li>
                <li><a href="#">Videos</a>
                <li>
                    <a href="#" class="action list active" data-toggle="list"></a>
                    <a href="#" class="action grid" data-toggle="grid"></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container content">
        <?php include('views/_list.php'); ?>
        <?php include('views/_grid.php'); ?>

    </div>
    <?php include('views/_footer.php'); ?>
</body>
</html>