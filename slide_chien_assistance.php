<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide3</title>
    <style>
        .slide{
            margin:40px;
            display:flex;
            position: relative;
            top: 0;
            left: 0;
            height:500px;
        }
        #text_chien1, #cool{
            border:0px solid red;
            position: relative;
            top: 0;
            left: 0;
            width:50%;
        }
        #text_chien1{
            margin-right:300px;
        }
        #text_chien2{
            position:static;
            margin-left:600px;
        }
        .img_chien{
            position: absolute;
            width:50%;
        }
        #ch1 {
            top:50px;
            right:50px;
        }
        #ch3 {
            top:20px;
            right:20px;
            height:400px;
            padding:20px;
        }
        #ch2{
            position:absolute;
            top: 0;
            left: 0;
            width:50%;
            top:50px;
            left:50px;
            height:400px;
        }
        .para1, .para{
            padding-left:20px;
            padding-top:20px;
            margin-right:100px;
        }
        .para2{
            padding-right:20px;
            padding-top:20px;
            margin-left:100px;
        }
        #htrois1, #htrois3 {
            padding:20px;
            margin-right:70px; 
        }
        #htrois2{
            padding:20px;
            margin-left:80px;
        }
        #ch1, #ch2, #ch3{
            filter: drop-shadow(5px 5px 5px #6a6a6d)
        }
        #htrois1, #htrois2, #htrois3, h1{
            color:#D8901D;
        }
        #text_chien1, #text_chien2, .text_chien{
            background-color:#cecac8;
        }
        h1{
            display:flex;
            justify-content:center;
        }
    </style>
</head>
<body>
    <h1>Les chiens d'assistance Akni</h1>
        <div class="slide">
            <div id="text_chien1">
                <h3 id="htrois1">Pour quelles personnes ?</h3>
                <p class="para1">
                    Le chien d???assistance psychiatrique n???est pas une aide adapt??e ?? tous les humains pr??sentant des difficult??s
                    psychiques, tout simplement parce que tous les humains ne sont pas ?? m??me de supporter de cohabiter avec un chien, 
                    et qu???il est avant tout un ??tre vivant qui va venir chambouler tout le quotidien de la personne.
                </p>
                <p class="para1">
                Le b??n??ficiaire doit donc ??tre une personne aimant les animaux, leur contact et leur compagnie.
                 Qui accepte qu???en m??me temps qu???une aide pr??cieuse, qu???un ami, ce soit une contrainte quotidienne, 
                 avec des obligations et responsabilit??s. De plus chez Inka nous ne remettons pas des chiens d??j?? form??s 
                 mais accompagnons le b??n??ficiaire dans la formation de son propre chien d???assistance, 
                donc le b??n??ficiaire doit avoir cette envie de s???impliquer et de faire face aux al??as de l???apprentissage.
                </p>
            </div>
            <img src="./tous_les_images/assis1.jpg" alt="chien" class="img_chien" id="ch1">
        </div>
        <div class="slide">
            <img src="./tous_les_images/chiens2.jpg" alt="chien" class="img_chien2" id="ch2">
            <div id="text_chien2">
                <h3 id="htrois2">Qui est le chien d???assistance psychiatrique ?</h3>
                <p class="para2">
                Le chien d???assistance psychiatrique est un chien form?? ?? assister son b??n??ficiaire dans la vie quotidienne 
                et l???aider ?? affronter le monde malgr?? ses difficult??s psychiques. En tant que chien d???assistance, certifi?? ou en formation,
                c???est un chien qui a un acc??s sans restriction ?? tous les espaces publics, 
                conform??ment aux articles 53 et 54 de la loi 2005-12 du 11 f??vrier 2005.</p>
                <p class="para2">Mais il est aussi et avant tout un chien, et un chien de compagnie.
                C???est un ami, un compagnon de vie, et ne doit jamais ??tre consid??r?? comme un outil ou un m??dicament.
                </p>
            </div>
        </div>
        <div class="slide">
            <div class="text_chien" id="cool">
                <h3 id="htrois3">Qu'apporte t-il ?</h3>
                <p class="para">
                    Les apports du chien d???assistance psychiatrique sont multiples et peuvent ??tre diff??rents d???un b??n??ficiaire
                    ?? l???autre, le handicap psychique ??tant vastes. Le premier bienfait observ?? n???est pas sp??cifique 
                    au chien d???assistance et vient du lien qui uni l???humain ?? son animal qui est un ami, 
                    pr??sent et non jugeant. Par ailleurs le chien est pour l???humain un merveilleux facteur de socialisation 
                    et de reconnexion avec ses paires, or la d??socialisation est un des impacts du handicap.
                </p>
                <p class="para">
                Plus sp??cifiquement le chien d???assistance psychiatrique peut ??tre form?? ?? diverses t??ches selon les besoins 
                de son b??n??ficiaires, comme l???alerte pour pr??venir de l???arriv??e d???une crise (angoisse, t??tanie par exemple)
                , l???interruption de comportements g??nants (automutilation), la pressoth??rapie, le guidage l??ger pour amener le b??n??ficaire dans un lieu calme ou vers la sortie, 
                le rapport d???objet pour amener ?? son b??n??ficiaire ses m??dicaments, son casque anti-bruit ou tout autre objet n??cessaire, etc??? 
                </p>
            </div>
            <img src="./tous_les_images/chiens3.png" alt="chien" class="img_chien" id="ch3">
        </div>
</body>
</html>