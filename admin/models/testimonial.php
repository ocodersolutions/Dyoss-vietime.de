<?php
/* 
 * Project: oCoder Framework
 * File: /models/testimonial.php
 * Purpose: model for the testimonial controller.
 * Author: Trung Hoang
 */

class TestimonialModel extends BaseModel
{
    //data passed to the testimonial index view
    public function index()
    {   
    	// get all testimonials
    	$testimonials = $this->find_all($table = 'testimonials', $orderby = 'id DESC', $where = '', $cols = '*', $limit = '');

        $this->viewModel->set("pageTitle","Testimonial Manager");
        $this->viewModel->set("testimonials",$testimonials);

        return $this->viewModel;
    }

    //create model
    public function create($data)
    {   
        //create new item when have data
    	if(!empty($data)){
            //return id of item after insert to db
    		return $this->save($table = 'testimonials', $data = $data, $where = '');
    	}

        //param var for view
        $this->viewModel->set("pageTitle","Create Testimonial");
        return $this->viewModel;
    }

    //update model
    public function edit($id, $data)
    {
        //update item when have data
        if(!empty($data)){
            //return bool
            return $this->save($table = 'testimonials', $data = $data, $where = 'id='.$id);
        }

        //get item detail by id
        $testimonial = $this->find($table='testimonials', $orderby = 'id DESC', $where = 'id='.$id, $cols = '*', $limit = '');
        
        //param var for view
        $this->viewModel->set("pageTitle","Update Testimonial");
        $this->viewModel->set("testimonial",$testimonial);
        return $this->viewModel;
    }
}

?>