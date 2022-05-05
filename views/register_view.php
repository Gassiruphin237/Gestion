<!doctype html>
<html>

<head>

    <?php include_once 'views/includes/head.php'?>

    <title>
        <?= ucfirst($page) ?>
    </title>
</head>

<body>
    <?php include_once 'views/includes/header.php'?>

    <div class="container">
        <div class="row">
            <div class="gauche">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit voluptates animi molestiae? Odit, hic quo
                sit delectus quisquam nulla impedit pariatur nihil.
            </div>
            <div class="droite">
                <form action="">
                    <label for="user">Username</label>
                    <input type="text" name="user" id="user"><br><br>
                    <input type="email" name="email" id="email"><br><br>
                    <label for="pass">Username</label>
                    <input type="password" name="pass" id="pass"><br><br>
                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>

    <?php include_once 'views/includes/footer.php'?>
    </div>



</body>

</html>