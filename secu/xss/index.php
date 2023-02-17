<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Démo XSS</title>
</head>
<body>
    <?php
    $username = "";

    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    }
    ?>

    <form method="POST">
        <input type="text" name="username" value="<?= $username ?>" />
        <input type="submit" value="OK" />
    </form>
</body>
</html>