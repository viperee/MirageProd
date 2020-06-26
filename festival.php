<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'festival'; ?>
<head>
    <title>Festival</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/festival.css">
</head>
<body class="no-margin background-noir">
<?php include("header.php"); ?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="offset-2">
                <h4 class="color-white">Le Festival</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-2">
                <p class="text-labeur color-white text-left">Le Mirage Festival propose à travers une programmation
                    ambitieuse et
                    pluridisciplinaire, un panorama des cultures numériques. Pour rendre
                    compte de la richesse de cette création contemporaine nourrie par les
                    technologies, le festival propose un format unique s’articulant autour
                    d’expositions et de soirées de performances et concerts.</p>
            </div>
        </div>
    </div>
    <div class="background-white defiliant-banner-wrapper festival-banner">
        <span class="defiliant-banner-text"
              data-title="Le festival">
            <span data-title="Le festival">
                <span data-title="Le festival">
                    <span data-title="Le festival">
                <span data-title="Le festival">
                    <span data-title="Le festival"> Le festival </span>
                </span>
            </span>
                </span>
            </span>
        </span>
    </div>
    <div class="container-fluid ">
        <div class="row background-solitude festival-description-wrapper">
            <div id="festival-details" class="background-white">
                <div class="row">
                    <div class="col festival-details-text">
                        <h3 class="color-noir">Cosmogonie</h3>
                        <h3 class="color-noir">Cosmogonie</h3>
                        <h3 class="color-noir">Cosmogonie</h3>
                        <h3 class="color-noir">Cosmogonie</h3>
                        <h3 class="color-noir">Cosmogonie</h3>
                        <h3 class="color-noir">Cosmogonie</h3>
                    </div>
                    <div class="col festival-details-text">
                        <p class="text-labeur text-left">
                            Orbitant autour de la thématique spatiale, cette première édition du Mirage Festival se
                            penche sur la façon dont les artistes abordent différentes approches de notre relation au
                            cosmos et sonde la manière dont la conquête spatiale, depuis ses débuts, a influencé et
                            transcendé les idées et les créations.<br><br>
                            L’espace, le cosmos, la galaxie, les technologies liées à son exploration, son
                            esthétique, ses horizons philosophiques et les
                            imaginaires qui les habitent sont autant de sujets abordés par les artistes de façon
                            poétique, fictionnelle, historique ou critique.
                        </p>
                    </div>
                </div>
            </div>
            <div id="ambiance-details">
                <div class="row">
                    <p class="ambiance-title">Ambiance</p>
                </div>
                <div class="row">
                    <div id="ambiance-dj" class="col">
                        <img id="img-ambiance-main" src="assets/media/img/ambiance1-full.svg">
                    </div>
                    <div class="col pr-0">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance1.svg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance2.svg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance3.svg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance4.svg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance5.svg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance6.svg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance7.svg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance8.svg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance9.svg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance10.svg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance11.svg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance12.svg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance13.svg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance14.svg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance15.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include("footer.php"); ?>

<!--IMPORTS JS-->
<?php include("script.php"); ?>
<script src="assets/js/festival.js"></script>
<!--/IMPORTS JS-->
</body>
</html>