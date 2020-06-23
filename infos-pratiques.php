<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'TODO'; ?>
<head>
    <title>Infos Pratiques</title>
    <?php include("head.php"); ?>
</head>
<body>
<?php include("header.php"); ?>

<main>
    <div class="row">
        <div class="offset-2">
            <h4 class="color-white">Infos Pratiques</h4>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        <button class="btn-with-icon-black btn-icon-ticket background-white">
                            <img src="assets/icons/ticket.svg"
                                 alt="Menu"><span>Billeterie</span>
                        </button>
                    </li>
                    <li>
                        <button class="btn-with-icon background-white">
                            <img src="assets/icons/trajet_black.svg"
                                 alt="Menu"><span>Trajet</span>
                        </button>
                    </li>
                    <li>
                        <button class="btn-with-icon background-white">
                            <img src="assets/icons/trajet_black.svg"
                                 alt="Menu"><span>Trajet</span>
                        </button>
                    </li>
                </ul>
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