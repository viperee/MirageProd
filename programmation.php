<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'programmation'; ?>
<head>
    <title>Programmation</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/programmation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/timeline.min.css">
</head>
<body>
<?php include("header.php"); ?>

<main>
    <div class="row">
        <div class="offset-2">
            <h4 class="color-white">Programmation</h4>
        </div>
    </div>

    <div id="tabs">
        <ul class="background-noir">
            <li><a href="#tabs-1"><span>Mercredi</span>
                    <p>08 Juillet</p></a></li>
            <li><a href="#tabs-2"><span>Jeudi</span>
                    <p>09 Juillet</p></a></li>
            <li><a href="#tabs-3"><span>Vendredi</span>
                    <p>10 Juillet</p></a></li>
            <li><a href="#tabs-4"><span>Samedi</span>
                    <p>11 Juillet</p></a></li>
            <li><a href="#tabs-5"><span>Dimanche</span>
                    <p>12 Juillet</p></a></li>
        </ul>
        <div class="row mt-4 mr-0 ml-0 background-solitude">
            <div class="offset-1">
                <button class="btn-with-icon-black-no-hover"><img src="assets/icons/arrow.svg"
                                                                  alt="Télécharger l'application"><span>Telecharger le programme</span>
                </button>
            </div>
            <div class="offset-6 margin-vertical-center">
                <span class="switch-text">Spécial enfants</span>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div id="tabs-1" class="container-fluid">
            <div class="timeline">
                <div class="timeline__wrap">
                    <div class="timeline__items">
                        <div class="timeline__item">
                            <div class="timeline__content">
                                <div id="accordion">
                                    <div class="group">
                                        <span>Section 1</span>
                                        <div>
                                            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo
                                                ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque
                                                vulputate.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content">
                                Content / markup here
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content">
                                Content / markup here
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content">
                                Content / markup here
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content">
                                Content / markup here
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tabs-2" class="container-fluid">
        </div>
        <div id="tabs-3" class="container-fluid">
        </div>
        <div id="tabs-4" class="container-fluid">
        </div>
        <div id="tabs-5" class="container-fluid">
        </div>
    </div>
</main>

<?php include("footer.php"); ?>

<!--IMPORTS JS-->
<?php include("script.php"); ?>
<script src="assets/js/programmation.js"></script>
<script src="assets/js/timeline.min.js"></script>
<!--/IMPORTS JS-->

</body>
</html>