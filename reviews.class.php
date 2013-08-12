<?php
class Reviews{
public $link;
public $error;

    function get_news(){
        $sql    = "SELECT id, title, create_date, user, text FROM news ORDER BY id DESC";
        $query  = mysqli_query($this->link,$sql);

        if(mysqli_num_rows($query) >=1){
            for($i = 0;$i < mysqli_num_rows($query);$i++){
                $result[] = mysqli_fetch_assoc($query);
            }
            return $result;
        }
    }

 function set_news($date,$user,$news_text){
     if($news_text){
         $sql = "INSERT INTO news (create_date,user,text) VALUES ('$date','$user','$news_text')";
         mysqli_query($this->link,$sql) or die($error = mysqli_error($this->link));
         header('Location: index.php');
     }else{
         header('Location: index.php');

     }

   }

}