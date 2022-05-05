<!doctype html>
<html>

<head>
    <?php include_once 'views/includes/head.php'?>

    <title>
        <?= ucfirst($title) ?>
    </title>
</head>
<?php include_once 'views/includes/header.php'?>

<body>

    <?= $content ?>
</body>

<?php require('views/includes/layout.php'); ?>
</html>