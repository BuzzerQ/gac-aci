<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
        is_logged_in();
        date_default_timezone_set('asia/jakarta');
    }

	public function index()
	{
		$data['investor'] = $this->db->get_where('investor', ['id' =>  $this->session->userdata('id')])->row_array();
		$this->load->view('templates/header');
		$this->load->view('admin/index');
		$this->load->view('templates/footer');
	}

	public function detail_member()
	{
		$this->load->view('templates/header');
		$this->load->view('admin/detail_member');
		$this->load->view('templates/footer');
	}

	public function daftar()
	{
		$data['investor'] = $this->db->get_where('investor', ['id_coach' =>  $this->session->userdata('id_coach')])->row_array();
		$this->load->view('admin/daftar');
		$this->load->view('templates/footer');
	}

	public function daftarInvestor()
	{
		// $data['investor'] = $this->db->get_where('investor', ['id' =>  $this->session->userdata('id')])->row_array();
		$queyInvestor = "SELECT * FROM `investor` WHERE `id`= '{$this->session->userdata('id')}' ";
		$data['investor'] = $this->db->query($queyInvestor)->result_array();

		$queyRefferal = "SELECT * FROM `investor` WHERE `id_coach`= '{$this->session->userdata('id')}' ";
		$data['refferal'] = $this->db->query($queyRefferal)->result_array();
		
		$this->load->view('templates/header');
		$this->load->view('admin/daftarInvestor',$data);
		$this->load->view('templates/footer');
	}

	public function daftarCoach()
	{
		$data['investor'] = $this->db->get_where('investor', ['id_coach' =>  $this->session->userdata('id_coach')])->row_array();
		$this->load->view('admin/addcoach');
	}

	// public function daftarInvestor()
	// {
	// 	$queyInvestor = "SELECT * FROM `investor` WHERE `status`='3' ";
	// 	$data['investor'] = $this->db->query($queyInvestor)->result_array();
	// 	$this->load->view('admin/tableInvestor', $data);
		
	// }

	public function status($nik)
    {
        $data['investor'] = $this->db->get_where('investor', ['id' =>  $nik])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/status', $data);
        $this->load->view('templates/footer');
	}

	public function addCoach()
	{
		date_default_timezone_set('asia/jakarta');
		$coach = $this->db->get_where('investor', ['id_coach' =>  $this->session->userdata('id_coach')])->row_array();
		$investorGac = $this->db->get('investor')->result_array();
		$tgl_join = date('Y-m-d', strtotime($this->input->post('tgl_join')));
		$password = password_hash("cuan", PASSWORD_DEFAULT);

		// $this->db->where('year(tgl_daftar)', date('Y'));
		// $this->db->where('month(tgl_daftar)', date('m'));
		// $coach = $this->db->get('coach');
		// $total_coach = $coach->num_rows()+1;
		// $id = 'GAC'.date('ym'). sprintf("%04s", $total_coach);

		// NIK
		$queryCarinik = "SELECT *
                FROM `investor`
                WHERE `nik_ktp` =  '{$this->input->post('nik')}'
                ";
            $cariNik = $this->db->query($queryCarinik)->row_array();
			$nik = $cariNik['nik_ktp'];

		if($this->input->post('nik')== $nik)
			{
				$this->session->set_flashdata('message', 'datasudahada');
                redirect('admin/daftar/');
			}
		else 
			{
				$nik = $this->input->post('nik');
			}
		//ID COACH
		if($this->input->post('status_role')=='3')
			{
				$id_coach = $this->input->post('id_coach');
			}	
		else
			{
				$id_coach = NULL;
			}
			$data = [
				'id' => $this->input->post('id_coach'),
				'id_coach' => $id_coach,
				'nama' => $this->input->post('nama'),
				'nik_ktp' => $nik,
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'grade1' => '0',
				'grade2' => '0',
				'grade3' => '0',
				'grade4' => '0',
				'grade5' => '0',
				'password' => $password,
				'tgl_daftar' => date('Y-m-d H:i:s'),
				'status_gac' => '2',
				'status_grade' => '0',
				'role_id' => $this->input->post('status_role'),
				'tgl_join' => $tgl_join,
				'jumlah_investor' => '0',
				'link_coach' => $this->input->post('id_coach'),
				'status' => $this->input->post('status')
			];
			$this->db->insert('investor', $data);

		$this->session->set_flashdata('message', 'tambahCoach');
        redirect('admin/index/');
	}

	public function tambahInvestor()
	{
		date_default_timezone_set('asia/jakarta');
		$coach = $this->db->get_where('investor', ['id_coach' =>  $this->session->userdata('id_coach')])->row_array();
		$link_coach = $this->db->get_where('investor', ['link_coach' =>  $coach['link_coach']])->row_array();

		$password = password_hash("cuan", PASSWORD_DEFAULT);

		$this->db->where('year(tgl_daftar)', date('Y'));
		$this->db->where('month(tgl_daftar)', date('m'));
		$investor = $this->db->get('investor');
		$total_investor = $investor->num_rows()+1;
		$id = 'GAC'.date('ym'). sprintf("%04s", $total_investor);

		$queryCarinik = "SELECT *
                FROM `investor`
                WHERE `nik_ktp` =  '{$this->input->post('nik')}'
                ";
            $cariNik = $this->db->query($queryCarinik)->row_array();
			$nik = $cariNik['nik_ktp'];

		if($this->input->post('nik')== $nik)
			{
				$this->session->set_flashdata('message', 'datasudahada');
                redirect('admin/daftar/');
			}
		else 
			{
				$nik = $this->input->post('nik');
			}//GRADE
		if($coach['status_grade']=='0')
		{
			$grade = '1';
			$id_grade1 = $coach['id'];
			$id_grade2 = '0';
			$id_grade3 = '0';
			$id_grade4 = '0';
			$id_grade5 = '0';
			$link_caoch = $coach['id'];
		}
	else if($coach['status_grade']=='1')
		{
			$grade = '2';
			$id_grade1 = $coach['id_grade1'];
			$id_grade2 = $coach['id'];
			$id_grade3 = '0';
			$id_grade4 = '0';
			$id_grade5 = '0';
			$link_caoch = $coach['link_coach'];
		}
	else if($coach['status_grade']=='2')
		{
			$grade = '3';
			$id_grade1 = $coach['id_grade1'];
			$id_grade2 = $coach['id_grade2'];
			$id_grade3 = $coach['id'];
			$id_grade4 = '0';
			$id_grade5 = '0';
			$link_caoch = $coach['link_coach'];
		}
	else if($coach['status_grade']=='3')
		{
			$grade = '4';
			$id_grade1 = $coach['id_grade1'];
			$id_grade2 = $coach['id_grade2'];
			$id_grade3 = $coach['id_grade3'];
			$id_grade4 = $coach['id'];
			$id_grade5 = '0';
			$link_caoch = $coach['link_coach'];
		}
	else if($coach['status_grade']=='4')
		{
			$grade = '5';
			$id_grade1 = $coach['id_grade1'];
			$id_grade2 = $coach['id_grade2'];
			$id_grade3 = $coach['id_grade3'];
			$id_grade4 = $coach['id_grade4'];
			$id_grade5 = $coach['id'];
			$link_caoch = $coach['link_coach'];
		}
	
		$data = [
			'id' => $id,
			'nama' => $this->input->post('nama'),
			'nik_ktp' => $nik,
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'grade1' => '0',
			'grade2' => '0',
			'grade3' => '0',
			'grade4' => '0',
			'grade5' => '0',
			'password' => $password,
			'tgl_daftar' => date('Y-m-d H:i:s'),
			'status_gac' => '2',
			'status_grade' => $grade,
			'jumlah_investor' => '0',
			'status' => '1',
			'role_id' => '5',
			'id_grade1' => $id_grade1,
			'id_grade2' => $id_grade2,
			'id_grade3' => $id_grade3,
			'id_grade4' => $id_grade4,
			'id_grade5' => $id_grade5,
			'link_coach' => $link_caoch
		];
		$this->db->insert('investor', $data);

		// Hitung Jumlah Member Coach
		$this->db->where('link_coach',$link_coach);
		$this->db->where('id_grade1', $link_coach);
		$this->db->from('investor');
		$totalInvestor = $this->db->get()->num_rows();

		// Hitung Jumlah Grade1 Coach
		$this->db->where('id_grade1',$link_coach);
		$this->db->where('status_grade','1');
		$this->db->from('investor');
		$totalGrade1 = $this->db->get()->num_rows();

		// Hitung Jumlah Grade2 Coach
		$this->db->where('id_grade1', $link_coach);
		$this->db->where('status_grade','2');
		$this->db->from('investor');
		$totalGrade2 = $this->db->get()->num_rows();

		// Hitung Jumlah Grade3 Coach
		$this->db->where('id_grade1', $link_coach);
		$this->db->where('status_grade','3');
		$this->db->from('investor');
		$totalGrade3 = $this->db->get()->num_rows();

		// Hitung Jumlah Grade4 Coach
		$this->db->where('id_grade1', $link_coach);
		$this->db->where('status_grade','4');
		$this->db->from('investor');
		$totalGrade4 = $this->db->get()->num_rows();

		// Hitung Jumlah Grade5 Coach
		$this->db->where('id_grade1', $link_coach);
		$this->db->where('status_grade','5');
		$this->db->from('investor');
		$totalGrade5 = $this->db->get()->num_rows();

		$pG1 = $totalGrade1 * 300000;
		$pG2 = $totalGrade2 * 100000;
		$pG3 = $totalGrade3 * 50000;
		$pG4 = $totalGrade4 * 25000;
		$pG5 = $totalGrade5 * 12500;

		$tpendapatan = ($pG1+$pG2)+($pG3+$pG4)+$pG5;

		// Update data Coach
		$this->db->set('jumlah_investor', $totalInvestor);
		$this->db->set('grade1', $totalGrade1);
		$this->db->set('grade2', $totalGrade2);
		$this->db->set('grade3', $totalGrade3);
		$this->db->set('grade4', $totalGrade4);
		$this->db->set('grade5', $totalGrade5);
		$this->db->set('pendapatan', $tpendapatan);
		$this->db->where('id', $link_coach);
		$this->db->update('investor');

			// Konfigurasi email
			$this->load->library('email');
			$this->load->helper('cookie');

			$mail_cookie   = $this->input->post('email');
			$token_cookie  = $password;
	
			$config['protocol']    = 'smtp';
			$config['smtp_host']    = 'ssl://mail2.daunbiru.com';
			$config['smtp_port']    = '465';
			$config['smtp_user']    = 'notification@gac.com';
			$config['smtp_pass']    = 'diesel';
			$config['charset']    = 'utf-8';
			$config['newline']    = "\r\n";
			$config['mailtype'] = 'html'; // text or html
			$config['validation'] = TRUE; // bool whether to validate email or not      
	
			$this->email->initialize($config);
	
			$this->email->from('notification@gac.com', 'Gemesin Asia Charts');
			$this->email->to($mail_cookie); 
	
			$this->email->subject("Terima kasih, Pendaftaran anda telah berhasil");
			$this->email->message("Dear ".$this->input->post('nama') ."<p>ID anda : ".$id."<p><p>Password anda : <b>cuan</b><p>Silahkan klik  link berikut <a href='http://[::1]/gac-aci/' target='_blank'>Gemesin Asia Charts</a>");  
	
			if ($this->email->send()) {
				echo 'Email sent.';
			  //  delete_cookie("mail_cookie");
	
			} else {
				show_error($this->email->print_debugger());
			}
        redirect('admin/index/');
	}

}
