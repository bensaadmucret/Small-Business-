<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="<?php echo absolutePath('/assets/css/main.css'); ?>">
    <title>Non !</title>
</head>
<body>
<div class="main">
    <div class="container">
     <?php echo  $content; ?>
    </div>
   <div class="sidenav">
    <a href="<?php echo absolutePath('/'); ?>">Home</a>   
    <a href="<?php echo absolutePath('/about'); ?>">About</a>
    <a href="<?php echo absolutePath('/blog'); ?>">Blog</a>
    <a href="<?php echo absolutePath('/contact'); ?>">Contact</a>
    
   
    </div>
</div>

</body>
</html>
