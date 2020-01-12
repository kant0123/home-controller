<?php
include dirname(__FILE__) .'.\..\properties\Action.php';

class Intercom {
    private $requestAction;

    function __construct($requestAction)	{
		if(in_array($requestAction, Action::LIST)){
            $this->requestAction = $requestAction;
        }else{
            $this->requestAction = null;
            exit;
        }
	}

    public function actionBranch(){
        echo $this->requestAction;
    }
}
