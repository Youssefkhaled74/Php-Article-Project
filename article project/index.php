<?php
$mydata = "article";
$localhost = "localhost";
$user_name = "root";
$password = "";
// conect with database
$Mysql = mysqli_connect($localhost, $user_name, $password, $mydata);
// if($Mysql)
// {
//     echo "the connect is true";
// }
// 
// $_SelectAhly = "SELECT `doc` FROM `the article` WHERE 1";
// $the_select=mysqli_query($Mysql,$_SelectAhly);
// if($the_select){
//     echo "select Ahly true";
// }
// $_SelectAhly = "SELECT * FROM `the article` WHERE 1";
// $the_select=mysqli_query($Mysql,$_SelectAhly);
//  if($the_select){
//      echo "select Ahly true";
//  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./The css Bootstrab/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>The Article Project</title>
</head>

<body>
    <h1 class="TheTitel">The Article Project</h1>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="navbar-nav mr-auto list">
            <li class="nav-item">
                <div class="dropdown">
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        الرياضه
                    </a>
                    <div class="dropdown-menu">
                        <form action="" method="post">
                            <button class="dropdown-item" href="#" name="ahly"> النادي الاهلي</button>
                            <button class="dropdown-item" href="#" name="masr">منتخب مصر</button>
                            <button class="dropdown-item" href="#" name="real">نادي ريال مدريد</button>
                        </form>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        السياسه
                    </a>
                    <div class="dropdown-menu">
                        <form action="" method="post">
                            <button class="dropdown-item" href="#" name="malya">وزاره الماليه</button>
                            <button class="dropdown-item" href="#" name="3adl">وزاره العدل</button>
                            <button class="dropdown-item" href="#" name="dfa3">وزاره الدفاع</button>
                        </form>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        الاقتصاد
                    </a>
                    <div class="dropdown-menu">
                        <form action="" method="post">
                            <button class="dropdown-item" href="#" name="3omlat"> العملات الرقميه</button>
                            <button class="dropdown-item" href="#" name="estsmar">الاستثمار</button>
                            <button class="dropdown-item" href="#" name="elborsa">البورصه</button>
                        </form>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        السياحه
                    </a>
                    <div class="dropdown-menu">
                        <form action="" method="post">
                            <button class="dropdown-item" href="#" name="pry"> الاهرامات</button>
                            <button class="dropdown-item" href="#" name="elborg">برج القاهره</button>
                            <button class="dropdown-item" href="#" name="3asma">العاصمه الاداريه الجديده</button>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
        <span class="textnav" class="navbar-text">
            يمكنك اختيار نوع المقال من هنا
        </span>
        </div>
    </nav>
    <div class="phpside">
    <?php
    $_SelectAhly = "SELECT * FROM `the article` WHERE `id` = 1 ";
    $_SelectMasr = "SELECT * FROM `the article` WHERE `id` = 2 ";
    $_SelectReal = "SELECT * FROM `the article` WHERE `id` = 3 ";
    $_SelectMalya = "SELECT * FROM `the article` WHERE `id` = 4 ";
    $_SelectDefa3 = "SELECT * FROM `the article` WHERE `id` = 5 ";
    $_Select3adl = "SELECT * FROM `the article` WHERE `id` = 6 ";
    $_Select3omlat = "SELECT * FROM `the article` WHERE `id` = 7 ";
    $_SelectEstsmar = "SELECT * FROM `the article` WHERE `id` = 8 ";
    $_SelectElborsa = "SELECT * FROM `the article` WHERE `id` = 9 ";
    $_SelectPry = "SELECT * FROM `the article` WHERE `id` = 10 ";
    $_SelectBorg = "SELECT * FROM `the article` WHERE `id` = 11 ";
    $_Select3asma = "SELECT * FROM `the article` WHERE `id` = 12 ";
    $the_selectahly=mysqli_query($Mysql,$_SelectAhly);
    $the_selectMasr=mysqli_query($Mysql,$_SelectMasr);
    $the_selectReal=mysqli_query($Mysql,$_SelectReal);
    $the_selectMalya=mysqli_query($Mysql,$_SelectMalya);
    $the_selectDefa3=mysqli_query($Mysql,$_SelectDefa3);
    $the_select3adl=mysqli_query($Mysql,$_Select3adl);
    $the_select3omlat=mysqli_query($Mysql,$_Select3omlat);
    $the_selectEstsmar=mysqli_query($Mysql,$_SelectEstsmar);
    $the_selectElborsa=mysqli_query($Mysql,$_SelectElborsa);
    $the_selectPry=mysqli_query($Mysql,$_SelectPry);
    $the_selectBorg=mysqli_query($Mysql,$_SelectBorg);
    $the_selecta3asma=mysqli_query($Mysql,$_Select3asma);

        if (isset($_POST['ahly'])) {
            foreach($the_selectahly as $data){
                         echo'<div class="card">'.
                         '<div class="card-header">'.
                             "Featured".
                         '</div>'.
                         '<div class="card-body">'.
                         '<h5 class="card-title">'.$data['titel'].'</h5>'.
                             '<p class="card-text">'.$data['doc'].'</p>'.
                             '<a href="https://www.wikipedia.org/" class="btn btn-primary">'."مصدر المقال".'</a>'.
                         '</div>'.
                         '</div>';
                        };
                                    }
                                    elseif (isset($_POST['masr'])){
                                        foreach($the_selectMasr as $data){
                                            echo'<div class="card">'.
                                            '<div class="card-header">'.
                                                "Featured".
                                            '</div>'.
                                            '<div class="card-body">'.
                                            '<h5 class="card-title">'.$data['titel'].'</h5>'.
                                                '<p class="card-text">'.$data['doc'].'</p>'.
                                            '<a href="https://www.wikipedia.org/" class="btn btn-primary">'."مصدر المقال".'</a>'.
                                            '</div>'.
                                            '</div>';
                                           };              
                                    } 
                                    elseif (isset($_POST['real'])){
                                        foreach($the_selectReal as $data){
                                            echo'<div class="card">'.
                                            '<div class="card-header">'.
                                                "Featured".
                                            '</div>'.
                                            '<div class="card-body">'.
                                            '<h5 class="card-title">'.$data['titel'].'</h5>'.
                                                '<p class="card-text">'.$data['doc'].'</p>'.
                                                '<a href="https://www.wikipedia.org/" class="btn btn-primary">'."مصدر المقال".'</a>'.
                                            '</div>'.
                                            '</div>';
                                           };              
                                    }
                                    elseif (isset($_POST['malya'])){
                                        foreach($the_selectMalya as $data){
                                            echo'<div class="card">'.
                                            '<div class="card-header">'.
                                                "Featured".
                                            '</div>'.
                                            '<div class="card-body">'.
                                            '<h5 class="card-title">'.$data['titel'].'</h5>'.
                                                '<p class="card-text">'.$data['doc'].'</p>'.
                                                '<a href="https://www.wikipedia.org/" class="btn btn-primary">'."مصدر المقال".'</a>'.
                                            '</div>'.
                                            '</div>';
                                           };              
                                    }
                                    elseif (isset($_POST['3adl'])){
                                        foreach($the_select3adl as $data){
                                            echo'<div class="card">'.
                                            '<div class="card-header">'.
                                                "Featured".
                                            '</div>'.
                                            '<div class="card-body">'.
                                            '<h5 class="card-title">'.$data['titel'].'</h5>'.
                                                '<p class="card-text">'.$data['doc'].'</p>'.
                                                '<a href="https://www.wikipedia.org/" class="btn btn-primary">'."مصدر المقال".'</a>'.
                                            '</div>'.
                                            '</div>';
                                           };              
                                    }
                                    elseif (isset($_POST['dfa3'])){
                                        foreach($the_selectDefa3 as $data){
                                            echo'<div class="card">'.
                                            '<div class="card-header">'.
                                                "Featured".
                                            '</div>'.
                                            '<div class="card-body">'.
                                            '<h5 class="card-title">'.$data['titel'].'</h5>'.
                                                '<p class="card-text">'.$data['doc'].'</p>'.
                                                '<a href="https://www.wikipedia.org/" class="btn btn-primary">'."مصدر المقال".'</a>'.
                                            '</div>'.
                                            '</div>';
                                           };              
                                    }
                                    elseif (isset($_POST['3omlat'])){
                                        foreach($the_select3omlat as $data){
                                            echo'<div class="card">'.
                                            '<div class="card-header">'.
                                                "Featured".
                                            '</div>'.
                                            '<div class="card-body">'.
                                            '<h5 class="card-title">'.$data['titel'].'</h5>'.
                                                '<p class="card-text">'.$data['doc'].'</p>'.
                                                '<a href="https://www.wikipedia.org/" class="btn btn-primary">'."مصدر المقال".'</a>'.
                                            '</div>'.
                                            '</div>';
                                           };              
                                    }
                                    elseif (isset($_POST['estsmar'])){
                                        foreach($the_selectEstsmar as $data){
                                            echo'<div class="card">'.
                                            '<div class="card-header">'.
                                                "Featured".
                                            '</div>'.
                                            '<div class="card-body">'.
                                            '<h5 class="card-title">'.$data['titel'].'</h5>'.
                                                '<p class="card-text">'.$data['doc'].'</p>'.
                                                '<a href="https://www.wikipedia.org/" class="btn btn-primary">'."مصدر المقال".'</a>'.
                                            '</div>'.
                                            '</div>';
                                           };              
                                    }
                                    elseif (isset($_POST['elborsa'])){
                                        foreach($the_selectElborsa as $data){
                                            echo'<div class="card">'.
                                            '<div class="card-header">'.
                                                "Featured".
                                            '</div>'.
                                            '<div class="card-body">'.
                                            '<h5 class="card-title">'.$data['titel'].'</h5>'.
                                                '<p class="card-text">'.$data['doc'].'</p>'.
                                                '<a href="https://www.wikipedia.org/" class="btn btn-primary">'."مصدر المقال".'</a>'.
                                            '</div>'.
                                            '</div>';
                                           };              
                                    }
                                    elseif (isset($_POST['pry'])){
                                        foreach($the_selectPry as $data){
                                            echo'<div class="card">'.
                                            '<div class="card-header">'.
                                                "Featured".
                                            '</div>'.
                                            '<div class="card-body">'.
                                            '<h5 class="card-title">'.$data['titel'].'</h5>'.
                                                '<p class="card-text">'.$data['doc'].'</p>'.
                                                '<a href="https://www.wikipedia.org/" class="btn btn-primary">'."مصدر المقال".'</a>'.
                                            '</div>'.
                                            '</div>';
                                           };              
                                    }
                                    elseif (isset($_POST['elborg'])){
                                        foreach($the_selectElborsa as $data){
                                            echo'<div class="card">'.
                                            '<div class="card-header">'.
                                                "Featured".
                                            '</div>'.
                                            '<div class="card-body">'.
                                            '<h5 class="card-title">'.$data['titel'].'</h5>'.
                                                '<p class="card-text">'.$data['doc'].'</p>'.
                                                '<a href="https://www.wikipedia.org/" class="btn btn-primary">'."مصدر المقال".'</a>'.
                                            '</div>'.
                                            '</div>';
                                           };              
                                    }
                                    elseif (isset($_POST['3asma'])){
                                        foreach($the_selecta3asma as $data){
                                            echo'<div class="card">'.
                                            '<div class="card-header">'.
                                                "Featured".
                                            '</div>'.
                                            '<div class="card-body">'.
                                            '<h5 class="card-title">'.$data['titel'].'</h5>'.
                                                '<p class="card-text">'.$data['doc'].'</p>'.
                                                '<a href="https://www.wikipedia.org/" class="btn btn-primary">'."مصدر المقال".'</a>'.
                                            '</div>'.
                                            '</div>';
                                           };              
                                    }
?>
    </div>
    
    <script src="./The Js Bootstrab/popper.min.js"></script>
    <script src="./The Js Bootstrab/jquery-3.6.1.min.js"></script>
    <script src="./The Js Bootstrab/bootstrap.js"></script>
    <script src="./Javascript/main.js"></script>
</body>

</html>