<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/effect.css">
    <link rel="stylesheet" type="text/css" href="../css/table.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autobonplan - ARRIVAGE</title>
</head>
<body>
    <div class="content">
        <section class="main-header">
            <div class="title"><h1>ARRIVAGE</h1></div>
            <div class="user">
                <img id="user_photo"src="https://img.icons8.com/ios/452/user--v1.png" alt="">
                <div class="name"><span><span id="firstname"></span> <span id="lastname"></span></span> <a id="logout" href="logout.php">Déconnexion</a></div>
            </div>
        </section>
        <section class="nav">
            <div class="container-logo">
                <img src="https://communication.autobonplan.com/abp-home/img/Logo_Autobonplan.png" alt="">
            </div>
            <ul>
                <a href="?graph=1">
                    <li>
                        <div class="deconstructed">Energies
                            <div>Energies</div>
                            <div>Energies</div>
                            <div>Energies</div>
                            <div>Energies</div>
                        </div>
                    </li>
                </a>
                <a href="?graph=2">
                    <li>
                        <div class="deconstructed">Prix
                            <div>Prix</div>
                            <div>Prix</div>
                            <div>Prix</div>
                            <div>Prix</div>
                        </div>
                    </li>
                </a>
                <a href="?graph=3">
                    <li>
                        <div class="deconstructed">Mois
                            <div>Mois</div>
                            <div>Mois</div>
                            <div>Mois</div>
                            <div>Mois</div>
                        </div>
                    </li>
                </a>
                <a href="?graph=4">
                    <li>
                        <div class="deconstructed">Bénéfice
                            <div>Bénéfice</div>
                            <div>Bénéfice</div>
                            <div>Bénéfice</div>
                            <div>Bénéfice</div>
                        </div>
                    </li>
                </a>
                <a href="?graph=5">
                    <li>
                        <div class="deconstructed">Tableau
                            <div>Tableau</div>
                            <div>Tableau</div>
                            <div>Tableau</div>
                            <div>Tableau</div>
                        </div>
                    </li>
                </a>
            </ul>
        </section>
        <div class="page-content">
            <?php include('../src/graph.php'); ?>
        </div>
    </div>
</body>
</html>
