<?php
/* 
 * Project: oCoder Framework
 * File: /models/testimonial.php
 * Purpose: model for the testimonial controller.
 * Author: Trung Hoang
 */

class MenuModel extends BaseModel
{
    //data passed to the menu index view
    public function index()
    {   
    	// get all menus
    	$menus = $this->find_all($table = 'menus', $orderby = 'id DESC', $where = '', $cols = '*', $limit = '');
        //get all categories
        
        $this->viewModel->set("pageTitle","Menu Manager");
        $this->viewModel->set("menus",$menus);
       
        return $this->viewModel;
    }

    //create model
    public function create($data)
    {   
        //create new item when have data
    	if(!empty($data)){
            //return id of item after insert to db
    		return $this->save($table = 'menus', $data = $data, $where = '');
    	}

        $categories = $this->find_all($table = 'categories', $orderby = 'id DESC', $where = '', $cols = '*', $limit = '');

        //param var for view
        $this->viewModel->set("pageTitle","Create Menu");
        $this->viewModel->set("categories",$categories);
        return $this->viewModel;
    }

    //update model
    public function edit($id, $data)
    {
        //update item when have data
        if(!empty($data)){
            //return bool
            return $this->save($table = 'menus', $data = $data, $where = 'id='.$id);
        }

        //get item detail by id
        $menu = $this->find($table='menus', $orderby = 'id DESC', $where = 'id='.$id, $cols = '*', $limit = '');
        $categories = $this->find_all($table = 'categories', $orderby = 'id DESC', $where = '', $cols = '*', $limit = '');
        
        //param var for view
        $this->viewModel->set("pageTitle","Update Menu");
        $this->viewModel->set("menu",$menu);
        $this->viewModel->set("categories",$categories);
        return $this->viewModel;
    }
}

?>