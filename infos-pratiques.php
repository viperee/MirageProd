<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'TODO'; ?>
<head>
    <title>Infos Pratiques</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/infos-pratiques.css">
</head>
<body class="no-margin">
<?php include("header.php"); ?>


<main>
    <div class="row">
        <div class="offset-2">
            <h4 class="color-white">Infos Pratiques</h4>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div id="tabs" class="col offset-3">
                <ul>
                    <li class="pr-5">
                        <a href="#tabs-1"><button class="btn-with-icon-black btn-icon-ticket background-white">
                            <img src="assets/icons/ticket.svg"
                                 alt="Menu"><span>Billeterie</span>
                            </button></a>
                    </li>
                    <li class="pr-5">
                        <a href="#tabs-2"><button class="btn-with-icon background-white">
                            <img src="assets/icons/trajet-black.svg"
                                 alt="Menu"><span>Trajet</span>
                            </button></a>
                    </li>
                    <li class="pr-5">
                        <a href="#tabs-3"><button class="btn-with-icon background-white">
                            <img src="assets/icons/sur-place-black.svg"
                                 alt="Menu"><span>Sur place</span>
                            </button></a>
                    </li>
                    <li class="pr-5">
                        <a href="#tabs-4"><button class="btn-with-icon background-white">
                                <img src="assets/icons/hebergement-black.svg"
                                     alt="Menu"><span>Hébergement</span>
                            </button></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="tabs-1" class="container-fluid"></div>
    <div id="tabs-2" class="container-fluid"></div>
    <div id="tabs-3" class="container-fluid"></div>
    <div id="tabs-4" class="container-fluid"></div>
</main>

<?php include("footer.php"); ?>

<!--IMPORTS JS-->
<?php include("script.php"); ?>
<!--/IMPORTS JS-->

</body>
</html>