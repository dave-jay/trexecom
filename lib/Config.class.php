<?php

/**
 * Config Class
 * 
 * Class to handle config operations
 * 
 * @author Dave Jay 
 * @version 1.0
 * @package Trexecom
 * 
 */
class Config {

    /**
     * Mechanism to access variable globally
     * @var Array $_vars
     */
    public static $_vars = array();


    # constructor

    public function __construct() {
        
    }

    

    public static function Getdata() {
        return qs("SELECT * FROM config");
    }


}

?>