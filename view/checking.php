<?php
if(isset($_POST['class']) && isset($_POST['date'])){
    $data['date']  = $_POST['date'];
    $data['class'] = $_POST['class'];
    $student = [];
    $ok =0;
    $no =0;

    $all = DBC::show('students');
    foreach($all as $row){
        if($row['class']==$_POST['class']){
            if($_POST[$row['iin']] == 'on'){
                $student[$row['iin']]=1;
                $ok++;
            }
            else{
                $student[$row['iin']]=0;
                $no++;
            }
        }
    }

    $data['students'] = json_encode($student);
    DBC::insert('log', $data);
    Router::redirect('/end?ok='.$ok.'&no='.$no.'&date='.$_POST['date']);
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>Проверка</title>
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
                <h3><?=$_GET['class']?></h3>
            </div>
        </div>
    </div>
    <div class="content-card mt-3">
        <div class="tf-container">
            <div class="tf-card-list bg_surface_color large out-line">
                <div class="info">
                    <h4 class="fw_6">Дата: <?=$_GET['date']?></h4>
                    <p>Группа: <?=$_GET['class']?></p>
                </div>
            </div>

            <form action="checking" method="post">
                <input type="text" readonly hidden value="<?=$_GET['date']?>" name="date">
                <input type="text" readonly hidden value="<?=$_GET['class']?>" name="class">

                <p class="auth-line">Выберайте присутствующих</p>
                <ul class="box-card">
                    <?php
                        $all = DBC::show('students');
                        foreach($all as $row){
                            if($row['class']==$_GET['class']){
                                ?>
                                    <li class="tf-card-list medium bt-line">
                                        <div class="info">
                                            <h4 class="fw_6"><?=$row['fio']?></h4>
                                            <p><?=$row['iin']?></p>
                                        </div>
                                        <input type="checkbox" name="<?=$row['iin']?>" class="tf-checkbox circle-check">
                                    </li>
                                <?
                            }
                        }
                    ?>
                </ul>
                <div class="tf-spacing-20"></div>
                <button class="tf-btn accent large" style="border:none;">Сохранить запись<i class="icon-plus fw_7"></i> </button>
            </form>
        </div>
    </div>
    
    
  


    <script type="text/javascript" src="public/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="public/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/javascript/main.js"></script>

</body>

</html>