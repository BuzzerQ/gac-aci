<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Investor extends CI_Controller {

	public function __construct() {
		parent::__construct();
        is_logged_in();
        date_default_timezone_set('asia/jakarta');
    }

	public function index()
	{
		$data['investor'] = $this->db->get_where('investor', ['id' =>  $this->session->userdata('id')])->row_array();
		$this->load->view('investor/index');
    }
    
    public function video()
	{
		$data['investor'] = $this->db->get_where('investor', ['id' =>  $this->session->userdata('id')])->row_array();
		$this->load->view('investor/video');
	}

	public function investor()
	{
		$data['investor'] = $this->db->get_where('investor', ['id' =>  $this->session->userdata('id')])->row_array();
		$this->load->view('investor/t_investor');
    }
}
