<?php
/* 
 * Project: oCoder Framework
 * File: /models/gallery.php
 * Purpose: model for the gallery controller.
 * Author: Trung Hoang
 */

class GalleryModel extends BaseModel
{
    //data passed to the gallery index view
    public function index()
    {   
    	// get all galleries
    	$galleries = $this->find_all($table = 'galleries', $orderby = 'id DESC', $where = '', $cols = '*', $limit = '');

        $this->viewModel->set("pageTitle","Gallery Manager");
        $this->viewModel->set("galleries",$galleries);

        return $this->viewModel;
    }

    //create model
    public function create($data)
    {   
        //create new item when have data
    	if(!empty($data)){
            //return id of item after insert to db
    		return $this->save($table = 'galleries', $data = $data, $where = '');
    	}

        //param var for view
        $this->viewModel->set("pageTitle","Create Galleries");
        return $this->viewModel;
    }

    //update model
    public function edit($id, $data)
    {
        //update item when have data
        if(!empty($data)){
            //return bool
            return $this->save($table = 'galleries', $data = $data, $where = 'id='.$id);
        }

        //get item detail by id
        $galleries = $this->find($table='galleries', $orderby = 'id DESC', $where = 'id='.$id, $cols = '*', $limit = '');
        
        //param var for view
        $this->viewModel->set("pageTitle","Update Testimonial");
        $this->viewModel->set("galleries",$galleries);
        return $this->viewModel;
    }
}

?>