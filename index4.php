<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" />
    <meta name="description" content="À Votre Service France - Ecrivain publique. Je crée tous vos documents pour vous sur toute la France." />

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" -->
    <!-- integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="./style/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="style/style.css" rel="stylesheet" type="text/css">

    <title>À Votre Service France</title>
</head>

<body>
    <?php //phpinfo(); ini_set('display_errors', 1);
            error_reporting(E_ALL);
            ini_set("error_log","error_php.txt");
            ?>

    <!-- <form method="get">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" minlength="3" class="form-control" id="nom" aria-describedby="nomHelp">
                    <div id="nomHelp" class="form-text">Les données sont strictement confidentielles</div>
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" id="telephone" aria-describedby="telHelp">
                    <div id="telHelp" class="form-text">Utilisé pour vous contacter</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse mail</label>
                    <input type="email" class="form-control" id="email" aria-describedby="adresseHelp" placeholder="nom@exemple.com">
                    <div id="adresseHelp" class="form-text">Utilisé pour vous contacter</div>
                </div>
            </div>
        </div>

        Meilleur moment pour vous contacter :
        <div class="row justify-content-md-center">

            <div class="col-6">

                <div class="mb-1 form-check">
                    <input type="checkbox" class="form-check-input" id="lundi">
                    <label class="form-check-label" for="lundi">Lundi</label>
                </div>
                <div class="mb-1 form-check">
                    <input type="checkbox" class="form-check-input" id="mardi">
                    <label class="form-check-label" for="mardi">Mardi</label>
                </div>
                <div class="mb-1 form-check">
                    <input type="checkbox" class="form-check-input" id="mercredi">
                    <label class="form-check-label" for="mercredi">Mercredi</label>
                </div>
                <div class="mb-1 form-check">
                    <input type="checkbox" class="form-check-input" id="jeudi">
                    <label class="form-check-label" for="jeudi">Jeudi</label>
                </div>
                <div class="mb-1 form-check">
                    <input type="checkbox" class="form-check-input" id="vendredi">
                    <label class="form-check-label" for="vendredi">Vendredi</label>
                </div>
                <div class="mb-1 form-check">
                    <input type="checkbox" class="form-check-input" id="samedi">
                    <label class="form-check-label" for="samedi">Samedi</label>
                </div>
                <div class="mb-1 form-check">
                    <input type="checkbox" class="form-check-input" id="dimanche">
                    <label class="form-check-label" for="dimanche">Dimanche</label>
                </div>
            </div>

            <div class="col-6">
                <div class="mb-1 form-check">
                    <input type="checkbox" class="form-check-input" id="9-12">
                    <label class="form-check-label" for="9-12">9h - 12h</label>
                </div>
                <div class="mb-1 form-check">
                    <input type="checkbox" class="form-check-input" id="12-14">
                    <label class="form-check-label" for="12-14">12h - 14h</label>
                </div>
                <div class="mb-1 form-check">
                    <input type="checkbox" class="form-check-input" id="14-18">
                    <label class="form-check-label" for="14-18">14h - 18h</label>
                </div>
                <div class="mb-1 form-check">
                    <input type="checkbox" class="form-check-input" id="18-20">
                    <label class="form-check-label" for="18-20">18h - 20h</label>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6">
                <label for="demande" class="form-label">Votre demande</label>
                <textarea class="form-control" id="demande" aria-describedby="demandeHelp"></textarea>
                <div id="demandeHelp" class="form-text">Décrivez votre besoin</div>

                <button type="submit" class="bouton mt-2">Envoyer</button>
            </div>
        </div>
    </form> -->


    <form method="post" action="res.php">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" minlength="3" class="form-control" id="nom" name="titi" aria-describedby="nomHelp">
        <div id="nomHelp" class="form-text">Les données sont strictement confidentielles</div>

        <label for="telephone" class="form-label">Téléphone</label>
        <input type="tel" class="form-control" id="telephone" aria-describedby="telHelp">
        <div id="telHelp" class="form-text">Utilisé pour vous contacter</div>

        <label for="email" class="form-label">Adresse mail</label>
        <input type="email" class="form-control" id="email" aria-describedby="adresseHelp" placeholder="nom@exemple.com">
        <div id="adresseHelp" class="form-text">Utilisé pour vous contacter</div>

        Meilleur moment pour vous contacter :


        <input type="checkbox" class="form-check-input" id="lundi">
        <label class="form-check-label" for="lundi">Lundi</label>
        <input type="checkbox" class="form-check-input" id="mardi">
        <label class="form-check-label" for="mardi">Mardi</label>
        <input type="checkbox" class="form-check-input" id="mercredi">
        <label class="form-check-label" for="mercredi">Mercredi</label>
        <input type="checkbox" class="form-check-input" id="jeudi">
        <label class="form-check-label" for="jeudi">Jeudi</label>
        <input type="checkbox" class="form-check-input" id="vendredi">
        <label class="form-check-label" for="vendredi">Vendredi</label>
        <input type="checkbox" class="form-check-input" id="samedi">
        <label class="form-check-label" for="samedi">Samedi</label>
        <input type="checkbox" class="form-check-input" id="dimanche">
        <label class="form-check-label" for="dimanche">Dimanche</label>

        <input type="checkbox" class="form-check-input" id="9-12">
        <label class="form-check-label" for="9-12">9h - 12h</label>
        <input type="checkbox" class="form-check-input" id="12-14">
        <label class="form-check-label" for="12-14">12h - 14h</label>
        <input type="checkbox" class="form-check-input" id="14-18">
        <label class="form-check-label" for="14-18">14h - 18h</label>
        <input type="checkbox" class="form-check-input" id="18-20">
        <label class="form-check-label" for="18-20">18h - 20h</label>

        <label for="demande" class="form-label">Votre demande</label>
        <textarea class="form-control" id="demande" aria-describedby="demandeHelp"></textarea>
        <div id="demandeHelp" class="form-text">Décrivez votre besoin</div>

        <button type="submit" class="bouton mt-2">Envoyer</button>
    </form>

  

</body>

</html>