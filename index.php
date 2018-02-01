<?php
include 'models/clients.php';
include 'controllers/indexController.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Liste clients</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    </head>
    <body>
        <h1>Affichage de la table client</h1>        
        <div class="row">
            <h2>Liste de tous les clients</h2>
            <table class="col offset-l3 l5 striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                        <th>Age</th>
                        <th>Carte</th>
                        <th>Numéro de carte</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Le nom de la variable qui a servie à appeler la fonction
                    foreach ($clientList AS $customers)
                    {
                        ?>
                        <tr>
                            <td><?= $customers->id; ?></td>
                            <td><?= $customers->lastName; ?></td>
                            <td><?= $customers->firstName; ?></td>
                            <td><?= $customers->birthDate; ?></td>
                            <td><?= $customers->age; ?></td>
                            <td><?= $customers->card; ?></td>
                            <td><?= $customers->cardNumber; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
