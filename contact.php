<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'contact'; ?>
<head>
    <title>Festival</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
</head>
<body class="no-margin background-noir">
<?php include("header.php"); ?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="offset-1">
                <h4 class="color-white">Contact</h4>
            </div>
        </div>
    </div>
    
    
    <div class="no-padding container-fluid ">
        <div class="background-solitude festival-description-wrapper">
            <div id="festival-details" class="background-white">
                <div class="row">
                    <div class="col">
                        <div class="festival-details-text">
                            <h5 class="no-margin-top color-noir">Formulaire</h5>
                            <form>
                                <input id="nom" class="col-5" type="text" placeholder="Nom">
                                <input id="mail" class="col-5" type="text" placeholder="Adresse Email">
                                <input id="sujet" class="col-5" type="text" placeholder="Sujet">
                                <textarea id="message" class="col-5" type="text" placeholder="Message"></textarea>
                                <div class="col-12 text-center"><button id="btn-formulaire" class="btn-with-icon-black"><span>Envoyer</span></button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br/><br/><br/><br/>
        </div>
    </div>
</main>

<?php include("footer.php"); ?>

<!--IMPORTS JS-->
<?php include("script.php"); ?>
<!--/IMPORTS JS-->
</body>
</html>