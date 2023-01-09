<?php

class UserModel extends CI_Model
{
    public function __construct()
    {   
        parent::__construct();
    }

    // no need to write sql 
    public function verifyLogin($email, $password)
    {
        $arr = $this->db->where('email', $email)
            ->where('password', sha1($password))
            ->get('users')
            ->result_array();
        
        if(count($arr) > 0) {
            return $arr[0];
        }

        return false;
    }
}