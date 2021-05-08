<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    function get() {
        $query = $this->db->get_where('orders', array('status' => 1));
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function insertOrder($data) {
        $this->db->insert('orders', $data);
        return true;
    }

    function get_by_id($id) {
        $query = $this->db->get_where('orders', array('order_id' => $id));
        if ($query->num_rows() > 0) {
            return $query->first_row();
        }
        return false;
    }

    function deleteOrder($id) {
        $this->db->where('order_id',$id);
        return $this->db->delete('orders');
    }

    function update($id) {
        $query = $this->db->get_where('orders', array('order_id' => $id));
        if($query->num_rows() > 0)
        {
            $this->db->where('order_id', $id);
            $this->db->update('orders', array('status' => 1));
            return true;
        }
        return false;
    }

}