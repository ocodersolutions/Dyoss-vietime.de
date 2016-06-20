<?php
/* 
 * Project: oCoder Framework
 * File: /models/user.php
 * Purpose: model for the user controller.
 * Author: Trung Hoang
 */

class UserModel extends BaseModel
{
    //data passed to the user index view
    public function index()
    {   
    	// get all users
    	$users = $this->find_all($table = 'users', $orderby = 'id DESC', $where = '', $cols = '*', $limit = '');

        $this->viewModel->set("pageTitle","User Manager");
        $this->viewModel->set("users",$users);

        return $this->viewModel;
    }

    //create model
    public function create($data)
    {   
        //create new item when have data
    	if(!empty($data)){
            //return id of item after insert to db
    		return $this->save($table = 'users', $data = $data, $where = '');
    	}

        //param var for view
        $this->viewModel->set("pageTitle","Create User");
        return $this->viewModel;
    }

    //update model
    public function edit($id, $data)
    {
        //update item when have data
        if(!empty($data)){
            //return bool
            return $this->save($table = 'users', $data = $data, $where = 'id='.$id);
        }

        //get item detail by id
        $user = $this->find($table='users', $orderby = 'id DESC', $where = 'id='.$id, $cols = '*', $limit = '');
        
        //param var for view
        $this->viewModel->set("pageTitle","Update User");
        $this->viewModel->set("user",$user);
        return $this->viewModel;
    }
}

?>