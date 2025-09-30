<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lable_model extends CI_Model
{

    public function get_v_bc($id = null)
    {
        $this->db->from('lb_serial');
        if ($id != null) {
            $this->db->where('id_cs', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function update_data($is)
    {
        // Insert data into the table
        $params = [
            'id_lb' => $is,
            'id_cs' => $is,
            'is_active' => $is
        ];
        $this->db->insert('lb_serial', $params);

        // Get the last inserted ID
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    public function add_bc($post)
    {
        $params = [
            'id_cs'  => $post['id_cs'],
            'lb_sn1' => $post['lb_sn1'],
            'lb_sn2' => $post['lb_sn2'],
            'lb_sn3' => $post['lb_sn3'],
            'lb_sn4' => $post['lb_sn4'],
            'lb_sn5' => $post['lb_sn5'],
            'lb_av' => $post['lb_av'],
            'lb_decor' => $post['lb_decor'],
            'is_active' => 0,
        ];
        $this->db->insert('lb_serial', $params);
    }

    public function delete($where)
    {
        $this->db->where($where);
        $this->db->delete('lb_serial');
    }
}
