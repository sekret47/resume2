<?php
include('reviews.class.php');
include ("libs/Smarty.class.php");

//Create Smarty Object
$smarty = new Smarty();

$read = file('resume.txt');
$smarty->assign('resume',$read);

$db  = new Reviews();
$news_array = $db->get_news();

if($news_array){
    $smarty->assign('news',$news_array);
}

if(isset($_POST['submit'])){
    $news_text = $db->validate($_POST['news']);
    $user      = $db->validate($_POST['user']);
    $date      = date('H:i:s m.d.y');

    $db->set_news($date,$user,$news_text);
}

$smarty->display('index.tpl');
?>



