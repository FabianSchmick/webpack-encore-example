<?php
    $json = file_get_contents(__DIR__ . "/assets/manifest.json");
    $assets = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webpack encore example</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $assets['assets/css/app.css'] ?>"/>
</head>
<body class="d-flex justify-content-center align-items-center flex-column">
    <h1>Webpack encore example</h1>

    <img src="<?php echo $assets['assets/images/logo.jpg'] ?>" alt="logo"/>

    <script type="text/javascript" src="<?php echo $assets['assets/js/app.js'] ?>"></script>
</body>
</html>
