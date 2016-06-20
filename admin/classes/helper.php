<?php
/* 
 * Project: oCoder Framework
 * File: /classes/helper.php
 * Purpose: class which build a common function
 * Author: Trung Hoang
 */

class Helper{

	//get current page url
	function currentPageURL() {
	    $curpageURL = 'http';
	    if ($_SERVER["HTTPS"] == "on") {
	    	$curpageURL.= "s";
	    }
	    $curpageURL.= "://";
	    if ($_SERVER["SERVER_PORT"] != "80") {
	    	$curpageURL.= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	    } else {
	    	$curpageURL.= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	    }
	    return $curpageURL;
    }

    //check login
    static function isLogin(){
    	if(isset($_SESSION['userLogin'])){
    		return true;
    	}else{
    		return false;
    	}
    }

    //get username login
    static function getUsernameLogin(){
    	if (isset($_SESSION['userLogin'])) {
    		return $_SESSION['userLogin']->username;
    	}else{
    		return null;
    	}
    }

}