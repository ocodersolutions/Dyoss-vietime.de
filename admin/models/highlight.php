<?php
/* 
 * Project: oCoder Framework
 * File: /models/Highlight.php
 * Purpose: model for the Highlight controller.
 * Author: Trung Hoang
 */

class HighlightModel extends BaseModel
{
    //data passed to the Highlight index view
    public function index()
    {   
    	// get all Highlights
    	$highlights = $this->find_all($table = 'highlights', $orderby = 'id DESC', $where = '', $cols = '*', $limit = '');
        //get all categories
        
        $this->viewModel->set("pageTitle","Highlight Manager");
        $this->viewModel->set("highlights",$highlights);
       
        return $this->viewModel;
    }

    //create model
    public function create($data)
    {   
        //create new item when have data
    	if(!empty($data)){
            //return id of item after insert to db
    		return $this->save($table = 'highlights', $data = $data, $where = '');
    	}

        $categories = $this->find_all($table = 'categories', $orderby = 'id DESC', $where = '', $cols = '*', $limit = '');

        //param var for view
        $this->viewModel->set("pageTitle","Create Highlight");
       
        return $this->viewModel;
    }

    //update model
    public function edit($id, $data)
    {
        //update item when have data
        if(!empty($data)){
            //return bool
            return $this->save($table = 'highlights', $data = $data, $where = 'id='.$id);
        }

        //get item detail by id
        $highlights = $this->find($table='highlights', $orderby = 'id DESC', $where = 'id='.$id, $cols = '*', $limit = '');
        
        
        //param var for view
        $this->viewModel->set("pageTitle","Update highlight");
        $this->viewModel->set("highlight",$highlights);
       
        return $this->viewModel;
    }
}

?>