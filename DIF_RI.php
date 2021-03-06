<?php
  include "Backend/Library/DifferentType_Function.php";
  $rf = new RI();
?>
<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8" />
        <title>Hoşgeldiniz</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <?php include "_menu.php"; ?>
    <div class="container-fluid">
      <div class="wrapper">
        <?php include "_left_bar.php";?>
        <div class="content-page">
          <div class="content">

            <div class="card text-center">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">Birşeyler yaz.</p>
              <a href="<?=$rf->getReferer($_SERVER['HTTP_REFERER'])?>" class="btn btn-primary">Gerigel</a>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
      <?php include "_footer.php"?>
      </body>

</html>
