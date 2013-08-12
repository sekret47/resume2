<?php
class Reviews{

public $link;
public $error;


   protected  function db_connect(){
        $link = mysqli_connect('localhost','root','','resume');
        return $link;
    }

    function get_news(){
        $link   = $this->db_connect();
        $sql    = "SELECT id, title, create_date, user, text FROM news ORDER BY id DESC";

        //mysqli_query ($link,"SET NAMES utf8");
        $query  = mysqli_query($link,$sql);

        if(mysqli_num_rows($query) >=1){
            for($i = 0;$i < mysqli_num_rows($query);$i++){
                $result[] = mysqli_fetch_assoc($query);
            }
            return $result;
        }
    }

     function validate($post){
        return nl2br(strip_tags($post));
     }

     function set_news($date,$user,$news_text){
         $link = $this->db_connect();
         $this->validate($user);
         $this->validate($news_text);

         if($news_text){
             $sql = "INSERT INTO news (create_date,user,text) VALUES ('$date','$user','$news_text')";
             mysqli_query($link,$sql) or die($error = mysqli_error($this->link));
             header('Location: index.php');
         }else{
             header('Location: index.php');
         }

       }

}
