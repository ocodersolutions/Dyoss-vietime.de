<?php
/* 
 * Project: oCoder Framework
 * File: /controllers/home.php
 * Purpose: controller for the home of the app.
 * Author: Trung Hoang
 */

class HomeController extends BaseController
{
    //add to the parent constructor
    public function __construct($action, $urlValues) {
        parent::__construct($action, $urlValues);
        
        //create the model object
        require("models/home.php");
        $this->model = new HomeModel();      
    }
    
    //default action
    protected function index()
    {
        header( 'Location: '. BASE_URL . 'account/login' ) ;
    }

    //admin action
    protected function admin()
    {
        $this->view->output($this->model->index()); 
    }
}

?>
