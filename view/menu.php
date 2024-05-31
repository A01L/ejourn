<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>Главная</title>
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

<body class="bg_surface_color">
     <!-- preloade -->
     <div class="preload preload-container">
        <div class="preload-logo">
          <div class="spinner"></div>
        </div>
      </div>
    <!-- /preload -->
    <div class="header mb-1 is-fixed">
        <div class="tf-container">
            <div class="tf-statusbar d-flex justify-content-center align-items-center">
                <a href="/" class="left-back"> <i class="icon-left"></i> </a>
                <h3>Журнал</h3>
            </div>
        </div>
    </div>
    <div id="app-wrap" class="style1">
        <div class="wrap-filter-rs bg_white_color mt-1">
            <div class="tf-container">
                <div class="filter-rs">
                    <div class="input-field">
                        <form action="students" method="get">
                            <button style="width: auto; border: none; background: none; padding: 0px;" class="icon-search"></button>
                            <input required class="search-field value_input" placeholder="Поиск по ИИН" type="text" name="search" value="">
                            <span class="icon-clear"></span>
                            </form>
                    </div>
    
                </div>
            </div>
        </div>
        
        <div class="bg_white_color">
            <div class="tf-container">
                <div class="trading-month">
                    <h4 class="fw_5 mb-3">Разделы</h4>
                    <div class="group-trading-history mb-5">
                        <a class="tf-trading-history" href="#" id="btn-popup-up">
                            <div class="inner-left">
                                <div class="icon-box rgba_primary">
                                    <i class="icon icon-calendar"></i>
                                </div>
                                <div class="content">
                                    <h4>Проверка</h4>
                                    <p>Начать запись</p>
                                </div>
                            </div>
                        </a>

                        <a class="tf-trading-history" href="log">
                            <div class="inner-left">
                                <div class="icon-box rgba_primary">
                                    <i class="icon icon-info"></i>
                                </div>
                                <div class="content">
                                    <h4>Журнал</h4>
                                    <p>История записей</p>
                                </div>
                            </div>
                        </a>
                        
                        <a class="tf-trading-history" href="students">
                            <div class="inner-left">
                                <div class="icon-box rgba_primary">
                                    <i class="icon icon-user3"></i>
                                </div>
                                <div class="content">
                                    <h4>Студенты</h4>
                                    <p>Список студентов</p>
                                </div>
                            </div>
                        </a>

                        <a class="tf-trading-history" href="new">
                            <div class="inner-left">
                                <div class="icon-box rgba_primary">
                                    <i class="icon icon-plus"></i>
                                </div>
                                <div class="content">
                                    <h4>Новый студент</h4>
                                    <p>Добавить студентов</p>
                                </div>
                            </div>
                        </a>

                        <a class="tf-trading-history" href="classes">
                            <div class="inner-left">
                                <div class="icon-box rgba_primary">
                                    <i class="icon icon-friends"></i>
                                </div>
                                <div class="content">
                                    <h4>Классы</h4>
                                    <p>Классы и факультатеты</p>
                                </div>
                            </div>
                        </a>

                        <a class="tf-trading-history" href="?closeSession=true">
                            <div class="inner-left">
                                <div class="icon-box rgba_primary">
                                    <i class="icon icon-back"></i>
                                </div>
                                <div class="content">
                                    <h4>Выйти</h4>
                                    <p>Закрыть журнал</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tf-panel up">
        <div class="panel-box panel-up panel-filter-history">
          <div class="header mb-1 is-fixed">
              <div class="tf-container">
                  <div class="tf-statusbar d-flex justify-content-center align-items-center">
                      <a href="#" class="clear-panel"> <i class="icon-left"></i> </a>
                      <h3>Запись</h3>
                  </div>
              </div>
          </div>
          <div id="app-wrap" class="style1">
            <form action="checking" method="get">
                <div class="mt-1">
                    <div class="container">
                        <h4 class="mt-1 mb-1">Дата</h4>
                        <ul class="filter-history status">
                            <li>
                                <input type="date" name="date">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-1">
                    <div class="container">
                        <h4 class="mt-3 mb-3">Группа</h4>
                        <ul class="filter-history status">
                            <li>
                                <select name="class">
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
                                        <option value="<?=$row?>"><?=$row?></option>
                                        <?
                                    }
                                    ?>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-btn">
                    <div class="tf-container">
                        <button class="tf-btn accent large">Начать запись</button>

                    </div>
                </div>
            </form>
          </div>
          
          

          
        </div>
        
    </div>
    <center style="position: absolute;
    bottom: 5vh;
    left: 0;
    right: 0;
    margin: auto;">Designed by Ериккызы Айжан</center>


    <script type="text/javascript" src="public/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="public/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/javascript/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="public/javascript/swiper.js"></script>
    <script type="text/javascript" src="public/javascript/main.js"></script>

</body>

</html>