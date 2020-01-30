<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct() {
		parent::__construct();
        is_logged_in();
        date_default_timezone_set('asia/jakarta');
    }

	public function index()
	{
		$data['investor'] = $this->db->get_where('investor', ['id' =>  $this->session->userdata('id')])->row_array();
		$this->load->view('templates/header');
		$this->load->view('member/index',$data);
		$this->load->view('templates/footer');
	}

	public function daftar()
	{
		$data['investor'] = $this->db->get_where('investor', ['id' =>  $this->session->userdata('id')])->row_array();
		$this->load->view('member/daftar',$data);
		$this->load->view('templates/footer');
	}

	public function addInvestor()
	{
		date_default_timezone_set('asia/jakarta');
		$coach = $this->db->get_where('investor', ['id' =>  $this->session->userdata('id')])->row_array();
		$link_coach = $this->db->get_where('investor', ['link_coach' =>  $coach['link_coach']])->row_array();

		$password = password_hash("cuan", PASSWORD_DEFAULT);

		$this->db->where('year(tgl_daftar)', date('Y'));
		$this->db->where('month(tgl_daftar)', date('m'));
		$investor = $this->db->get('investor');
		$total_investor = $investor->num_rows()+1;
		$id = 'GAC'.date('ym'). sprintf("%04s", $total_investor);

		//NIK
		$queryCarinik = "SELECT *
                FROM `investor`
                WHERE `nik_ktp` =  '{$this->input->post('nik')}'
                ";
            $cariNik = $this->db->query($queryCarinik)->row_array();
			$nik = $cariNik['nik_ktp'];

		if($this->input->post('nik')== $nik)
			{
				$this->session->set_flashdata('message', 'datasudahada');
                redirect('member/daftar/');
			}
		else 
			{
				$nik = $this->input->post('nik');
			}

		//GRADE
		if($coach['status_grade']=='0')
			{
				$grade = '1';
				$id_grade1 = $coach['id'];
				$id_grade2 = '0';
				$id_grade3 = '0';
				$id_grade4 = '0';
				$id_grade5 = '0';
				$id_grade6 = '0';
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
				$id_grade6 = '0';
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
				$id_grade6 = '0';
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
				$id_grade6 = '0';
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
				$id_grade6 = '0';
				$link_caoch = $coach['link_coach'];
			}
		else if($coach['status_grade']=='5')
			{
				$grade = '6';
				$id_grade1 = $coach['id_grade1'];
				$id_grade2 = $coach['id_grade2'];
				$id_grade3 = $coach['id_grade3'];
				$id_grade4 = $coach['id_grade4'];
				$id_grade5 = $coach['id_grade5'];
				$id_grade6 = $coach['id'];
				$link_caoch = $coach['link_coach'];
			}
		
			$data = [
				'id' => $id,
				'id_coach' => $this->input->post('id'),
				'nama' => $this->input->post('nama'),
				'nik_ktp' => $nik,
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'grade1' => '0',
				'grade2' => '0',
				'grade3' => '0',
				'grade4' => '0',
				'grade5' => '0',
				'grade6' => '0',
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
				'id_grade6' => $id_grade6,
				'link_coach' => $link_caoch,
				'tunjanganCoach' => 0
			];
			$this->db->insert('investor', $data);

			// Hitung Jumlah Member Coach
			$this->db->where('link_coach', $this->input->post('link_coach'));
			$this->db->where('id_grade1', $this->input->post('link_coach'));
        	$this->db->from('investor');
			$totalInvestor = $this->db->get()->num_rows();


			// Hitung Jumlah Grade1 Coach
			$this->db->where('id_grade1', $this->input->post('link_coach'));
			$this->db->where('status_grade','1');
        	$this->db->from('investor');
			$totalGrade1 = $this->db->get()->num_rows();

			// Hitung Jumlah Grade2 Coach
			$this->db->where('id_grade1', $this->input->post('link_coach'));
			$this->db->where('status_grade','2');
        	$this->db->from('investor');
			$totalGrade2 = $this->db->get()->num_rows();

			// Hitung Jumlah Grade3 Coach
			$this->db->where('id_grade1', $this->input->post('link_coach'));
			$this->db->where('status_grade','3');
        	$this->db->from('investor');
			$totalGrade3 = $this->db->get()->num_rows();

			// Hitung Jumlah Grade4 Coach
			$this->db->where('id_grade1', $this->input->post('link_coach'));
			$this->db->where('status_grade','4');
        	$this->db->from('investor');
			$totalGrade4 = $this->db->get()->num_rows();

			// Hitung Jumlah Grade5 Coach
			$this->db->where('id_grade1', $this->input->post('link_coach'));
			$this->db->where('status_grade','5');
        	$this->db->from('investor');
			$totalGrade5 = $this->db->get()->num_rows();

			// Hitung Jumlah Grade6 Coach
			$this->db->where('id_grade1', $this->input->post('link_coach'));
			$this->db->where('status_grade','6');
        	$this->db->from('investor');
			$totalGrade6 = $this->db->get()->num_rows();

			// if($coach['role_id']=='5'){
			// 	$tunjanganGrade = 0;
			// }else if($coach['role_id']=='4'){
			// 	$tunjanganGrade = 0;
			// }else if($coach['role_id']=='3'){
			// 	$tunjanganGrade = 400000;
			// }

			// Merubah Toplinknya

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
			$this->db->set('grade6', $totalGrade6);
			$this->db->set('pendapatan', $tpendapatan);
			
// ****************************************************************************			
			$this->db->where('id', $this->input->post('link_coach'));
			$this->db->update('investor');

// ******************* NEW FUNCTION ***********************************************
			if($coach['status_grade']=='0'){
				if($coach['role_id']==3){
					$this->db->set('tunjanganCoach','tunjanganCoach + 400000',FALSE);
				}else{
					$this->db->set('tunjanganCoach','tunjanganCoach + 0',FALSE);
				}	
			}
// ********************************************************************************
			else if($coach['status_grade']=='1')
				{
					// Hitung Jumlah Member Grade1
					$this->db->where('link_coach', $this->input->post('link_coach'));
					$this->db->where('id_coach', $this->input->post('id'));
					$this->db->where('status_grade','2');
					$this->db->from('investor');
					$t_investorG1 = $this->db->get()->num_rows();

					$tpendapatanG1 = $t_investorG1 * 300000;

// ***************************** NEW FUNCTION ***************************************
					// Update data Investor
					if($coach['role_id']=='3'){
						$this->db->set('jumlah_investor', $t_investorG1);
						$this->db->set('pendapatan', $tpendapatanG1);
						$this->db->set('tunjanganCoach', 'tunjanganCoach + 400000', FALSE);
						$this->db->where('id', $this->input->post('id'));
						$this->db->update('investor');

						$tunjanganDirect = 5/100 * 700000;
						$this->db->set('tunjanganCoach', "tunjanganCoach + $tunjanganDirect",FALSE);
						$this->db->where('id', $this->input->post('id_coach'));
						$this->db->update('investor');
					}else{
						$this->db->set('jumlah_investor', $t_investorG1);
						$this->db->set('pendapatan', $tpendapatanG1);
						$this->db->where('id', $this->input->post('id'));
						$this->db->update('investor');
					}
// ****************************************************************************
				}
			else if ($coach['status_grade']=='2')
				{
					// Hitung Jumlah Member Grade2
					$this->db->where('link_coach', $this->input->post('link_coach'));
					$this->db->where('id_coach', $this->input->post('id'));
					$this->db->where('status_grade','3');
					$this->db->from('investor');
					$t_investorG2 = $this->db->get()->num_rows();

					$tpendapatanG1 = $t_investorG2 * 100000;
					$tpendapatanG2 = $t_investorG2 * 300000;

					// Update data Investor
					$this->db->set('jumlah_investor', $t_investorG2);
					$this->db->set('pendapatan', $tpendapatanG1);
					$this->db->where('id', $this->input->post('id_coach'));
					$this->db->update('investor');

// ***************************** NEW FUNCTION ***************************************
					// Update data Investor
					if($coach['role_id']=='3'){
						$this->db->set('jumlah_investor', $t_investorG2);
						$this->db->set('pendapatan', $tpendapatanG2);
						$this->db->set('tunjanganCoach', 'tunjanganCoach + 400000', FALSE);
						$this->db->where('id', $this->input->post('id'));
						$this->db->update('investor');

						$tunjanganDirect = 5/100 * 700000;
						$this->db->set('tunjanganCoach', "tunjanganCoach + $tunjanganDirect",FALSE);
						$this->db->where('id', $this->input->post('id_grade1'));
						$this->db->update('investor');

						$tunjanganDirect1 = 5/100 * 100000;
						$this->db->set('tunjanganCoach' "tunjanganCoach + $tunjanganDirect1", FALSE);
						$this->db->where('id', $this->input->post('link_coach'));
						$this->db->update('investor');
					}else{
						$this->db->set('jumlah_investor', $t_investorG2);
						$this->db->set('pendapatan', $tpendapatanG2);
						$this->db->where('id', $this->input->post('id'));
						$this->db->update('investor');
					}
// ****************************************************************************
				}

			else if ($coach['status_grade']=='3')
				{
					// Hitung Jumlah Member Grade2
					$this->db->where('link_coach', $this->input->post('link_coach'));
					$this->db->where('id_coach', $this->input->post('id'));
					$this->db->where('status_grade','4');
					$this->db->from('investor');
					$t_investorG3 = $this->db->get()->num_rows();

					$tpendapatanG1 = $t_investorG3 * 50000;
					$tpendapatanG2 = $t_investorG3 * 100000;
					$tpendapatanG3 = $t_investorG3 * 300000;

					// Update data Investor
// ***************************** NEW FUNCTION ***************************************
					// Update data Investor
					if($coach['role_id']=='3'){
						$this->db->set('jumlah_investor', $t_investorG3);
						$this->db->set('pendapatan', $tpendapatanG3);
						$this->db->set('tunjanganCoach', 'tunjanganCoach + 400000', FALSE);
						$this->db->where('id', $this->input->post('id'));
						$this->db->update('investor');

						$tunjanganDirect = 5/100 * 700000;
						$this->db->set('tunjanganCoach', "tunjanganCoach + $tunjanganDirect",FALSE);
						$this->db->where('id', $this->input->post('id_grade2'));
						$this->db->update('investor');

						$tunjanganDirect1 = 5/100 * 100000;
						$this->db->set('tunjanganCoach' "tunjanganCoach + $tunjanganDirect1", FALSE);
						$this->db->where('id', $this->input->post('id_grade1'));
						$this->db->update('investor');

						$tunjanganDirect2 = 5/100 * 50000;
						$this->db->set('tunjanganCoach' "tunjanganCoach + $tunjanganDirect2", FALSE);
						$this->db->where('id', $this->input->post('link_coach'));
						$this->db->update('investor');
					}else{
						$this->db->set('jumlah_investor', $t_investorG3);
						$this->db->set('pendapatan', $tpendapatanG3);
						$this->db->where('id', $this->input->post('id'));
						$this->db->update('investor');
					}
// ****************************************************************************

					$this->db->set('jumlah_investor', $t_investorG3);
					$this->db->set('pendapatan', $tpendapatanG2);
					$this->db->where('id', $this->input->post('id_coach'));
					$this->db->update('investor');

					$this->db->set('jumlah_investor', $t_investorG3);
					$this->db->set('pendapatan', $tpendapatanG1);
					$this->db->where('id', $this->input->post('id_grade2'));
					$this->db->update('investor');
				}

			else if ($coach['status_grade']=='4')
				{
					// Hitung Jumlah Member Grade2
					$this->db->where('link_coach', $this->input->post('link_coach'));
					$this->db->where('id_coach', $this->input->post('id'));
					$this->db->where('status_grade','5');
					$this->db->from('investor');
					$t_investorG4 = $this->db->get()->num_rows();

					$tpendapatanG1 = $t_investorG4 * 25000;
					$tpendapatanG2 = $t_investorG4 * 50000;
					$tpendapatanG3 = $t_investorG4 * 100000;
					$tpendapatanG4 = $t_investorG4 * 300000;

					// Update data Investor
// ***************************** NEW FUNCTION ***************************************
					// Update data Investor
					if($coach['role_id']=='3'){
						$this->db->set('jumlah_investor', $t_investorG4);
						$this->db->set('pendapatan', $tpendapatanG4);
						$this->db->set('tunjanganCoach', 'tunjanganCoach + 400000', FALSE);
						$this->db->where('id', $this->input->post('id'));
						$this->db->update('investor');

						$tunjanganDirect = 5/100 * 700000;
						$this->db->set('tunjanganCoach', "tunjanganCoach + $tunjanganDirect",FALSE);
						$this->db->where('id', $this->input->post('id_grade3'));
						$this->db->update('investor');

						$tunjanganDirect1 = 5/100 * 100000;
						$this->db->set('tunjanganCoach' "tunjanganCoach + $tunjanganDirect1", FALSE);
						$this->db->where('id', $this->input->post('id_grade2'));
						$this->db->update('investor');

						$tunjanganDirect2 = 5/100 * 50000;
						$this->db->set('tunjanganCoach' "tunjanganCoach + $tunjanganDirect2", FALSE);
						$this->db->where('id', $this->input->post('id_grade1'));
						$this->db->update('investor');

						$tunjanganDirect3 = 5/100 * 25000;
						$this->db->set('tunjanganCoach' "tunjanganCoach + $tunjanganDirect3", FALSE);
						$this->db->where('id', $this->input->post('link_coach'));
						$this->db->update('investor');
					}else{
						$this->db->set('jumlah_investor', $t_investorG4);
						$this->db->set('pendapatan', $tpendapatanG4);
						$this->db->where('id', $this->input->post('id'));
						$this->db->update('investor');
					}
// ****************************************************************************

					$this->db->set('jumlah_investor', $t_investorG4);
					$this->db->set('pendapatan', $tpendapatanG3);
					$this->db->where('id', $this->input->post('id_coach'));
					$this->db->update('investor');

					$this->db->set('jumlah_investor', $t_investorG4);
					$this->db->set('pendapatan', $tpendapatanG2);
					$this->db->where('id', $this->input->post('id_grarde2'));
					$this->db->update('investor');

					$this->db->set('jumlah_investor', $t_investorG4);
					$this->db->set('pendapatan', $tpendapatanG1);
					$this->db->where('id', $this->input->post('id_grade1'));
					$this->db->update('investor');
				}

			else if ($coach['status_grade']=='5')
				{
					// Hitung Jumlah Member Grade2
					$this->db->where('link_coach', $this->input->post('link_coach'));
					$this->db->where('id_coach', $this->input->post('id'));
					$this->db->where('status_grade','6');
					$this->db->from('investor');
					$t_investorG5 = $this->db->get()->num_rows();

					$tpendapatanG1 = $t_investorG5 * 12500;
					$tpendapatanG2 = $t_investorG5 * 25000;
					$tpendapatanG3 = $t_investorG5 * 50000;
					$tpendapatanG4 = $t_investorG5 * 100000;
					$tpendapatanG5 = $t_investorG5 * 300000;

// ***************************** NEW FUNCTION ***************************************
					// Update data Investor
					if($coach['role_id']=='3'){
						$this->db->set('jumlah_investor', $t_investorG5);
						$this->db->set('pendapatan', $tpendapatanG5);
						$this->db->set('tunjanganCoach', 'tunjanganCoach + 400000', FALSE);
						$this->db->where('id', $this->input->post('id'));
						$this->db->update('investor');

						$tunjanganDirect = 5/100 * 700000;
						$this->db->set('tunjanganCoach', "tunjanganCoach + $tunjanganDirect",FALSE);
						$this->db->where('id', $this->input->post('id_grade4'));
						$this->db->update('investor');

						$tunjanganDirect1 = 5/100 * 100000;
						$this->db->set('tunjanganCoach' "tunjanganCoach + $tunjanganDirect1", FALSE);
						$this->db->where('id', $this->input->post('id_grade3'));
						$this->db->update('investor');

						$tunjanganDirect2 = 5/100 * 50000;
						$this->db->set('tunjanganCoach' "tunjanganCoach + $tunjanganDirect2", FALSE);
						$this->db->where('id', $this->input->post('id_grade2'));
						$this->db->update('investor');

						$tunjanganDirect3 = 5/100 * 25000;
						$this->db->set('tunjanganCoach' "tunjanganCoach + $tunjanganDirect3", FALSE);
						$this->db->where('id', $this->input->post('id_grade1'));
						$this->db->update('investor');

						$tunjanganDirect4 = 5/100 * 12500;
						$this->db->set('tunjanganCoach' "tunjanganCoach + $tunjanganDirect4", FALSE);
						$this->db->where('id', $this->input->post('link_coach'));
						$this->db->update('investor');
					}else{
						$this->db->set('jumlah_investor', $t_investorG5);
						$this->db->set('pendapatan', $tpendapatanG5);
						$this->db->where('id', $this->input->post('id'));
						$this->db->update('investor');
					}
// ****************************************************************************

					$this->db->set('jumlah_investor', $t_investorG5);
					$this->db->set('pendapatan', $tpendapatanG4);
					$this->db->where('id', $this->input->post('id_coach'));
					$this->db->update('investor');

					$this->db->set('jumlah_investor', $t_investorG5);
					$this->db->set('pendapatan', $tpendapatanG3);
					$this->db->where('id', $this->input->post('id_grade3'));
					$this->db->update('investor');

					$this->db->set('jumlah_investor', $t_investorG5);
					$this->db->set('pendapatan', $tpendapatanG2);
					$this->db->where('id', $this->input->post('id_grade2'));
					$this->db->update('investor');
				}

			// Konfigurasi email
			// $this->load->library('email');
			// $this->load->helper('cookie');

			// $mail_cookie   = $this->input->post('email');
			// $token_cookie  = $password;
	
			// $config['protocol']    = 'smtp';
			// $config['smtp_host']    = 'ssl://mail2.daunbiru.com';
			// $config['smtp_port']    = '465';
			// $config['smtp_user']    = 'notification@gac.com';
			// $config['smtp_pass']    = 'diesel';
			// $config['charset']    = 'utf-8';
			// $config['newline']    = "\r\n";
			// $config['mailtype'] = 'html'; // text or html
			// $config['validation'] = TRUE; // bool whether to validate email or not      
	
			// $this->email->initialize($config);
	
			// $this->email->from('notification@gac.com', 'Gemesin Asia Charts');
			// $this->email->to($mail_cookie); 
	
			// $this->email->subject("Terima kasih, Pendaftaran anda telah berhasil");
			// $this->email->message("Dear ".$this->input->post('nama') ."<p>ID anda : ".$id."<p><p>Password anda : <b>cuan</b><p>Silahkan klik  link berikut <a href='http://[::1]/gac-aci/' target='_blank'>Gemesin Asia Charts</a>");  
	
			// if ($this->email->send()) {
			// 	echo 'Email sent.';
			//   //  delete_cookie("mail_cookie");
	
			// } else {
			// 	show_error($this->email->print_debugger());
			// }
		$this->session->set_flashdata('message', 'daftar');
        redirect('member/index/');
	}

}
