<?php

require_once 'smarty-master\libs\Smarty.class.php';


class View {
    protected $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('props', Helper::getAppProps()); 
    }


}