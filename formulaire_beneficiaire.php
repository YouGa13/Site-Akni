<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        #form_bene{
            background-color:#fbfbfc;
        }
        p{
            padding: 10px;
        }
        input{
            height: 50px;
        }
        #envoi{
            background-color:#D8901D;
            height: 80px;
            width: 200px;
            border-radius: 50%;
            border: 1px solid #000;
            border:2px solid rgb(248, 246, 246);
        }
        h2{
            color:#D8901D;
            display:flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div id="form_bene">
        <h2>
            <strong>Devenir bénéficiaire</strong>
        </h2>
        <form action="" method="post">
            <p>
                <label> Votre nom<br />
                    <input type="text" name="nom" value="" size="50" />
                </label>
            </p>
            <p>
                <label> Votre prénom<br />
                    <input type="text" name="name" value="" size="50" />
                </label>
            </p>
            <p>
                <label> Adresse<br />
                    <input type="text" name="adresse" value="" size="50"/>
                </label>
            </p>
            <p>
                <label> Téléphone<br />
                    <input type="tel" name="tel" value="" size="50"/>
                </label>
            </p>
            <p>
                <label> Avez-vous un chien à former ?<br />
                    <input type="radio" name="radio_former" value="Oui" />Oui
                    <input type="radio" name="radio_former" value="Non" />Non
                <label>
            </p>
            <p>
                <label> Votre e-mail<br />
                    <input type="email" name="email-115" value="" size="50"/>
                </label>
            </p>
            <p>
                <label> Quelles sont vos activités?<br />
                    <input type="text" name="text" value="" size="50"/>
                </label>
            </p>
            <p>
                <label> Vous vivez en:<br />
                    <input type="checkbox" name="checkbox_en" value="Maison" />Maison
                    <input type="checkbox" name="checkbox_en" value="Appartement" />Appartement
                    <input type="checkbox" name="checkbox_en" value="Ville" />Ville
                    <input type="checkbox" name="checkbox_en" value="Périphérie" />Périphérie
                </label>
            </p>
            <p>
                <label> Vous vivez:<br />
                    <label>
                        <input type="checkbox" name="checkbox" value="Seul" />Seul
                    </label>
                    <label>
                        <input type="checkbox" name="checkbox" value="Famille" />Famille
                    </label>
                    <label>
                        <input type="checkbox" name="checkbox" value="Colocation" />Colocation
                    </label>
                </label>
            </p>
            <p>
                <label> Avez vous un animal?<br />
                    <label>
                        <input type="radio" name="radio-591" value="Oui" checked="checked" />Oui
                    </label>
                    <label>
                        <input type="radio" name="radio-591" value="Non" />Non
                    </label>
                </label>
            </p>
            <p>
                <label> Quels sont vos diagnostics psychiatriques?<br />
                    <input type="text" name="text" value="" size="50" />
                </label>
            </p>
            <p>
                <input type="submit" value="Envoyer votre demande" id="envoi" />
            </p>
        </form>
    </div>
</body>
</html>