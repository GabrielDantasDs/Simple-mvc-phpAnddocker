<?php session_start();
$_SESSION['teste'] = 'teste';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Simple Framework</title>
    <link rel="stylesheet" href="/Assets/css/bootstrap.min.css">
  </head>
  <body>

  <?php
    require 'Autoload.php';

    use Core\App;

    $app = new App();

  ?>
  <script src="/Assets/js/jquery.slim.min.js"></script>
  <script src="/Assets/js/bootstrap.min.js"></script>
  </body>
</html>
