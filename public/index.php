<?php require "../bootstrap.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP devclass</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'/>
</head>
<body>
  <div class="container">
  <?php
    try {
      require load();
    } catch(Exception $e) {
        echo $e->getMessage();
    }
  ?>
  </div>
</body>
</html>