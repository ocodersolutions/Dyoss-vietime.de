<?php
/* 
 * Project: oCoder Framework
 * File: /models/user.php
 * Purpose: model for the account controller.
 * Author: Trung Hoang
 */

class AccountModel extends BaseModel
{
    //login model
    public function login($data){
    	//processing when client click login form
    	if(!empty($data)){
    		foreach ($data as $col => $value)
				$data[$col] = $this->escape($value);
    		$where = 'username='.$data['username'].' AND password='.$data['password'];
    		$user = $this->find($table='users', $orderby = 'id DESC', $where, $cols = '*', $limit = '1');
    		return $user;
    	}

    	//set var for login page
        $this->viewModel->set("pageTitle","Login Form");
        return $this->viewModel;
    }
}

?>