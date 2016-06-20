<?php
/* 
 * Project: oCoder Framework
 * File: /models/error.php
 * Purpose: model for the error controller.
 * Author: Trung Hoang
 */

class ErrorModel extends BaseModel
{    
    //data passed to the bad URL error view
    public function badURL()
    {
        $this->viewModel->set("pageTitle","Error - Bad URL");
        return $this->viewModel;
    }
}

?>
