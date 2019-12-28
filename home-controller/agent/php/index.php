<?php
include dirname(__FILE__) .'\properties\HttpGet.php';
include dirname(__FILE__) .'\properties\Password.php';
include dirname(__FILE__) .'\properties\Action.php';
include dirname(__FILE__) .'\utility\Debug.php';
include dirname(__FILE__) .'\Intercom.php';

// ログ表示フラグ
$isDebug = true;
$intercom;
$challengeKey = (isset($_GET[HttpGet::KEY])) ? $_GET[HttpGet::KEY] : null;

if(Password::KEY === htmlspecialchars($challengeKey)){
    $oparation = (isset($_GET[HttpGet::OPERATION])) ? $_GET[HttpGet::OPERATION] : null;
    $intercom = new Intercom($oparation);
    $intercom->actionBranch();
}else{
    Debug::log("失敗",$isDebug);
    exit;
}

?>
