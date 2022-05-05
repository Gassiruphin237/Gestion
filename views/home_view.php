<!doctype html>
<html>

<head>

    <?php include_once 'views/includes/head.php'?>

    <title>
        <?= ucfirst($page) ?>
    </title>
</head>

<body id="body">
    <div id="loader" style="background: white; width: 100%; height: 100vh; position: absolute;">
        <img src="assets/images/loader.gif" id="img" style="margin-top:-420px;"><br>
        <h3 style="margin-top:-220px; font-weight:bold; color:#3caa78">Please waitt !!!</h3>
    </div>
    <div id="corps">
        <?php include_once 'views/includes/header.php'?>
        <!-- CONTENU -->
        <div class="banniere"> 
            <h4 style="color: white;"><strong>Bienvenue sur votre site de présentation des hôpitaux et pharmacies !!!!</strong></h4><br><br>
            <button type="submit" class="button"><a href="login">Get started</a> </button>
         </div>
         
        <?php include_once 'views/includes/footer.php'?>
    </div>



</body>

</html>