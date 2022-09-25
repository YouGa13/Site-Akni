<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La page Connexion</title>
    <style>
        fieldset{
            border: 0px solid red;
            background-color:#fbfbfc;
        }
        #id_mail, #id_pwd{
            border: 0px solid red;
            display : flex;
            flex-direction: column;
            justify-content: flex-start;
            margin-left: 150px;
            margin-bottom: 50px;
        }
        #envo{
            border: 0px solid red;
            background-color:#D8901D;
            display : flex;
            flex-direction: column;
            justify-content: flex-start;
            margin-left: 150px;
            margin-top:20px;
            height: 50px;
            width: 7%;  
        }
        #liste{
            margin-left: 200px;
            margin-bottom: 100px;
        }
        li{
            margin: 20px; 
        }
        #mail, #pwd{
            height:50px;
        }
        #id_mail{
            margin-top:50px
        }
        #souvenir{
            margin-left: 150px;
        }

    </style>
</head>
<body>
<div>
    <?php
        include("header.php");
    ?>
</div>
<form action="GET">
  <fieldset>
    <div id="id_mail">
      <label for="mail">Votre e-mail : </label>
      <input type="text" id="mail" value="">
    </div>
    <div id="id_pwd">
      <label for="pwd">Mot de passe : </label>
      <input type="email" id="pwd" value="">
    </div>
    <input name="souvenir" type="radio" value="Se souvenir de moi" id="souvenir"/> Se souvenir de moi
    <input type="submit" value="Se connecter" name="Se connecter" id="envo">
  </fieldset>
</form> 
<div id="liste">
    <ul>
        <li><a href="inscription.php">Inscription</a></li>
        <li><a href="pwd_oublie.php">Mot de passe oublié ?</a></li>
    </ul>
</div>
<div>
    <?php
        include("footer.php");
    ?>
</div>
</body>
</html>