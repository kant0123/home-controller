<?php
include dirname(__FILE__) .'\properties\HttpGet.php';
include dirname(__FILE__) .'\properties\Password.php';
include dirname(__FILE__) .'\utility\Debug.php';
include dirname(__FILE__) .'\devices\Intercom.php';

class MasterDevice{
    const $intercom = 8;
    const $isDebug = true;
    const $challengeKey = (isset($_GET[HttpGet::KEY])) ? $_GET[HttpGet::KEY] : null;

    function __construct() {
        
    }

// ログ表示フラグ

if(Password::KEY === htmlspecialchars($challengeKey)){

}else{
    Debug::log("失敗",$isDebug);
    exit;
}

private function action(){

}}
?>
