<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
<<<<<<< HEAD
        $this->db->where('nama_pic', $post['nama_pic']);
=======
        $this->db->where('nama', $post['nama']);
>>>>>>> 1bba975c6b1d8206f251dc529b669aad41e79788
        $this->db->where('password', md5($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
<<<<<<< HEAD
        $params['nama_pic'] = $post['nama_pic'];
        $params['password'] = md5($post['password1']);
        $params['nik'] = $post['nik'];
        $params['area'] = $post['area'];
        $params['level'] = $post['level'];
=======
        $params['nama'] = $post['nama'];
        $params['password'] = md5($post['password1']);
        $params['nik'] = $post['nik'];
        $params['level'] = $post['level'];
        $params['dept'] = $post['dept'];
>>>>>>> 1bba975c6b1d8206f251dc529b669aad41e79788
        $params['image'] = 'default.png';
        $this->db->insert('user', $params);
    }

    public function edit($post)
    {
<<<<<<< HEAD
        $params['nama_pic'] = $post['nama_pic'];
=======
        $params['nama'] = $post['nama'];
>>>>>>> 1bba975c6b1d8206f251dc529b669aad41e79788
        if (!empty($post['password1'])) {
            $params['password'] = md5($post['password1']);
        }
        $params['nik'] = $post['nik'];
<<<<<<< HEAD
        $params['area'] = $post['area'];
        $params['level'] = $post['level'];
=======
        $params['level'] = $post['level'];
        $params['dept'] = $post['dept'];
>>>>>>> 1bba975c6b1d8206f251dc529b669aad41e79788
        $this->db->where('id_user', $post['id_user']);
        $this->db->update('user', $params);
    }

    public function delete($where)
    {
        $this->db->where($where);
        $this->db->delete('user');
    }
}
