<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pied de page de toutes les pages</title>
    <style>
        #foot{
            border: 0px solid red;
            background-color: #D8901D;
            display:flex;
            justify-content: space-between;
            align-items: center;
            height: 100px;
        }
        #one_foot{
            display:flex;
            justify-content: center;
            align-items: center;
            width: 50%;
            height: 100px;
        }
        #two_foot{
            display:flex;
            justify-content: space-between;
            align-items: center;
            width: 30%;
            height: 100px;
        }
        span, .afoot{
            color:white;
        }
    </style>
</head>
<body>
<div id="foot">
    <div id="one_foot"><span>©Copyright 2022 Akni Association LDNR</span></div>
    <div id="two_foot">
        <a href="mention.php" class="afoot">Mentions</a>
        <a href="contact.php" class="afoot">Contact</a>
        <a href="connexion.php" class="afoot">Connexion</a>
    </div>
</div>
</body>
</html>