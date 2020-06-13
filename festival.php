<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'festival'; ?>
<head>
    <title>Festival</title>
    <?php include("head.php"); ?>
</head>
<body class="background-noir">
<?php include("header.php"); ?>
<link rel="stylesheet" type="text/css" href="assets/css/festival.css">

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="offset-2">
                <h4 class="color-white">Le Festival</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-2">
                <p class="text-labeur color-white">Le Mirage Festival propose à travers une programmation ambitieuse et
                    pluridisciplinaire, un panorama des cultures numériques. Pour rendre
                    compte de la richesse de cette création contemporaine nourrie par les
                    technologies, le festival propose un format unique s’articulant autour
                    d’expositions et de soirées de performances et concerts.</p>
            </div>
        </div>
        <div class="background-white defiliant-banner-wrapper festival-banner">
            <p>Le festival</p>
        </div>
    </div>
    <div id="festival-details" class="container background-solitude">
        <div class="row">
            <div class="col-6">
                <h2 class="color-noir">Cosmogonie</h2>
            </div>
            <div class="col-6"></div>
        </div>
    </div>
</main>

<?php include("footer.php"); ?>

<!--IMPORTS JS-->
<?php include("script.php"); ?>
<!--/IMPORTS JS-->

</body>
</html>