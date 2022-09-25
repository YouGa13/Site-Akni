<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les mentions</title>
    <style>
        h1{
            color: #D8901D;
        }
        #id_mention{
            background-color:#fbfbfc;
            margin: 40px;
        }
        #mention{
            margin:40px;
            padding-top:40px;
        }
        #qsn{
            margin-top:40px;
        }
    </style>
</head>
<body>
<div>
    <?php
        include("header.php");
    ?>
</div>
<div id="id_mention">
    <div id="mention">
        <div id="qsn">
            <h1>Qui sommes-nous ?</h1>
            <p>L’adresse de notre site est : <a href="https://wp.ldnr.fr/~groupe4/groupe4">https://wp.ldnr.fr/~groupe4/groupe4</a>.</p>
        </div>
        <h1>Commentaires</h1>
        <p>
        Quand vous laissez un commentaire sur notre site, les données inscrites dans le formulaire de commentaire, 
        ainsi que votre adresse IP et l’agent utilisateur de votre navigateur sont collectés pour nous aider 
        à la détection des commentaires indésirables.</p>
        <p>Une chaîne anonymisée créée à partir de votre adresse e-mail (également appelée hash) peut être 
        envoyée au service Gravatar pour vérifier si vous utilisez ce dernier. Les clauses de confidentialité du service Gravatar sont disponibles ici : https://automattic.com/privacy/.
        Après validation de votre commentaire, votre photo de profil sera visible publiquement
        à coté de votre commentaire.
        </p>
        <h1>Médias</h1>
        <p>
        Si vous téléversez des images sur le site, nous vous conseillons d’éviter de téléverser des images
        contenant des données EXIF de coordonnées GPS. Les personnes visitant votre site peuvent télécharger 
        et extraire des données de localisation depuis ces images.
        </p>
        <h1>Cookies</h1>
        <p>Si vous déposez un commentaire sur notre site, il vous sera proposé d’enregistrer votre nom, adresse e-mail et site dans des cookies. C’est uniquement pour votre confort afin de ne pas avoir à saisir ces informations si vous déposez un autre commentaire plus tard. Ces cookies expirent au bout d’un an.
        <p>Si vous vous rendez sur la page de connexion, un cookie temporaire sera créé afin de déterminer 
        si votre navigateur accepte les cookies. Il ne contient pas de données personnelles et 
        sera supprimé automatiquement à la fermeture de votre navigateur.</p>
        <p>Lorsque vous vous connecterez, nous mettrons en place un certain nombre de cookies pour enregistrer
        vos informations de connexion et vos préférences d’écran. La durée de vie d’un cookie de connexion 
        est de deux jours, celle d’un cookie d’option d’écran est d’un an. Si vous cochez « Se souvenir de moi »,
        votre cookie de connexion sera conservé pendant deux semaines. Si vous vous déconnectez de votre compte,
        le cookie de connexion sera effacé.</p>
        <p>En modifiant ou en publiant une publication, 
        un cookie supplémentaire sera enregistré dans votre navigateur. 
        Ce cookie ne comprend aucune donnée personnelle. Il indique simplement l’ID de la publication
        que vous venez de modifier. Il expire au bout d’un jour.</p>
        <h1>Contenu embarqué depuis d’autres sites</h1>
        <p>Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos,
        images, articles…). Le contenu intégré depuis d’autres sites se comporte de la même manière 
        que si le visiteur se rendait sur cet autre site.</p>
        <p>Ces sites web pourraient collecter des données sur vous, utiliser des cookies, 
        embarquer des outils de suivis tiers, suivre vos interactions avec ces contenus embarqués
        si vous disposez d’un compte connecté sur leur site web.</p>
        <h1>Utilisation et transmission de vos données personnelles</h1>
        <p>Si vous demandez une réinitialisation de votre mot de passe, 
        votre adresse IP sera incluse dans l’e-mail de réinitialisation.</p>
        <h1>Durées de stockage de vos données</h1>
        <p>Si vous laissez un commentaire, le commentaire et ses métadonnées sont conservés indéfiniment. 
        Cela permet de reconnaître et approuver automatiquement les commentaires suivants au lieu de les
        laisser dans la file de modération.</p>
        <p>Pour les comptes qui s’inscrivent sur notre site (le cas échéant), nous stockons également 
        les données personnelles indiquées dans leur profil. Tous les comptes peuvent voir, 
       modifier ou supprimer leurs informations personnelles à tout moment (à l’exception de leur identifiant)
       .Les gestionnaires du site peuvent aussi voir et modifier ces informations.</p>
        <h1>Les droits que vous avez sur vos données</h1>
        <p>Si vous avez un compte ou si vous avez laissé des commentaires sur le site, vous pouvez demander à recevoir un fichier contenant toutes les données personnelles que nous possédons à votre sujet, incluant celles que vous nous avez fournies. Vous pouvez également demander la suppression des données personnelles vous concernant. 
        Cela ne prend pas en compte les données stockées à des fins administratives,
        légales ou pour des raisons de sécurité.</p>
        <h1>Transmission de vos données personnelles</h1>
        <p>Les commentaires des visiteurs peuvent être vérifiés à l’aide d’un service automatisé de détection des 
        commentaires indésirables.</p>
    </div>
</div>
<div>
    <?php
        include("footer.php");
    ?>
</div>
</body>
</html>