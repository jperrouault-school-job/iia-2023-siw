<?php
    $produits = [];
    $query = "";
    $mysql = mysqli_connect("127.0.0.1", "root", "mariadb", "sqli");

    if (isset($_POST['search'])) {
        $query = "SELECT * FROM produit WHERE pro_name LIKE '%" . $_POST['search'] . "%';";
    }

    else {
        $query = "SELECT * FROM produit;";
    }
    
    $result = mysqli_query($mysql, $query);

    while ($obj = $result->fetch_object()) {
        $produits[] = $obj;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection</title>
</head>
<body>
    <h1>Liste des produits</h1>

    <form method="POST">
        <input type="text" name="search" placeholder="Rechercher" />
        <input type="submit" value="Rechercher" />
    </form>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($produits as $produit) { ?>
                <tr>
                    <td><?= $produit->pro_name ?></td>
                    <td><?= $produit->pro_price ?> euros</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>