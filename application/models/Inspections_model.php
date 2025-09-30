<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inspections_model extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('cs_line_c');
        if ($id != null) {
            $this->db->where('id_cs', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_id($id = null)
    {
        $this->db->from('cs_line_c');
        if ($id != null) {
            $this->db->where('id_cs', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_c()
    {
        $this->db->select('*, a.u_created AS user1, a.status_1 AS status1, a.id_mesin AS mesin1, a.id_dp AS dimensi1, b.id_user AS user, c.id_status AS status, d.id_mesin AS mesin, e.id_dp AS dimensi');
        $this->db->from('cs_line_c A');
        $this->db->join('user b', 'a.u_created = b.id_user', 'left');
        $this->db->join('status c', 'a.status_1 = c.id_status', 'left');
        $this->db->join('mesin d', 'a.id_mesin = d.id_mesin', 'left');
        $this->db->join('dimensi_part e', 'a.id_dp = e.id_dp', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_c_u($id)
    {
        $this->db->select('cs_line_c.*,dimensi_part.*,user.*,lb_serial.*,mesin.*,status.*');
        $this->db->from('cs_line_c');
        $this->db->join('user', 'cs_line_c.u_created = user.id_user');
        $this->db->join('mesin', 'cs_line_c.id_mesin = mesin.id_mesin');
        $this->db->join('dimensi_part', 'cs_line_c.id_cs = dimensi_part.id_cs');
        $this->db->join('lb_serial', 'cs_line_c.id_cs = lb_serial.id_cs');
        $this->db->join('status', 'cs_line_c.oil_cek = status.id_status');
        $this->db->where('cs_line_c.u_created', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_c_l($id)
    {
        $this->db->select('cs_line_c.*,dimensi_part.*,user.*,lb_serial.*,mesin.*,status.*');
        $this->db->from('cs_line_c');
        $this->db->join('user', 'cs_line_c.u_created = user.id_user');
        $this->db->join('mesin', 'cs_line_c.id_mesin = mesin.id_mesin');
        $this->db->join('dimensi_part', 'cs_line_c.id_cs = dimensi_part.id_cs');
        $this->db->join('lb_serial', 'cs_line_c.id_cs = lb_serial.id_cs');
        $this->db->join('status', 'cs_line_c.oil_cek = status.id_status');
        $this->db->where('cs_line_c.id_cs', $id);
        $this->db->where('cs_line_c.status_1', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_c_m()
    {
        $this->db->select('cs_line_c.*,dimensi_part.*,user.*,lb_serial.*,mesin.*,status.*');
        $this->db->from('cs_line_c');
        $this->db->join('user', 'cs_line_c.u_created = user.id_user');
        $this->db->join('mesin', 'cs_line_c.id_mesin = mesin.id_mesin');
        $this->db->join('dimensi_part', 'cs_line_c.id_cs = dimensi_part.id_cs');
        $this->db->join('lb_serial', 'cs_line_c.id_cs = lb_serial.id_cs');
        $this->db->join('status', 'cs_line_c.oil_cek = status.id_status');
        // $this->db->where('cs_line_c.u_created', $id);
        $this->db->where('cs_line_c.status_1', 2);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_v_bc($id)
    {
        $this->db->select('cs_line_c.*,dimensi_part.*,user.*,lb_serial.*,mesin.*,status.*');
        $this->db->from('cs_line_c');
        $this->db->join('user', 'cs_line_c.u_created = user.id_user');
        $this->db->join('mesin', 'cs_line_c.id_mesin = mesin.id_mesin');
        $this->db->join('dimensi_part', 'cs_line_c.id_cs = dimensi_part.id_cs');
        $this->db->join('lb_serial', 'cs_line_c.id_cs = lb_serial.id_cs');
        $this->db->join('status', 'cs_line_c.oil_cek = status.id_status');
        $this->db->where('cs_line_c.id_cs', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_v_bt($id)
    {
        $this->db->select('cs_line_c.*,dimensi_part.*,user.*,mesin.*,status.*');
        $this->db->from('cs_line_c');
        $this->db->join('user', 'cs_line_c.u_created = user.id_user');
        $this->db->join('mesin', 'cs_line_c.id_mesin = mesin.id_mesin');
        $this->db->join('dimensi_part', 'cs_line_c.id_cs = dimensi_part.id_cs');
        $this->db->join('status', 'cs_line_c.oil_cek = status.id_status');
        $this->db->where('cs_line_c.id_cs', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function add_bc($post)
    {
        $params = [
            'id_dp' => $post['id_dp'],
            'id_lb' => $post['id_lb'],
            'shift' => $post['shift'],
            'id_mesin' => $post['mesin'],
            'part_model' => $post['model'],
            'part_name' => $post['part_name'],
            'part_no' => $post['part_no'],
            'resin' => $post['resin'],
            'name_core' => $post['name_core'],
            'suhu' => $post['suhu'],
            'berat_1' => $post['berat_1'],
            'mtc_core' => $post['mtc_core'],
            'mtc_kaviti' => $post['mtc_kaviti'],
            'hc_core' => $post['hc_core'],
            'v_hole' => $post['v_hole'],
            'oil_cek' => $post['oil_cek'],
            'oil_picture' => $post['image'],
            'sh_ed_cek' => $post['sh_ed_cek'],
            'vh_spek' => $post['vh_spek'],
            'vh_aktual1' => $post['vh_aktual1'],
            'vh_aktual2' => $post['vh_aktual2'],
            'vh_aktual3' => $post['vh_aktual3'],
            'vh_aktual4' => $post['vh_aktual4'],
            'p_jam_1' => $post['p_jam_1'],
            'p_jam_2' => $post['p_jam_2'],
            'ft_1' => $post['ft_1'],
            'ft_2' => $post['ft_2'],
            'ms_1' => $post['ms_1'],
            'ms_2' => $post['ms_2'],
            'ap_gm1' => $post['ap_gm1'],
            'ap_gm2' => $post['ap_gm2'],
            'ap_dc1' => $post['ap_dc1'],
            'ap_dc2' => $post['ap_dc2'],
            'ap_etc1' => $post['ap_etc1'],
            'ap_etc2' => $post['ap_etc2'],
            'status_pr' => $post['status_pr'],
            'keterangan' => $post['keterangan'],
            'u_created' => $post['id_user'],
            'dt_created' => $post['dt_created'],
            'status_1' => "1"
        ];
        $this->db->insert('cs_line_c', $params);
    }

    public function add_bt($post)
    {
        $params = [
            'id_dp' => $post['id_dp'],
            'shift' => $post['shift'],
            'id_mesin' => $post['mesin'],
            'part_model' => $post['model'],
            'part_name' => $post['part_name'],
            'part_no' => $post['part_no'],
            'resin' => $post['resin'],
            'name_core' => $post['name_core'],
            'suhu' => $post['suhu'],
            'berat_1' => $post['berat_1'],
            'berat_2' => $post['berat_2'],
            'mtc_core' => $post['mtc_core'],
            'mtc_kaviti' => $post['mtc_kaviti'],
            'hc_core' => $post['hc_core'],
            'v_hole' => $post['v_hole'],
            'oil_cek' => $post['oil_cek'],
            'oil_picture' => $post['image'],
            'sh_ed_cek' => $post['sh_ed_cek'],
            'p_jam_1' => $post['p_jam_1'],
            'p_jam_2' => $post['p_jam_2'],
            'ft_1' => $post['ft_1'],
            'ft_2' => $post['ft_2'],
            'ms_1' => $post['ms_1'],
            'ms_2' => $post['ms_2'],
            'ap_gm1' => $post['ap_gm1'],
            'ap_gm2' => $post['ap_gm2'],
            'ap_dc1' => $post['ap_dc1'],
            'ap_dc2' => $post['ap_dc2'],
            'ap_etc1' => $post['ap_etc1'],
            'ap_etc2' => $post['ap_etc2'],
            'status_pr' => $post['status_pr'],
            'keterangan' => $post['keterangan'],
            'u_created' => $post['id_user'],
            'dt_created' => $post['dt_created'],
            'status_1' => "1"
        ];
        $this->db->insert('cs_line_c', $params);
    }

    public function edit($post)
    {
        $user_reject = $post['u_updated'];
        if ($user_reject != null) {
            $params = [
                'u_updated' => $post['u_updated'],
                'dt_updated' => $post['dt_updated'],
                'status_1' => 2,
            ];
        } else if ($user_reject == null) {
            $params = [
                'u_rejected' => $post['u_rejected'],
                'kt_reject' => $post['kt_reject'],
                'dt_rejected' => $post['dt_updated'],
                'status_1' => 5
            ];
        }

        $this->db->where('id_cs', $post['id_cs']);
        $this->db->update('cs_line_c', $params);
    }

    public function approval($post)
    {
        $params = [
            'u_approved' => $post['u_approved'],
            'dt_approved' => $post['dt_approved'],
            'status_1' => 4
        ];
        $this->db->where('id_cs', $post['id_cs']);
        $this->db->update('cs_line_c', $params);
    }

    public function update_data($is)
    {
        // Insert data into the table
        $params = [
            // 'id_cs' => $is,
            'id_dp' => $is,
            'id_lb' => $is
        ];
        $this->db->insert('cs_line_c', $params);

        // Get the last inserted ID
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    // public function delete($where)
    // {
    //     $this->db->where($where);
    //     $this->db->delete('cs_line_c');
    // }
}
