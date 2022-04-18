<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
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
                <!-- TODO: pass parameter via URL -->
                <li><a href="?graph=1"></a>Energies</li>
                <li><a href="?graph=2"></a>Prix</li>
                <li><a href="?graph=3"></a>Mois</li>
                <li><a href="?graph=4"></a>Bénéfice</li>
                <li><a href="?graph=5"></a>Tableau</li>
            </ul>
        </section>
        <div class="page-content">
            <?php include('../src/graph.php'); ?>
        </div>
    </div>
</body>
</html>
