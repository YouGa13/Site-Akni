<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>En-tete de toutes les pages</title>
    <style>
        #header{
            border: 0px solid red;
            background-color: white;
            display:flex;
            justify-content: space-between;
            align-items: center;
            height: 100px;
        }
        #logo_akni{
            height: 100px;
        }
        .logo_social{
            height: 40px;
        }
        .class {
            width:5%;
        }
        #lien{
            display:flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            height: 100px;
        }
        a:link{ 
            text-decoration:none; 
        }
        a:hover{
            text-decoration:underline;
            color:#D8901D;
        }
    </style>
</head>
<body>
    <div id="header">
        <div class="img">
        <a href="akni.php"><img src="./tous_les_images/logo_akni.png" alt="le logo de l'association" id="logo_akni"></a>
        </div>
        <div id="lien">
            <a href="akni.php">Akni</a>
            <a href="acceuil.php">Accueil</a>
            <a href="chiens_assistances.php">Chiens d'assistance</a>
            <a href="beneficiaire.php">Bénéficiaire</a>
            <!--<a href="nous_soutenir.php">Nous Soutenir</a>
            <a href="evenements.php">Événements</a>-->
            <a href="blog.php">Blog</a>
        </div>
        <div class="img">
        <a href="https://fr-fr.facebook.com/"><img src="./tous_les_images/logo_face.png" alt="logo de facebook" class="logo_social"></a>
        <a href="https://www.instagram.com/accounts/login/"><img src="./tous_les_images/logo_insta.jpeg" alt="logo du réseau social instagram" class="logo_social"></a>
        </div>
    </div>
</body>
</html>