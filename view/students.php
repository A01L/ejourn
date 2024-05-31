<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>Студенты</title>
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="public/images/logo.png" />
    <link rel="apple-touch-icon-precomposed" href="public/images/logo.png" />
    <!-- Font -->
    <link rel="stylesheet" href="public/fonts/fonts.css" />
    <!-- Icons -->
    <link rel="stylesheet" href="public/fonts/icons-alipay.css">
    <link rel="stylesheet" href="public/styles/bootstrap.css">
    <link rel="stylesheet" href="public/styles/swiper-bundle.min.css">
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
    <div class="header-transfer">
        <div class="tf-container">
            <div class="tf-statusbar d-flex justify-content-center align-items-center">
                <a href="/" class="back-btn"><i class="icon-left on_surface_color"></i></a>
                <h3 class="">Студенты</h3>
            </div>
        </div>
    </div>
    <div class="wrap-transfer-friends mt-3">
       <div class="tf-container">
            <div class="wrap-fixed fixed-container">
                <div class="input-field">
                    <form action="students" method="get">
                    <button style="width: auto; border: none; background: none; padding: 0px;" class="icon-search"></button>
                    <input required class="search-field value_input" placeholder="Поиск по ИИН" type="text" name="search" value="">
                    <span class="icon-clear"></span>
                    </form>
                </div>
            </div>
            
            <div class="tf-tab">
                <ul class="menu-tabs">
                    <a href="/students"><li class="nav-tab <?=($_GET['type'] != 'none'?'active':'')?>">Студенты</li></a>
                    <a href="/classes"><li class="nav-tab <?=($_GET['type'] == 'none'?'active':'')?>">Группы</li></a>
                </ul>
                <div class="content-tab">
                    <ul class="tabs-list-item">
                        <?php
                        $all = DBC::show('students');
                        foreach($all as $row){
                            $style="";
                            if(isset($_GET['class']) && $row['class']!=$_GET['class']){
                                $style="display:none;";
                            }
                            if(isset($_GET['search']) && $row['iin']!=$_GET['search']){
                                $style="display:none;";
                            }
                        ?>
                             <li>
                                <a href="#" class="recipient-list" style="<?=$style?>">
                                    <ul class="inner">
                                        <li class="info">
                                            <h4><?=$row['fio']?></h4>
                                            <p><?=$row['iin']?></p>
                                        </li>
                                    </ul>
                                    <ul class="alphabet">
                                        <li><?=$row['class']?></li>
                                    </ul>
                                </a>
                            </li>
                        <?
                        }
                        ?>
                    </ul>
                </div>     
            </div>
            
       </div>    
    </div>
    


    <script type="text/javascript" src="public/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="public/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/javascript/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="public/javascript/swiper.js"></script>
    <script type="text/javascript" src="public/javascript/main.js"></script>
    <script type="text/javascript" src="public/javascript/init.js"></script>


</body>

</html>