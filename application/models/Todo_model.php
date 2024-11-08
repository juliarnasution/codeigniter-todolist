<?php
class Todo_model extends CI_Model {
    function get_all($user_id){
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('todos');
        return $query->result_array();
    }
    function add_todo($data){
        return $this->db->insert('todos', $data);
    }
    function update_todo($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('todos', $data);
    }
    function delete_todo($id){
        $this->db->where('id', $id);
        return $this->db->delete('todos');
    }
    function get_todo($id) {
        $this->db->where('id', $id);
        return $this->db->get('todos')->row();
    }
}