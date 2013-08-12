<?php

//DB CONNECT
mysql_connect('localhost','root','password');
mysql_select_db('some_db');

$sql    = 'SELECT * FROM my_table';
$result = mysql_query($sql);
$row    = mysql_fetch_assoc($result);

?>
?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>

<div id="header">
    <div id="menu">
        <ul>
            <li><a href="#">Menu item</a></li>
            <li><a href="#">Menu item</a></li>
            <li><a href="#">Menu item</a></li>
            <li><a href="#">Menu item</a></li>
        </ul>
    </div>
</div>
<div id="content">

        {foreach $row as $item}
            <div class='news_item'>
                <h2>{$item.news_title}</h2>
                <p class="create_date">{$item.create_date}</p>
                <p class="news_body">{$item.news_tbody}</p>
            </div>
        {/foreach}

</div>
<div id="footer"></div>

</body>
</html>