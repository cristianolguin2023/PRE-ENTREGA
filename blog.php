<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InnoTech</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">

    <meta name="theme-color" content="#2091F9">

    <?php include_once 'views/viewMetaData.php'; ?>

</head>

<body>
    <?php include_once 'views/viewHeader.php'; ?>
    <main>
        <?php include_once 'views/viewBlog.php'; ?>
        <?php include_once 'views/viewQuestions.php'; ?>
    </main>
    <?php include_once 'views/viewFooter.php'; ?>

    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>