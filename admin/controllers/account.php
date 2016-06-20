<?php
/* 
 * Project: oCoder Framework
 * File: /controllers/account.php
 * Purpose: controller for login, logout, info of account in the app.
 * Author: Trung Hoang
 */

class AccountController extends BaseController
{
	//add to the parent constructor
    public function __construct($action, $urlValues) {
        parent::__construct($action, $urlValues);
        
        //create the model object
        require("models/account.php");
        $this->model = new AccountModel();      
    }

    //login action
    protected function login()
    {
    	//load data post from login form
        if ( !empty($_POST)) {
        	$user = $this->model->login($_POST);
        	//if user login success: save user object to session and redirect to lastUrl (if have) or redect to user manager
    		if($user){
    			$_SESSION['userLogin'] = $user;
    			if(isset($_SESSION['lastUrl'])){
    				header('Location: '.$_SESSION['lastUrl']) ;
    			}else{
    				header('Location: '.BASE_URL.'user/index') ;
    			}
    		}
        }
        $this->view->output($this->model->login(''));
    }

    //logout action
    protected function logout()
    {
    	unset($_SESSION['userLogin']);
    	header('Location: '.BASE_URL.'account/login') ;
    }
}

?>