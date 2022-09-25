<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devenir Bénéficiaire</title>
    <style>
        #carte, #le_chien{
            width:35%;
            padding:20px;
        }
        #img_carte, #img_lechien{
            width:100%
        }
        #cachien{
            display:flex;
            margin-top:20px;
            margin-bottom:100px;
            margin-left:300px;
            margin-right:200px;
        }
        h2, h4{
            display:flex;
            justify-content:center;
            color:#D8901D;
        }
        #acarte{
            color:#D8901D;
        }
        #formul{
            width:50%;
            margin-left:300px;
        }
        #img_formul{
            width:100%;
            padding-bottom:20px;
        }
        #boutton{
            display:flex;
            justify-content:center;
            padding-bottom:10px
        }
        button{
            background-color:#cecac8;
            height: 60px;
            width: 100px;
            border-radius: 50%;
            border: 1px solid #000;
            border:2px solid white;
        }
        #pdf{
            margin-right:30px;
        }
        #ligne{
            margin-left:30px;
        }
        #apdf, #aligne{
            color:black;
        }
    </style>
</head>
<body>
    <h2>
        Devenir bénéficiaire
    </h2>
    <h2>
        Conditions et démarches

    </h2>
        <div id="cachien">
            <div id="carte">
                <img src="./tous_les_images/cartemobiliteinclusion.jpeg" alt="cartemobilite" id="img_carte">
                <h4>LA CARTE MOBILITÉ INCLUSION</h4>
                <p>
                Être titulaire de la CMI (Carte Mobilité Inclusion) délivrée par la MDPH 
                (Maison Départementale des Personnes Handicapées). C’est la seule exigence légale, 
                mais sans cette carte vous ne pourrez pas prétendre à bénéficier de l’aide d’un chien d’assistance
                </p>
                <p>
                    <a href="https://www.service-public.fr/particuliers/vosdroits/F34049" id="acarte">Plus d'infos sur la CMI  <span>>></span></a>
                </p>
            </div>
            <div id=le_chien>
                <h4>LE CHIEN</h4>
                <p>
                Tous les chiens sont merveilleux, mais tous ne sont pas aptes à devenir chien d’assistance ! 
                Si vous avez déjà un chien que vous souhaitez former, il sera évalué pour voir s’il présente 
                ou non le bon profil. Si vous n’avez pas de chien, pas de panique, l’accompagnement dans la recherche 
                et le choix du chien fait partie de nos missions et nous rechercherons ensemble le profil idéal pour vous accompagner !
                </p>
                <img src="./tous_les_images/bene1.jpg" alt="le_chien" id="img_lechien">
            </div>
        </div>
    <div id="formul">
        <img src="./tous_les_images/fomul.png" alt="formulaire" id="img_formul">
        <p>
        Après vous être assuré.e que vous êtes bien en accord avec les valeurs de l’association, 
        que vous êtes en possession de la CMI (Carte Mobilité Inclusion) et 
        que vous vivez sur la bonne zone géographique, vous pourrez remplir notre formulaire d’admission,
        soit en remplissant le formulaire en ligne, soit le télécharger et nous le faire parvenir par courrier. 
        </p>
        <div id="boutton">
            <button id="pdf"><a href="https://www.inka-association.fr/wp-content/uploads/2022/02/Dossier-dAdmissionpdf-1.pdf" id="apdf">En pdf</a></button>
            <button id="ligne"><a href="formulaire_beneficiaire.php" id="aligne">En ligne</a></button>
        </div>
    </div>
</body>
</html>