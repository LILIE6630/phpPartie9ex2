<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="../assets/librairies/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />
        <title>PHP ex2</title>
    </head>
    <body class="bg-dark text-light">
        <canvas id="myCanvas" height="700" width="1300"></canvas>
        <div class="content">
            <p>  
                Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)</p>
            <?php
            $date = date("d-m-Y");
            ?>
            <p><?= 'Nous sommes le : ' . $date ?></p>
        </div>
        <script src="../assets/js/jquery-3.4.1.min.js"></script>
        <script src="../assets/librairies/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="../assets/js/script.js"></script>
    </body>
</html>
