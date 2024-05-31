<?php
if(isset($_POST['fio']) && isset($_POST['iin']) && isset($_POST['class'])){
    $data = array(
        'fio'=>$_POST['fio'],
        'iin'=>$_POST['iin'],
        'class'=>$_POST['class']
    );

    DBC::insert('students', $data);
    Router::redirect('/');
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>Доавбить студента</title>
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

<body>
   <!-- preloade -->
   <div class="preload preload-container">
    <div class="preload-logo">
      <div class="spinner"></div>
    </div>
  </div>
<!-- /preload -->
    <div class="header header-st2">
        <div class="tf-container">
            <div class="tf-statusbar d-flex justify-content-between align-items-center">
                <h2>
                    <a href="/" class="back-btn fw_4">На главную </a>
                </h2>
            </div>
        </div>
    </div>
    <div class="repicient-content">
       <div class="tf-container">
   
        <div class="tf-form mt-7">
            <form action="new" method="post">
                <div class="group-input">
                    <label>ФИО</label>
                    <input type="text" placeholder="ФИО студента" name="fio">
                </div>
                <div class="group-input">
                    <label>ИИН</label>
                    <input type="number" placeholder="ИИН студента  " name="iin">
                    
                </div>
                <div class="group-input input-field">
                    <label>факультатет</label>
                    <input type="text" value="Начальный" name="class" required class="search-field value_input st1" type="text">
                    <span class="icon-clear"></span>
                </div>

                <button class="tf-btn accent">Добавить студента </button>
            </form>
         </div>
       </div>
     
    </div>
  
   
    
    <script type="text/javascript" src="public/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="public/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/javascript/main.js"></script>

</body>

</html>