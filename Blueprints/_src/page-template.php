<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title><?php echo $title; ?> | Blueprint Viewer</title>
  <link rel="stylesheet" type="text/css" href="../_src/css/main.css">
</head>

<body>

  <div id="blueprint<?php echo $num; ?>"></div>


  <?php require '../_src/nav.php'; ?>


  <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="EDIT_ME.js"></script>
  <script src="../_src/js/_vars.js"></script>
  <script src="../_src/js/openseadragon/openseadragon.min.js"></script>
  <script src="../_src/js/script.js" bp="blueprint<?php echo $num; ?>" page="page<?php echo $num; ?>"></script>

</body>

</html>