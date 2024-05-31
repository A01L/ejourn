<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>Журнал</title>
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
    <div class="header">
        <div class="tf-container">
            <div class="tf-statusbar d-flex justify-content-center align-items-center">
                <a href="#" class="back-btn"> <i class="icon-left"></i> </a>
                <h3>Журнал</h3>
            </div>
        </div>
    </div>
    <div class="content-card mt-3">
        <div class="tf-container">
            <div class="tf-card-list bg_surface_color large out-line">
                <div class="info">
                <form action="log" method="get">
                    <h4 class="fw_6">Дата: <input type="date" name="date" value="<?=(isset($_GET['date'])?$_GET['date']:'')?>"></h4>
                    <p>Группа: 
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
                                <option value="<?=$row?>" <?=(isset($_GET['class']) && $_GET['class']==$row?'selected':'')?>><?=$row?></option>
                                <?
                            }
                        ?>
                    </select>    
                    </p>
                    <button class="mt-3 tf-btn accent large" style="border:none;">Смотреть запись</button>
                </form>
                </div>
            </div>

                <p class="auth-line">Список студентов</p>
                <ul class="box-card">
                    <?php
                        $all = DBC::show('students');
                        $date = $_GET['date'];
                        $class = $_GET['class'];
                        $log = mysqli_query($GLOBALS['connect'], "SELECT * FROM `log` WHERE `date`='$date' AND `class`='$class'");
                        $log = mysqli_fetch_assoc($log);
                        $logi = $log;
                        $log = json_decode($log['students'], true);

                        if($logi['id']){
                            foreach($all as $row){
                                if($row['class']==$_GET['class']){
                                    ?>
                                        <li class="tf-card-list medium bt-line">
                                            <div class="info">
                                                <h4 class="fw_6"><?=$row['fio']?></h4>
                                                <p><?=$row['iin']?></p>
                                            </div>
                                            <?php
                                            if($log[$row['iin']] == 1){
                                                echo 'Присутствовал (-а) ';
                                            }
                                            else{
                                                echo 'Отсутствовал (-а)';
                                            }
                                            ?>
                                            <!-- Присутсвовал -->
                                        </li>
                                    <?
                                }
                            }
                        }
                        else{
                          ?>
                            <li class="tf-card-list medium bt-line">
                                <div class="info">
                                    <h4 class="fw_6">Нету записей</h4>
                                    <p><?="Дата: ".$date." | Группа:".$class?></p>
                                </div>    
                             </li>
                          <?  
                        }
                    
                    ?>
                </ul>
                <div class="tf-spacing-20"></div>
        </div>
    </div>
    
    
  


    <script type="text/javascript" src="public/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="public/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/javascript/main.js"></script>

</body>

</html>