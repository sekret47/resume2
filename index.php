<meta charset="utf-8">
<?php
include('reviews.class.php');
include ("libs/Smarty.class.php");
$read = file('resume.txt');
$smarty = new Smarty();

$smarty->assign('resume',$read);

$db   = new Reviews();
$link = $db->link = mysqli_connect('sevcomfo.mysql.ukraine.com.ua','sevcomfo_db','M59xjs3d','sevcomfo_db');

mysqli_query ($link,"SET NAMES utf8");
$news_array = $db->get_news();

if(isset($_POST['submit'])){
    $news_text = nl2br(strip_tags($_POST['news']));
    $user      = strip_tags($_POST['user']);
    $date      = date('H:i:s m.d.y');
    $db->set_news($date,$user,$news_text);
}

if(isset($db->error)){
    foreach($db->error as $error){
        echo $error;
    }
}

if($news_array){
    $smarty->assign('news',$news_array);
}

$smarty->display('index.tpl');
?>



