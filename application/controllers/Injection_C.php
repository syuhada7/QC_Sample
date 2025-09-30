<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Injection_C extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['Inspections_model', 'Mesin_model', 'Dimensi_model', 'Lable_model', 'User_model']);
    }

    public function index()
    {
        $data['row'] = $this->Inspections_model->get_c();
        $this->template->load('templates/template', 'cs/injection_c', $data);
    }

    public function index_u($id)
    {
        $id = $this->fungsi->user_login()->id_user;
        $data['row'] = $this->Inspections_model->get_c_u($id);
        $this->template->load('templates/template', 'csu/injection_c', $data);
    }

    public function index_l()
    {
        $id = $this->db->get('cs_line_c')->row();
        $data['row'] = $this->Inspections_model->get_c_l($id);
        $this->template->load('templates/template', 'csl/injection_c', $data);
    }

    public function index_m()
    {
        $data['row'] = $this->Inspections_model->get_c_m();
        $this->template->load('templates/template', 'csm/injection_c', $data);
    }

    public function add_bc()
    {
        $cs = new stdClass();
        $csc = new stdClass();
        $lb = new stdClass();
        $lb->id_lb = null;
        $cs->id_cs = null;
        $cs->id_dp = null;
        $cs->d_spek1 = null;
        $cs->d_spek2 = null;
        $cs->d_aktual_1 = null;
        $cs->d_aktual_2 = null;
        $cs->d_aktual_3 = null;
        $cs->d_aktual_4 = null;
        $cs->d_aktual_5 = null;
        $cs->d_sp_bending1 = null;
        $cs->d_sp_bending2 = null;
        $cs->d_sp_aktual_1 = null;
        $cs->d_sp_aktual_2 = null;
        $cs->d_sp_aktual_3 = null;
        $cs->d_sp_aktual_4 = null;
        $cs->hs_spek = null;
        $cs->hs_aktual_1 = null;
        $cs->hs_aktual_2 = null;
        $cs->hs_aktual_3 = null;
        $cs->hs_aktual_4 = null;
        $lb->lb_sn1 = null;
        $lb->lb_sn2 = null;
        $lb->lb_sn3 = null;
        $lb->lb_sn4 = null;
        $lb->lb_sn5 = null;
        $lb->lb_av = null;
        $lb->lb_decor = null;
        $csc->shfit = null;
        $csc->id_mesin = null;
        $csc->part_model = null;
        $csc->part_name = null;
        $csc->part_no = null;
        $csc->resin = null;
        $csc->name_core = null;
        $csc->suhu = null;
        $csc->berat_1 = null;
        $csc->berat_2 = null;
        $csc->mtc_core = null;
        $csc->mtc_kaviti = null;
        $csc->hc_core = null;
        $csc->v_hole = null;
        $csc->oil_cek = null;
        $csc->sh_ed_cek = null;
        $csc->vh_spek = null;
        $csc->vh_aktual1 = null;
        $csc->vh_aktual2 = null;
        $csc->vh_aktual3 = null;
        $csc->vh_aktual4 = null;
        $csc->p_jam_1 = null;
        $csc->p_jam_2 = null;
        $csc->ft_1 = null;
        $csc->ft_2 = null;
        $csc->ms_1 = null;
        $csc->ms_2 = null;
        $csc->ap_gm1 = null;
        $csc->ap_gm2 = null;
        $csc->ap_dc1 = null;
        $csc->ap_dc2 = null;
        $csc->ap_etc1 = null;
        $csc->ap_etc2 = null;
        $csc->status_pr = null;
        $csc->keterangan = null;

        $mesin = $this->Mesin_model->get_bc()->result();
        $idcs = $this->Inspections_model->get_id()->num_rows();
        $id_exists = $this->Inspections_model->get_id()->num_rows();
        if ($idcs . $id_exists == 0) {
            $idcs++;
        } else if ($idcs == $id_exists) {
            $idcs++;
        }
        // $this->Dimensi_model->update_data($is);
        // $this->Lable_model->update_data($is);
        // $this->Inspections_model->update_data($is);
        $data = array(
            'page'  => 'add',
            'mesin'  => $mesin,
            'dimensi'  => $idcs,
            'c_sheet'  => $idcs,
            'lb_c'  => $idcs,
            'row'   => $csc,
            'row2'   => $cs,
            'row3'   => $lb
        );
        // print_r($idcs);
        // var_dump($idcs);
        $this->template->load('templates/template', 'cs/form_bc', $data);
    }

    public function add_bc_u()
    {
        $cs = new stdClass();
        $csc = new stdClass();
        $lb = new stdClass();
        $lb->id_lb = null;
        $cs->id_cs = null;
        $cs->id_dp = null;
        $cs->d_spek1 = null;
        $cs->d_spek2 = null;
        $cs->d_aktual_1 = null;
        $cs->d_aktual_2 = null;
        $cs->d_aktual_3 = null;
        $cs->d_aktual_4 = null;
        $cs->d_aktual_5 = null;
        $cs->d_sp_bending1 = null;
        $cs->d_sp_bending2 = null;
        $cs->d_sp_aktual_1 = null;
        $cs->d_sp_aktual_2 = null;
        $cs->d_sp_aktual_3 = null;
        $cs->d_sp_aktual_4 = null;
        $cs->hs_spek = null;
        $cs->hs_aktual_1 = null;
        $cs->hs_aktual_2 = null;
        $cs->hs_aktual_3 = null;
        $cs->hs_aktual_4 = null;
        $lb->lb_sn1 = null;
        $lb->lb_sn2 = null;
        $lb->lb_sn3 = null;
        $lb->lb_sn4 = null;
        $lb->lb_sn5 = null;
        $lb->lb_av = null;
        $lb->lb_decor = null;
        $csc->shfit = null;
        $csc->id_mesin = null;
        $csc->part_model = null;
        $csc->part_name = null;
        $csc->part_no = null;
        $csc->resin = null;
        $csc->name_core = null;
        $csc->suhu = null;
        $csc->berat_1 = null;
        $csc->berat_2 = null;
        $csc->mtc_core = null;
        $csc->mtc_kaviti = null;
        $csc->hc_core = null;
        $csc->v_hole = null;
        $csc->oil_cek = null;
        $csc->sh_ed_cek = null;
        $csc->vh_spek = null;
        $csc->vh_aktual1 = null;
        $csc->vh_aktual2 = null;
        $csc->vh_aktual3 = null;
        $csc->vh_aktual4 = null;
        $csc->p_jam_1 = null;
        $csc->p_jam_2 = null;
        $csc->ft_1 = null;
        $csc->ft_2 = null;
        $csc->ms_1 = null;
        $csc->ms_2 = null;
        $csc->ap_gm1 = null;
        $csc->ap_gm2 = null;
        $csc->ap_dc1 = null;
        $csc->ap_dc2 = null;
        $csc->ap_etc1 = null;
        $csc->ap_etc2 = null;
        $csc->status_pr = null;
        $csc->keterangan = null;

        $mesin = $this->Mesin_model->get_bc()->result();
        $idcs = $this->Inspections_model->get_id()->num_rows();
        $id_exists = $this->Inspections_model->get_id()->num_rows();
        if ($idcs . $id_exists == 0) {
            $idcs++;
        } else if ($idcs == $id_exists) {
            $idcs++;
        }
        // $this->Dimensi_model->update_data($is);
        // $this->Lable_model->update_data($is);
        // $this->Inspections_model->update_data($is);
        $data = array(
            'page'  => 'add',
            'mesin'  => $mesin,
            'dimensi'  => $idcs,
            'c_sheet'  => $idcs,
            'lb_c'  => $idcs,
            'row'   => $csc,
            'row2'   => $cs,
            'row3'   => $lb
        );
        // print_r($idcs);
        // var_dump($idcs);
        $this->template->load('templates/template', 'csu/form_bc', $data);
    }

    public function add_bt()
    {
        $cs = new stdClass();
        $csc = new stdClass();
        $cs->id_cs = null;
        $cs->id_dp = null;
        $cs->d_spek1 = null;
        $cs->d_aktual_1 = null;
        $cs->d_aktual_2 = null;
        $cs->d_sp_bending1 = null;
        $cs->d_sp_bending2 = null;
        $cs->d_sp_aktual_1 = null;
        $cs->d_sp_aktual_2 = null;
        $cs->d_sp_aktual_3 = null;
        $cs->d_sp_aktual_4 = null;
        $csc->shfit = null;
        $csc->id_mesin = null;
        $csc->part_model = null;
        $csc->part_name = null;
        $csc->part_no = null;
        $csc->resin = null;
        $csc->name_core = null;
        $csc->suhu = null;
        $csc->berat_1 = null;
        $csc->berat_2 = null;
        $csc->mtc_core = null;
        $csc->mtc_kaviti = null;
        $csc->hc_core = null;
        $csc->v_hole = null;
        $csc->oil_cek = null;
        $csc->sh_ed_cek = null;
        $csc->p_jam_1 = null;
        $csc->p_jam_2 = null;
        $csc->ft_1 = null;
        $csc->ft_2 = null;
        $csc->ms_1 = null;
        $csc->ms_2 = null;
        $csc->ap_gm1 = null;
        $csc->ap_gm2 = null;
        $csc->ap_dc1 = null;
        $csc->ap_dc2 = null;
        $csc->ap_etc1 = null;
        $csc->ap_etc2 = null;
        $csc->status_pr = null;
        $csc->keterangan = null;

        $mesin = $this->Mesin_model->get_bc()->result();
        $idcs = $this->Inspections_model->get_id()->num_rows();
        $id_exists = $this->Inspections_model->get_id()->num_rows();
        if ($idcs . $id_exists == 0) {
            $idcs++;
        } else if ($idcs == $id_exists) {
            $idcs++;
        }
        // $this->Dimensi_model->update_data($is);
        // $this->Lable_model->update_data($is);
        // $this->Inspections_model->update_data($is);
        $data = array(
            'page'  => 'add',
            'mesin'  => $mesin,
            'dimensi'  => $idcs,
            'c_sheet'  => $idcs,
            'row'   => $csc,
            'row2'   => $cs
        );
        // print_r($idcs);
        // var_dump($idcs);
        $this->template->load('templates/template', 'cs/form_bt', $data);
    }

    public function process_bc()
    {
        $config['upload_path']    = './uploads/cs/';
        $config['allowed_types']  = 'png|jpg|jpeg';
        $config['max_size']       = 2048;
        $config['file_name']      = 'cs-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $this->load->library('upload', $config);

        $post = $this->input->post(null, TRUE);
        $id = $this->fungsi->user_login()->id_user;
        if (isset($_POST['add'])) {
            // print_r($post);
            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {
                    //Upload image in folder and database if present file
                    $post['image'] = $this->upload->data('file_name');
                    $this->Dimensi_model->add_bc($post);
                    $this->Lable_model->add_bc($post);
                    $this->Inspections_model->add_bc($post);
                } else {
                    $this->Dimensi_model->add_bc($post);
                    $this->Lable_model->add_bc($post);
                    $this->Inspections_model->add_bc($post);
                }
            }
        }

        redirect('Injection_C/index_u/' . $id);
    }

    public function process_bt()
    {
        $config['upload_path']    = './uploads/cs/';
        $config['allowed_types']  = 'png|jpg|jpeg';
        $config['max_size']       = 2048;
        $config['file_name']      = 'cs-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $this->load->library('upload', $config);

        $post = $this->input->post(null, TRUE);
        // $id = $this->fungsi->user_login()->id_user;
        if (isset($_POST['add'])) {
            // print_r($post);
            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {
                    //Upload image in folder and database if present file
                    $post['image'] = $this->upload->data('file_name');
                    $this->Dimensi_model->add_bt($post);
                    $this->Inspections_model->add_bt($post);
                } else {
                    $this->Dimensi_model->add_bc($post);
                    $this->Inspections_model->add_bc($post);
                }
            }
        }

        redirect('Injection_C/index');
    }

    public function approval()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['rejected'])) {
            $this->Inspections_model->edit($post);
        } elseif (isset($_POST['updated'])) {
            $this->Inspections_model->edit($post);
        } elseif (isset($_POST['approved'])) {
            $this->Inspections_model->approval($post);
        }

        redirect('Injection_C/index_l/' . $id);
    }

    public function view_bc($id)
    {
        $cs = $this->Inspections_model->get_v_bc($id);
        $data = array(
            'row'   => $cs
        );
        $this->template->load('templates/template', 'cs/v_injection_bc', $data);
    }

    public function view_bt($id)
    {
        $cs = $this->Inspections_model->get_v_bt($id);
        $data = array(
            'row'   => $cs
        );
        $this->template->load('templates/template', 'cs/v_injection_bt', $data);
    }

    public function view_l_bc($id)
    {
        $cs = $this->Inspections_model->get_v_bc($id);
        $data = array(
            'row'   => $cs
        );
        $this->template->load('templates/template', 'csl/v_cs_bc', $data);
    }

    public function view_l_bt($id)
    {
        $cs = $this->Inspections_model->get_v_bt($id);
        $data = array(
            'row'   => $cs
        );
        $this->template->load('templates/template', 'csl/v_cs_bt', $data);
    }

    public function view_m_bc($id)
    {
        $cs = $this->Inspections_model->get_v_bc($id);
        $data = array(
            'row'   => $cs
        );
        $this->template->load('templates/template', 'csm/v_cs_bc', $data);
    }

    public function view_u($id)
    {
        $cs = $this->Inspections_model->get_v_bc($id);
        $data = array(
            'row'   => $cs
        );
        $this->template->load('templates/template', 'csu/v_cs_bc', $data);
    }

    // public function delete($id)
    // {
    //     $where = array('id_cs' => $id);
    //     $this->Inspections_model->delete($where, 'id_cs');
    //     $this->Dimensi_model->delete($where, 'id_cs');
    //     $this->Lable_model->delete($where, 'id_cs');
    //     if ($this->db->affected_rows() > 0) {
    //         $this->session->set_flashdata('success', 'Data Success Delete');
    //     }
    //     redirect('Injection_C');
    // }
}
