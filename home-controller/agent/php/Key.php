<?php
include 'properties\Key.php';

class Key {
    public function match($challengeKey){
        if(is_null($challengeKey)){
            return false;
        }

        if(isset($challengeKey) && $challengeKey === Key::KEY){
            return true;
        }else{
            return false;
        }
    }
}
