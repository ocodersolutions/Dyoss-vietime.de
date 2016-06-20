<?php
/* 
 * Project: oCoder Framework
 * File: /models/categories.php
 * Purpose: model for the categories controller.
 * Author: Trung Hoang
 */

class CategoryModel extends BaseModel
{
    //data passed to the category index view
    public function index()
    {   
    	// get all categories
    	$categories = $this->find_all($table = 'categories', $orderby = 'id DESC', $where = '', $cols = '*', $limit = '');

        $this->viewModel->set("pageTitle","Category Manager");
        $this->viewModel->set("categories",$categories);

        return $this->viewModel;
    }

    //create model
    public function create($data)
    {   
        //create new item when have data
    	if(!empty($data)){
            //return id of item after insert to db
    		return $this->save($table = 'categories', $data = $data, $where = '');
    	}

        //param var for view
        $this->viewModel->set("pageTitle","Create Category");
       
        return $this->viewModel;
    }

    //update model
    public function edit($id, $data)
    {
        //update item when have data
        if(!empty($data)){
            //return bool
            return $this->save($table = 'categories', $data = $data, $where = 'id='.$id);
        }
        
        //get item detail by id
        
        $categories = $this->find_all($table = 'categories', $orderby = 'id DESC', $where = 'id='.$id, $cols = '*', $limit = '');
        
        //param var for view
        $this->viewModel->set("pageTitle","Update Category");
        $this->viewModel->set("categories",$categories);
        return $this->viewModel;
    }
}

?>