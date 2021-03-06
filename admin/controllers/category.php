<?php
/* 
 * Project: oCoder Framework
 * File: /controllers/user.php
 * Purpose: controller for the user of the app.
 * Author: Trung Hoang
 */

class CategoryController extends BaseController
{
    //add to the parent constructor
    public function __construct($action, $urlValues) {
        //Check login
        if(!Helper::isLogin()){
            //save current url: after login, auto redirect client to current url
            $_SESSION['lastUrl'] = Helper::currentPageURL();
            //redirect to login page
            header( 'Location: '.BASE_URL.'account/login' ) ;
        }

        parent::__construct($action, $urlValues);
        
        //create the model object
        require("models/category.php");
        $this->model = new CategoryModel();      
    }
    
    //default action
    protected function index()
    {
        $this->view->output($this->model->index()); 
    }

    //create action
    protected function create()
    {
        //load data post from client
        if ( !empty($_POST)) {
            //save item and return id of item created
            $result = $this->model->create($_POST);
            if($result){
                $alert = array(
                    'class' => 'alert-success',
                    'message' => 'Add new category success' 
                    );
                $_SESSION['message'] = $alert;
                header( 'Location: '. BASE_URL . 'category/index' ) ;
            }
        }
        //load form create
        $this->view->output($this->model->create('')); 
    }

    //update action
    protected function update(){
        //load data update post from client
        if(!empty($_POST)){
            //get data from POST
            $id = $_POST['id'];
            $data = array(
                'id' => $_POST['id'], 
                'name' => $_POST['name'], 
                );
            //update item -> return total rows affected
            $result = $this->model->edit($id, $data);
            if($result){
                $alert = array(
                    'class' => 'alert-success',
                    'message' => 'Update category success' 
                    );
                $_SESSION['message'] = $alert;
                header( 'Location: '. BASE_URL . 'category/index' ) ;
            }
        }
        //load form update
        $this->view->output($this->model->edit($id=$this->urlValues['id'], $data=''));
    }

    //delete action
    protected function delete()
    {
        //when client delete multi item
        if(!empty($_POST)){
            $result = $this->model->delete('categories', 'id IN('.implode(',',$_POST['id']).')');
        }else{
            $result = $this->model->delete('categories', 'id='.$this->urlValues['id']);
        }

        if($result){
            $alert = array(
                'class' => 'alert-success',
                'message' => 'Delete category success' 
                );
            $_SESSION['message'] = $alert;
        }

        header( 'Location: '. BASE_URL . 'category/index' ) ;
    }
}

?>