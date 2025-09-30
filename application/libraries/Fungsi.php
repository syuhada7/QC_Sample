<?php
class Fungsi
{
  protected $ci;

  function __construct()
  {
    $this->ci = &get_instance();
  }

  function user_login()
  {
    $this->ci->load->model('User_model');
    $user_id = $this->ci->session->userdata('id_user');
    $user_data = $this->ci->User_model->get($user_id)->row();
    return $user_data;
  }

  public function count_user()
  {
    $this->ci->load->model('User_model');
    return $this->ci->User_model->get()->num_rows();
  }
<<<<<<< HEAD

  public function count_data()
  {
    $this->ci->load->model('Inspections_model');
    return $this->ci->Inspections_model->get()->num_rows();
  }
=======
>>>>>>> 1bba975c6b1d8206f251dc529b669aad41e79788
}
