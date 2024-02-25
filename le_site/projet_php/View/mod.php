<!DOCTYPE html>
<html lan="en" class="h-100">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>modifier l'utilisateur</title>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Modification de l'utilisateur</h1>
            <form action="/mode" method="post">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" required class="form-control" name="nom" id="Nom" value=<?php echo $_POST['nom'] ?>>
                </div>
                <div class="form-group">
                    <label for="age">Age :</label>
                    <input type="text" required class="form-control" name="age" id="Age" value=<?php echo $_POST['age']?>>
                </div>
                <div class="form-group">
                    <label for="email">Adresse mail :</label>
                    <input type="text" required class="form-control" id="Email" name="email" value=<?php echo $_POST['email']?>>
                </div>
                <div class="form-group">
                    <label for="id_client"></label>
                    <input type="hidden" required class="form-control" id="Id_client" name="id_client" value=<?php echo $_POST['id_client'] ?>>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Modifier</button>
            </form>
        </div>
    </main>
    
</body>

</html>