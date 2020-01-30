<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('auth/index');
    }

    public function login()
    {
        $id = $this->input->post('id');
        $password = $this->input->post('pwd');
        $investor = $this->db->get_where('investor', ['id' => $id])->row_array();
        //die;

        if ($investor) {
            if (password_verify($password, $investor['password'])) {
                $data = [
                    'id' => $investor['id'],
                    'nama' => $investor['nama'],
                    'role_id' => $investor['role_id'],
                    'status' => $investor['status']
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('message', 'masuk');
                    if($investor['status_gac']=='1')
                        {
                            redirect('admin/index');
                        }
                    else if($investor['status_gac']=='2')
                        {
                            redirect('member/index');
                        }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Maaf!</strong> Password kamu SALAH.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('auth');
            }
        } else {
          //   $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          //   <strong>Maaf!</strong> ID investor Tidak ditemukan.
          //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          //     <span aria-hidden="true">&times;</span>
          //   </button>
          // </div>');
            redirect('auth');
        }
}
    

    public function logout()
    {
        $this->session->unset_userdata('npk');
        $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Terima kasih!</strong> Telah menggunakan FIDA.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('auth');
    }

    public function denied()
    {
        $this->load->view('auth/denied');
    }
}
