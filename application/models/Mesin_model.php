<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mesin_model extends CI_Model
{
    public function get_bc($id = null)
    {
        $this->db->from('mesin');
        $this->db->where('grup', 2);
        $query = $this->db->get();
        return $query;
    }
}
