<?php

require_once('database.php');

/* 
 * Project: oCoder Framework
 * File: /classes/basemodel.php
 * Purpose: abstract class from which models extend.
 * Author: Trung Hoang
 */

class BaseModel extends Database {
    
    protected $viewModel;

    //create the base and utility objects available to all models on model creation
    public function __construct()
    {
        $this->viewModel = new ViewModel();
	    $this->commonViewData();
    }

    //establish viewModel data that is required for all views in this method (i.e. the main template)
    protected function commonViewData() {
        //e.g. $this->viewModel->set("mainMenu",array("Home" => "/home", "Help" => "/help"));
    }

    /**
     * Very simple select
     *
     * @param    string   What to order by
     * @param    string   Where statement
     * @param    string   Columns to select
     * @return   result   Result of query
     */
    function select($table, $orderby = 'id DESC', $where = '', $cols = '*', $limit = '') {
        
        return parent::select($table, $orderby, $where, $cols, $limit);
    
    }

    /**
     * Insert a new record, or update existing
     *
     * @param   array   Data to insert (usually $_POST)
     */
    function save($table, $data, $where) {
    
        if (!is_array($data))
            return false;
        
        if (empty($where))
            return $this->insert($table, $data);
        else {
            foreach ($data as $key => $val) {
                if (empty($data[$key]) || $data[$key] == '')
                    unset($data[$key]);
            }
            return $this->update($table, $data, $where);
        }
    
    }

    /**
     * Select from table
     *
     * @param   string   Order by
     * @param   string   Where clause
     * @param   string   Columns to select
     */
    function find_all($table, $orderby = 'id DESC', $where = '', $cols = '*', $limit = '') {
    
        $orderby = (!empty($orderby)) ? $orderby : 'id DESC';
        $where = (!empty($where)) ? $where : '';
        $cols = (!empty($cols)) ? $cols : '*';
        $limit = (!empty($limit)) ? $limit : '';
    
        $this->select($table, $orderby, $where, $cols, $limit);
        return $this->get();
    
    }

    /**
     * Select single row
     *
     * @param   string   Order by
     * @param   string   Where clause
     * @param   string   Columns to select
     */
    function find($table, $orderby = 'id DESC', $where = '', $cols = '*', $limit = '') {
    
        $orderby = (!empty($orderby)) ? $orderby : 'id DESC';
        $where = (!empty($where)) ? $where : '';
        $cols = (!empty($cols)) ? $cols : '*';
        $limit = (!empty($limit)) ? $limit : '';
    
        $this->select($table, $orderby, $where, $cols, $limit);
        return $this->get_first();
    
    }

    /**
     * Delete row or rows
     *
     * @param   string   Where clause
     */
    function delete($table, $where) {
    
        return parent::delete($table, $where);
    
    }

}

?>
