<?php

  require_once('inc/lib.inc.php');
  require_once('inc/data.inc.php');

?>

<!DOCTYPE html>
<html>

<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <?php require_once('inc/top.inc.php'); ?>
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1><?= $welcome ?>, Гость!</h1>
    <!-- Заголовок -->
    <?php require_once('inc/index.inc.php') ?>
  </div>
  <div id="nav">
    <?php require_once('inc/menu.inc.php') ?>
  </div>
  <div id="footer">
    <?php require_once('inc/bottom.inc.php'); ?>
  </div>
</body>

</html>