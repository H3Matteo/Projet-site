<!doctype html>
<html lang="en" class="h-100">

<head>
    <title>projet2 ajouter</title>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Ajouter utilisateur</h1>
            <form method="post">
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input type="text" required class="form-control" name="nom" id="Nom" placeholder="ex : girodo">
                </div>
                <div class="form-group">
                    <label for="firstname">Age :</label>
                    <input type="text" required class="form-control" name="age" id="Age" placeholder="ex : 18">
                </div>
                <div class="form-group">
                    <label for="email">Adresse mail :</label>
                    <input type="text" required class="form-control" name="email" id="Email" placeholder="adressemail@example.fr">
                </div>
                <div class="form-group">
                <label for="name">Mot de passe :</label>
                    <input type="text" required class="form-control" name="mot_de_passe" id="Mot_de_passe">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Envoyer</button>
            </form>
        </div>
    </main>

</html>