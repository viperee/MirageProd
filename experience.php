<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'experience'; ?>
<head>
    <title>TITRE</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/experience.css">
</head>
<body class="background-noir">
<?php include("header.php"); ?>

<main>
    <div id="fred-laura-container" class="container text-center">
        <h3>- T’es où ?!</h3>
        <h3>- Au Mirage Festival !</h3>
        <p class="text-labeur color-white">Fred et Laura, mercredi soir</p>
    </div>
    <div class="block-experience">
        <div class="video-container">
            <img id="experience-img" src="./assets/media/img/experience-ambiance.svg" alt="experience-ambiance">
        </div>
        <div class="experience-overlay"></div>
        <div class="block-experience-text-wrapper-left">
            <div class="text-video-left">
                <h2 class="no-margin">C’est d’un insolite !</h2>
                <p class="text-labeur color-white w-70">Vivez une expérience unique de réalité virtuelle du côté des lieux
                    emblématiques et culturels de la ville : le Musée des Beaux-Arts de Bordeaux, le CAPC, la Fabrique
                    Pola, Méca, la Base sous-marine, …</p>
                <button class="btn-with-icon-black"><span>En savoir plus</span></button>
            </div>
        </div>
    </div>
    <div class="block-experience">
        <div class="video-container">
            <img id="experience-img" src="./assets/media/img/experience-ambiance.svg" alt="experience-ambiance">
        </div>
        <div class="experience-overlay"></div>
        <div class="block-experience-text-wrapper">
            <div class="text-video text-right">
                <h2 class="no-margin">Des ambiances qui claquent !</h2>
                <p class="text-labeur color-white">Jeux de lumière, matériaux détournés, décors animés : un terrain,
                    mille atmosphères.</p>
            </div>
        </div>
    </div>
    <div class="container text-center experience-text-only">
        <h2>Mais le Mirage, c’est bien plus que ça !</h2>
    </div>
    <div class="block-experience">
        <div class="video-container">
            <video id="videoBG" autoplay muted loop>
                <source src="./assets/media/video/experience.mp4" type="video/mp4">
            </video>
        </div>
        <div class="block-experience-text-wrapper">
            <div class="text-video text-right">
                <h2 class="no-margin">T’es plutôt entre amis ou en famille?</h2>
                <p class="text-labeur color-white">Avec tes potes ou tes enfants, le Mirage Festival est fait pour
                    tous!</p>
            </div>
        </div>
    </div>
    <div class="container text-center experience-text-only">
        <h2>Bref, le Mirage, c’est …</h2>
    </div>
    <div class="block-experience">
        <div class="video-container">
            <video id="videoBG" autoplay muted loop>
                <source src="./assets/media/video/experience-drone.mp4" type="video/mp4">
            </video>
        </div>
        <div class="block-experience-text-wrapper-center">
            <div class="text-video-center">
                <h2>Partager des vibrations collectives</h2>
            </div>
        </div>
    </div>
    <div class="block-experience">
        <div class="video-container">
            <video id="videoBG" autoplay muted loop>
                <source src="./assets/media/video/experience-enfant.mp4" type="video/mp4">
            </video>
        </div>
        <div class="experience-overlay"></div>
        <div class="block-experience-text-wrapper-top-left">
            <div class="text-video">
                <h2>Des petits et grands plaisirs</h2>
            </div>
        </div>
    </div>
    <div class="block-experience">
        <div class="video-container">
            <video id="videoBG" autoplay muted loop>
                <source src="./assets/media/video/experience-intense.mp4" type="video/mp4">
            </video>
        </div>
        <div class="experience-overlay"></div>
        <div class="block-experience-text-wrapper-center">
            <div class="text-video-center">
                <h2>Une expérience totale, intense !</h2>
            </div>
        </div>
    </div>
    <div class="container text-center experience-text-only">
        <h2>Alors …</h2>
    </div>
    <div class="block-experience">
        <div class="video-container">
            <video id="videoBG" autoplay muted loop>
                <source src="./assets/media/video/experience-viens.mp4" type="video/mp4">
            </video>
        </div>
        <div class="experience-overlay"></div>
        <div class="block-experience-text-wrapper-center">
            <div class="text-video-center">
                <h2 class="no-margin">Tu viens ?</h2>
            </div>
        </div>
    </div>
</main>

<?php include("footer.php"); ?>

<!--IMPORTS JS-->
<?php include("script.php"); ?>
<!--/IMPORTS JS-->

</body>
</html>