<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>Запись сохранен</title>
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
    <div class="header is-fixed">
        <div class="tf-container">
            <div class="tf-statusbar d-flex justify-content-center align-items-center">
                <h3>Журнал</h3>
            </div>
        </div>
    </div>
    <div id="app-wrap">
        <div class="bill-payment-content">
            <div class="tf-container">
                 <div class="wrapper-bill">
                     <div class="archive-top">
                         <span class="circle-box lg bg-circle check-icon">
                         
                         </span>
                         <h3 class="mt-2 fw_6">Запись завершен</h3>
                         <p class="fw_4 mt-2"><?=$_GET['date']?></p>
                     </div>
                     <div class="dashed-line"></div>
                     <div class="archive-bottom">
                         <h2 class="text-center">Итого</h2>
                         <ul>
                             <li class="list-info-bill">Присутствующие <span><?=$_GET['ok']?></span> </li>
                             <li class="list-info-bill">Отсутствующие <span><?=$_GET['no']?></span> </li>
                         </ul>
                     </div>
     
                 </div>
     
     
            </div>
          
         </div>
    </div>
  
    <div class="bottom-navigation-bar st1 bottom-btn-fixed">
        <div class="tf-container">
            <a href="/" class="tf-btn accent large">На главную</a>
        </div>
    </div>
    












    <script type="text/javascript" src="public/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="public/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/javascript/count-down.js"></script>
    <script type="text/javascript" src="public/javascript/main.js"></script>

</body>

</html>