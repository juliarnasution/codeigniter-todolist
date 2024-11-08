<?php
class User_model extends CI_Model {
    function user_login($username, $password){
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        if($query->num_rows()>0){
            $user =  $query->row();
            if(password_verify($password, $user->password)){
                return $user;
            }
        }
        return false;
    }

    function user_register($request){
        return $this->db->insert('users', $request);
    }
}