<?php

//require_once getcwd()."/../libraries/constant.php";
require_once SITE_PATH.'/Controller/singleton.php';


abstract class model {

    protected $db = "";

    function __construct() {
        $this->db = DBConnection::Connect();
    }

}


