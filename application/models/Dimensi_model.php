<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dimensi_model extends CI_Model
{

    public function get_v_bc($id = null)
    {
        $this->db->from('dimensi_part');
        if ($id != null) {
            $this->db->where('id_cs', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add_bc($post)
    {
        $params = [
            'id_cs' => $post['id_cs'],
            'd_spek1' => $post['d_spek1'],
            'd_spek2' => $post['d_spek2'],
            'd_aktual1' => $post['d_aktual_1'],
            'd_aktual2' => $post['d_aktual_2'],
            'd_aktual3' => $post['d_aktual_3'],
            'd_aktual4' => $post['d_aktual_4'],
            'd_aktual5' => $post['d_aktual_5'],
            'd_sp_bending1' => $post['d_sp_bending1'],
            'd_sp_bending2' => $post['d_sp_bending2'],
            'd_spb_aktual1' => $post['d_sp_aktual_1'],
            'd_spb_aktual2' => $post['d_sp_aktual_2'],
            'd_spb_aktual3' => $post['d_sp_aktual_3'],
            'd_spb_aktual4' => $post['d_sp_aktual_4'],
            'hs_spek'    => $post['hs_spek'],
            'hs_aktual1' => $post['hs_aktual_1'],
            'hs_aktual2' => $post['hs_aktual_2'],
            'hs_aktual3' => $post['hs_aktual_3'],
            'hs_aktual4' => $post['hs_aktual_4'],
            'is_active'  => 0,
        ];
        $this->db->insert('dimensi_part', $params);
    }

    public function add_bt($post)
    {
        $params = [
            'id_cs' => $post['id_cs'],
            'd_spek1' => $post['d_spek1'],
            'd_aktual1' => $post['d_aktual_1'],
            'd_aktual2' => $post['d_aktual_2'],
            'd_sp_bending1' => $post['d_sp_bending1'],
            'd_sp_bending2' => $post['d_sp_bending2'],
            'd_spb_aktual1' => $post['d_sp_aktual_1'],
            'd_spb_aktual2' => $post['d_sp_aktual_2'],
            'd_spb_aktual3' => $post['d_sp_aktual_3'],
            'd_spb_aktual4' => $post['d_sp_aktual_4'],
            'is_active'  => 0
        ];
        $this->db->insert('dimensi_part', $params);
    }

    public function update_data($is)
    {
        // Insert data into the table
        $params = [
            // 'id_dp' => $is,
            'id_cs' => $is,
            'is_active' => $is
        ];
        $this->db->insert('dimensi_part', $params);

        // Get the last inserted ID
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }


    // public function delete($where)
    // {
    //     $this->db->where($where);
    //     $this->db->delete('dimensi_part');
    // }
}
