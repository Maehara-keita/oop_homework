<?php


class App
{
    
    public $name;
    public $yourName;

    //コンストラクタ
    public function __construct($name,$yourName)
    {
        $this ->name =$name;
        $this ->yourName=$yourName;
    }

    //起動音メソッド
    public function pushSound(){
        echo 'ピコ〜~ン';
        echo '<br>';
    }

    //おかえりメソッド  
    public function back(){
        echo 'おかえりなさい　'.$this->yourName.'さん';
    }





}



?>