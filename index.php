<?php
require_once "ectr/main.php";

if(isset($_GET['closeSession']) && $_GET['closeSession']=='true'){
    Session::close('user');
    Router::redirect('/');
}


if(!$_SESSION['user']){
    Router::get('/', 'login.php');
    Router::get('/signup', 'signup.php');
}
else{
    Router::get('/', 'menu.php');
    Router::get('/new', 'add-student.php');
    Router::get('/students', 'students.php');
    Router::get('/buy-sell', 'buy-sell.php');
    Router::get('/classes', 'class.php');
    Router::get('/checking', 'checking.php');
    Router::get('/end', 'success.php');
    Router::get('/log', 'log.php');
}

// Activate routing 
Router::on();
?>