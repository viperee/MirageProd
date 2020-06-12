<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'index'; ?>
<head>

    <title>Accueil</title>
    <?php include("head.php"); ?>
</head>
<body>
<?php include("header.php"); ?>

<main id="main">
    <div class="titre">
        <h1>Cosmogonie</h1>
        <h2>Cosmogonie</h2>
    </div>
    <div id="lignes"></div>
    
    
</main>
<script src='node_modules/p5/lib/p5.min.js'></script>

<?php include("footer.php"); ?>

<!--IMPORTS JS-->
<?php include("script.php"); ?>
<!--/IMPORTS JS-->
<script src="assets/js/index.js"></script>
<script src="assets/js/lineDistortion.js"></script>
<script src="assets/js/sidenav.js"></script>
</body>
</html>