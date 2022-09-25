<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La page Akni</title>
    <style>
        #akni{
            background-color:#fbfbfc;
            margin-right:20px;
            display: flex;
            padding-bottom:100px;
            position: relative;
            top: 0;
            left: 0;
            height:650px;
        }
        }
        #chien2{
            width:30%;
            position: relative;
            top: 0;
            left: 0;
        }
        #chien{
            width:20%;
        }
        #text{
            padding-top:200px;
            padding-left:150px;
            padding-bottom:150px;
            width:50%;
            background-color:#cecac8;
            height:375px;
        }
        h1{
            color:#D8901D;
            font-size:450%;
        }
        #img_chien{
            position: absolute;
            top: 150px;
            left: 500px;
            width:20%;
            height:400px
        }
        button{
            background-color:#D8901D;
            height: 50px;
            width: 100px;
            border-radius: 50%;
            border: 1px solid #000;
            border:2px solid white;
        }
        #boutton{
            display:flex;
            justify-content:center;
            margin:5px;
        }
    </style>
</head>
<body>
<div>
    <?php
        include("header.php");
    ?>
</div>
<div id="akni">
    <div id="chien2">
        <img src="./tous_les_images/akni2.webp" alt="chien">
    </div>
    <div id="chien">
        <img src="./tous_les_images/akni1.jpg" alt="chien" id="img_chien">
    </div>
    <div id="text">
        <h1>Akni Association</h1>
        <p>
            Inka est une association de formation de chiens d’assistance psychiatrique fondée en novembre 2021 
            (mais réfléchie depuis bien plus longtemps !) par des personnes elles-mêmes concernées directement
            par la question du handicap, psychique et physique,
            et impliquées dans le monde du comportement et du bien-être canin.
        </p>
    </div>
</div>
<div id="boutton">
    <button>
        <a href="acceuil.php">Decouvrir</a>
    </button>
</div>
<div>
    <?php
        include("footer.php");
    ?>
</div>
</body>
</html>