<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>Класс</title>
     <!-- Favicon and Touch Icons  -->
     <link rel="shortcut icon" href="public/images/logo.png" />
     <link rel="apple-touch-icon-precomposed" href="public/images/logo.png" />
    <!-- Font -->
    <link rel="stylesheet" href="public/fonts/fonts.css" />
    <!-- Icons -->
    <link rel="stylesheet" href="public/fonts/icons-alipay.css">
    <link rel="stylesheet" href="public/styles/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="public/styles/styles.css" />
    <link rel="manifest" href="public/_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="192x192" href="public/app/icons/icon-192x192.png">
</head>

<body class="bg_surface_color">
   <!-- preloade -->
   <div class="preload preload-container">
    <div class="preload-logo">
      <div class="spinner"></div>
    </div>
  </div>
<!-- /preload -->
    <div class="header bg_white_color is-fixed">
        <div class="tf-container">
            <div class="tf-statusbar d-flex justify-content-center align-items-center">
                <a href="#" class="back-btn"> <i class="icon-left"></i> </a>
                <h3>Факультатеты</h3>
            </div>
        </div>
    </div>
    <div id="app-wrap">
        <div class="wrap-banks mt-5">
            <div class="tf-container">
                <h3 class="fw_6">Список</h3>
                <div class="tf-spacing-12"></div>
                <ul class="bank-list-transfer">
                    <?php
                    $all = DBC::show('students');
                    $class = [];

                    foreach($all as $one){
                        if(!in_array($one['class'], $class)){
                            $class[] = $one['class'];
                        }
                    }

                    foreach($class as $row){
                        ?>
                        <li><a href="students?class=<?=$row?>"><?=$row?></a></li>
                        <?
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    


    <script type="text/javascript" src="public/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="public/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/javascript/main.js"></script>

</body>

</html>