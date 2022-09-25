<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <style>
        #image{
            background-color:#fbfbfc;
            margin-top: 50px;
            margin-bottom:50px;
        }
        #akni{
            background-color:#fbfbfc;
            margin: 40px;
            height:600px;
            padding:40px;
        }
        p{
            margin-bottom:50px;
        }
        #en{
            font-size:300%;
            color:#D8901D;
        }
    </style>
</head>
<body>
<div>
    <?php
        include("header.php");
    ?>
</div>
<div>
    <div id="image">
    <?php
        include("diaporama.php");
    ?>  
    </div>
    <div id="akni">
        <p><span id="en">A</span>kni est une association de formation de chiens d’assistance psychiatrique fondée en novembre 2021 
            (mais réfléchie depuis bien plus longtemps !) par des personnes elles-mêmes concernées directement
             par la question du handicap
            , psychique et physique, et impliquées dans le monde du comportement et du bien-être canin.</p>
        <p>
        Akni souhaite proposer un accompagnement à la formation de chiens d’assistance « sur mesure », 
        adapté aux besoins spécifiques de chaque bénéficiaire, pour des personnes adultes, 
        trop souvent oubliées ou infantilisées. Pour nous il est primordiale que chaque personne, 
        handicapée ou non, bénéficiaire ou membre de l’association, soit traitée avec le même respect et considérée
         comme une personne à part entière, ni plus ni moins. Aussi souhaitons-nous nous inscrire 
         dans la lutte contre la psychophobie et le validisme,
         mais également réfutons-nous toute autre forme d’oppression à l’encontre de minorités.
        </p>
        <p>
        Dans la continuité de cette lutte contre les oppressions systémiques, il nous semble logique de prôner 
        le respect de l’animal, sa reconnaissance en tant qu’individu à part entière, avec ses propres besoins 
        et aspirations. Si en effet le chien d’assistance est un chien de travail, qui devra être surconditionné 
        à l’accomplissement de certaines tâches et à évoluer de façon non naturelle pour lui dans le monde humain,
         il n’en est pas moins un être vivant au bien-être duquel il sera important de veiller. Si nous refusons 
         catégoriquement toute forme de coercition dans son éducation, que ce soit par le biais de l’usage 
         d’outils pouvant provoquer gêne ou douleur, ou de méthodes usant de l’intimidation, de l’inconfort ou 
         de la peur, nous refusons aussi l’hyper contrôle et la robotisation du chien même si elle est faite de
          manière dite « positive ». Le chien d’assistance 
        doit être avant tout un individu à part entière et un chien de compagnie dont les besoins sont comblés.
        </p>
        <p>
        L’association Akni est basée en Dordogne.
        </p>
    </div>
</div>
<div>
    <?php
        include("footer.php");
    ?>
</div>
</body>
</html>