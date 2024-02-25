<!doctype html>
<html lang="en" class="h-100">

<head>
  <title>projet2</title>
  <link rel="stylesheet" href="../style.css">
</head>

<body class="d-flex flex-column h-100">

  <!-- Begin page content -->
  <main class="flex-shrink-0">
    <div class="container">
      <h1 class="mt-5">Base de donnee utilisateur</h1>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">id </th>
            <th scope="col">Nom</th>
            <th scope="col">age</th>
            <th scope="col">mail</th>
            <th scope="col" class="size">Supprimer l'utilisateur</th>
            <th scope="col" class="size">Modifier l'utilisateur</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($users as $user) {
          ?>
            <tr>
              <th><?php echo $user['id_client']; ?></th>
              <td><?php echo $user['nom']; ?></td>
              <td><?php echo $user['age']; ?></td>
              <td><?php echo $user['email']; ?></td>
              <form action="/del/<?php echo $user['id_client'] ?>" method="post" onsubmit="return confirm('Voulez-vous vraiment supprimer l\'utilisateur ?');">
                <label for="id"></label>
                <input type="hidden"  id="Id_client" name="id_client" value="<?php echo $user['id_client'] ?>">
                <td class="size"><button type='submit'>Supprimer</button></td>
              </form>
              <form action="/mod/<?php echo $user['id_client'] ?>" method="post">
                <label for="id"></label>
                <input type="hidden" id="Nom" name="nom" value="<?php echo $user['nom'] ?>">
                <label for="id"></label>
                <input type="hidden" id="Age" name="age" value="<?php echo $user['age'] ?>">
                <label for="id"></label>
                <input type="hidden" id="Email" name="email" value="<?php echo $user['email'] ?>">
                <label for="id"></label>
                <input type="hidden"  id="Id_client" name="id_client" value="<?php echo $user['id_client'] ?>">
                <td><button type='submit' class="btn btn-primary mt-2 bg-secondary border-light end-0 top-50">Modifier</button></td>
              </form>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>

    </div>
  </main>

</body>

</html>