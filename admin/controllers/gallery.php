<?php
/* 
 * Project: oCoder Framework
 * File: /controllers/Gallery.php
 * Purpose: controller for the Gallery of the app.
 * Author: Trung Hoang
 */

class GalleryController extends BaseController
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
        require("models/Gallery.php");
        $this->model = new GalleryModel();      
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
                    'message' => 'Add new Gallery success' 
                    );
                $_SESSION['message'] = $alert;
                header( 'Location: '. BASE_URL . 'gallery/index' ) ;
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
                'url' => $_POST['url'], 
                'description' => $_POST['description'],  
                );
            //update item -> return total rows affected
            $result = $this->model->edit($id, $data);
            if($result){
                $alert = array(
                    'class' => 'alert-success',
                    'message' => 'Update Gallery success' 
                    );
                $_SESSION['message'] = $alert;
                header( 'Location: '. BASE_URL . 'gallery/index' ) ;
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
            $result = $this->model->delete('galleries', 'id IN('.implode(',',$_POST['id']).')');
        }else{
            $result = $this->model->delete('galleries', 'id='.$this->urlValues['id']);
        }

        if($result){
            $alert = array(
                'class' => 'alert-success',
                'message' => 'Delete Gallery success' 
                );
            $_SESSION['message'] = $alert;
        }

        header( 'Location: '. BASE_URL . 'gallery/index' ) ;
    }
}

?>