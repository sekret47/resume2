{* Smarty *}
<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="templates/css/style.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">

<div id="resume">
    {section name=rows loop=$resume}
        <p>{$resume[rows]}</p>
    {/section}
</div>

    <img src="templates/images/man.jpg" alt=""/>
    <div class="clear"></div>
    <a href="#" id="comment_link">Add Comment</a>

    <div id="comment_form">
        <form action="index.php" method="POST">
            <p>Name</p>
           <p class="span"><input type="text" name='user' id="user"/></p>
            <span class="name_error"></span>
            <p>Message</p>
           <p>
               <textarea name="news" id="news" cols="50" rows="5"></textarea>

           </p>
            <span class="text_error"></span>
            <a href="#" id="hide">Submit message</a>
            <input type="submit" id='submit' name="submit" value="submit"/>
        </form>
    </div>

    {if isset($news)}
        {foreach $news as $news_item}
            <div class="message_item">
                <p class="user">{$news_item.user}</p>
                <div class="create_date">{$news_item.create_date}</div>
                <div class="text">{$news_item.text}</div>
            </div>
        {/foreach}
    {/if}

</div>
<script type="text/javascript" src="templates/script.js"></script>
</body>
</html>
