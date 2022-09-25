<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <style>
        fieldset{
            border: 0px solid red;
            background-color:#fbfbfc;
        }
        #id_name, #id_mail, #id_objet{
            border: 0px solid red;
            display : flex;
            flex-direction: column;
            justify-content: flex-start;
            margin-left: 150px;
            margin-right: 700px;
            margin-bottom: 50px;
        }
        #name, #mail, #objet{
            height:50px;
        }
        #id_name{
            margin-top:50px
        }
        #id_message{
            border: 0px solid red;
            display : flex;
            flex-direction: column;
            justify-content: flex-start;
            margin-left: 150px;
            margin-right: 250px; 
        }
        #message{
            height:300px;
        }
        #envo{
            border: 0px solid red;
            background-color: #D8901D;
            display : flex;
            flex-direction: column;
            justify-content: flex-start;
            margin-left: 150px;
            margin-top:50px;
            height: 50px;
            width: 7%;
        }
        #contact{
            border: 0px solid red;
            background-color:#fbfbfc;
            display : flex;
            justify-content: center;           
        }
        h1{
            color: #D8901D; 
        }
    </style>
</head>
<body>
    <div>
        <?php
        include("header.php");
        ?>
    </div>
    <div id="contact">
        <h1>
            CONTACTEZ-NOUS
        </h1>
    </div>
<form action="#">
  <fieldset>
    <div id="id_name">
      <label for="name">Votre Nom : </label>
      <input type="text" id="name" value="prenom et nom">
    </div>
    <div id="id_mail">
      <label for="mail">Votre e-mail : </label>
      <input type="email" id="mail" value="votre mail">
    </div>
    <div id="id_objet">
      <label for="objet">Objet : </label>
      <input type="text" id="objet" value="l'objet de votre message">
    </div>
    <div id="id_message">
      <label for="message">Votre message(facultatif) : </label>
      <input type="text" id="message" value="">
    </div>
    <input type="submit" value="Envoyer" name="Envoyer" id="envo">
  </fieldset>
</form>
<div>
    <?php
        include("footer.php");
    ?>
</div>
</body>
</html>