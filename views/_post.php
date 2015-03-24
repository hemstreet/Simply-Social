<?php
$avatars = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'];
$data = [
    'dolor, tempus non, lacinia at, iaculis quis, pede. Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. <a href="bit.ly/1lE4uJc">bit.ly/1lE4uJc</a> Good stuff from <span class="tag">@designmodo!</span>',
    'lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue',
    'ridiculus mus. vitae aliquam eros turpis non enim.',
    'ipsum leo elementum sem, vitae aliquam eros turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie <a href="#">sodales</a>. <span class="tag">@Mauris</span>',
    'et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam',
    'justo. Proin non vitae aliquam eros turpis non enim.',
    'feugiat tellus lorem eu metus. In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque <span class="tag">@neque</span>',
    'tortor at risus. Nunc ac sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing <a href=#">fringilla</a>, porttitor',
    'venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy ultricies',
    'risus. In mi pede, nonummy ut, molestie in, tempus eu, ligula. Aenean euismod mauris eu elit. <span class="tag">@Null</span>'
];

$names = [
    "Bernard Parrish",
    "Noelle Mcfadden",
    "Mary Chan",
    "Hall Cervantes",
    "Amos Shannon",
    "Gray Daniels",
    "Sawyer Velasquez",
    "Cecilia George",
    "Victoria Franks",
    "Aristotle Bartlett",
];

$i = rand(0, 9);

?>

<div class="col one third">
    <div class="avatar rounded <?php echo $avatars[$i]; ?>"></div>
</div>
<div class="col two third">
    <div class="content">
        <div class="col two">
            <span class="title"><?php echo $names[$i]; ?></span>
        </div>
        <div class="col two actions">
            <?php include('_postDetails.php'); ?>
        </div>
        <p>
            <?php echo $data[$i]; ?>
        </p>
        <a href="#" class="expand">
            Expand
            <span class="profile disclosure"></span>
        </a>

    </div>
</div>
<div class="clearfix"></div>