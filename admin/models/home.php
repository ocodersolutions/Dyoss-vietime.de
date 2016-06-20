<?php
/* 
 * Project: oCoder Framework
 * File: /models/home.php
 * Purpose: model for the home controller.
 * Author: Trung Hoang
 */

class HomeModel extends BaseModel
{
    //data passed to the home index view
    public function index()
    {   
        $this->viewModel->set("pageTitle","oCoder Framework");
        return $this->viewModel;
    }
}

?>
