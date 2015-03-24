<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Simply Social</title>
    <?php include(__DIR__ . '/views/_head.php'); ?>
    <link rel="stylesheet" href="/public/css/flipswitch.css">
</head>
<body class="settings">
<?php include(__DIR__ . '/views/_navigation.php'); ?>
    <div class="container content third">
        <form method="post" action="submit.php">
        <h2>Settings</h2>
        <section>
            <h3>Account</h3>

            <div class="col one third">
                <div class="user"><span class="image"></span></div>
                <a href="#" class="button rounded">Change</a>
            </div>
            <div class="col two third">
                <input type="text" class="rounded icon name"/>
                <input type="email" class="rounded icon email"/>
                <input type="password" class="rounded icon password"/>
                <input type="password" class="rounded icon password"/>
            </div>
        </section>


        <section>
            <h3>Notifications</h3>
            <ul class="list">

                <?php $notificationOptions = [
                    'marked-favorite' => 'email me when my posts are marked as favorites',
                    'get-mentioned'   => 'email me when I’m mentioned',
                    'get-reply'       => 'email me when I get a reply',
                    'follows-me'      => 'email me when someone follows me',
                ];

                forEach ($notificationOptions as $k => $v) {
                    ?>

                    <li>

                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="<?php echo $k; ?>" checked>
                            <label class="onoffswitch-label" for="<?php echo $k; ?>">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                        <label class="field"><?php echo $v; ?></label>
                    </li>

                <?php
                }
                ?>
            </ul>
        </section>

        <section>
            <h3>Privacy</h3>
            <ul>
                <?php $privacyOptions = [
                    'allow-tag-public'      => 'allow anyone to tag me',
                    'allow-tag-my-follower' => 'only allow people I follow to tag me',
                    'deny-tag'              => 'don’t allow anyone to tag me',
                    'add-location'          => 'add a location to my posts',
                    'public-email'          => 'let others find me by my email address',
                    'tailor-ads'            => 'tailor ads based on my information'
                ];

                forEach ($privacyOptions as $k => $v) {
                    ?>

                    <li>

                        <input type="checkbox" class="radio" id="<?php echo $k; ?>" name="<?php echo $v; ?>" />
                        <label for="<?php echo $k; ?>" class="radio"><span></span><?php echo $v; ?></label>

                    </li>

                <?php
                }
                ?>

            </ul>
        </section>
        <input type="submit" class="button rounded submit"/>
        </form>
    </div>
<?php include(__DIR__ . '/views/_footer.php'); ?>
</body>
</html>