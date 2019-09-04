<?php


require_once('app.php');


class Twitter extends App
{
    //オーバーライド（親クラスの持つメソッドの上書き）
    public function  pushSound(){  
        echo 'twitter です🦅';
        echo '<br>';
    }

        // private function pic(){
        //     $this->pic =$pic
        //     $pic = <img src="Twitter_pic.jpeg" ,alt="アイコン">;

        // }

 
}


?>