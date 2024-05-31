<?php
if(isset($_POST['login']) && isset($_POST['password'])){
    $user = DBC::select('users', 'login', $_POST['login']);
    if($user['password']==md5($_POST['password'])){
        Session::new('user', $user['id']);
    }
    // echo $user['password'];
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
    <title>Авторизация</title>
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
    <div class="mt-7 login-section">
        <div class="tf-container">
        <div class="auth-line">E-Journal</div>
            <form class="tf-form" method="post" action="/">
                    <h1>Авторизация</h1>
                    <div class="group-input">
                        <label>Логин</label>
                        <input type="text" name="login" placeholder="Example@gmail">
                    </div>
                    <div class="group-input auth-pass-input last">
                        <label>Пароль</label>
                        <input type="password" name="password" class="password-input" placeholder="Password">
                        <a class="icon-eye password-addon" id="password-addon"></a>
                    </div>
                <button class="tf-btn accent large">Войти</button>

            </form>
        </div>
    </div>
    <center style="position: absolute;
    bottom: 5vh;
    left: 0;
    right: 0;
    margin: auto;">Designed by Ериккызы Айжан</center>
    
  



    <script type="text/javascript" src="public/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="public/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/javascript/password-addon.js"></script>
    <script type="text/javascript" src="public/javascript/main.js"></script>
    <script type="text/javascript" src="public/javascript/init.js"></script>


</body>

</html>