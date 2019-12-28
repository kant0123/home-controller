<?php
class Debug{

    public static function log($string ,$isDisplay) {
        if($isDisplay){
            echo $string;
        }
    }

}
?>