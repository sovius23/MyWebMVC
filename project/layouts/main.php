<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="/project/webroot/style.css">
    <title><?php echo $title ?></title>
</head>
<body>
<div class="d-flex justify-content-between w-75 mt-1"">
    <a class="px-2" href="<?php echo "/hello/" ?>">Главная</a>
    <a href="<?php echo "/calc/" ?>">Рассчитать дозировку</a>
    <a  href="<?php echo "list.php" ?>">Список препаратов</a>
</div>
<a style=" position: sticky;top: 0; left: 95%;margin-top: -10px"  href="<?php echo "" ?>">Другое</a>

<?php echo $content ?>
<footer class="text-center" style="margin-top: 200px;">All Rights Reserved! @</footer>
</body>
</html>