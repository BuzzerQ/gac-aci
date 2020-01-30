<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_email extends CI_Controller {

public function __construct() { 
parent::__construct();
$this->load->library('email');
$this->load->helper('cookie');
}
	
    	public function index()
    	{
        $mail_cookie   = 'hermawan.lee22@gmail.com';
        $token_cookie  = $this->input->cookie('tk',true);

        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://mail2.daunbiru.com';
        $config['smtp_port']    = '465';
       // $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'notification@gac.com';
        $config['smtp_pass']    = 'diesel';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // text or html
        $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);

        $this->email->from('notification@gac.com', 'GAC');
        $this->email->to($mail_cookie); 

        $this->email->subject("Verify Your Mail");
        $this->email->message("
        <html>
        <body>
            <header>
                <div class='nav-head'>
                    <div class='container'>
                        <center><h2>Confirm Your Email</h2></center> 
                    </div>
                </div>
                <hr class='style3'>
            </header>
            <div class='grey-trans'>
                <div class='container white'>
                    <div class='box-central margin-10'>
                        <div>
                            <h3 class='c-grey'>You don't know what will be shortened ?</h3>
                            <p class='p-text'>
                                Here, you can shorten website links, articles or blog posts, viral news, youtube videos, posts or social media updates, upload files, and much more. we will pay you according to a valid click on your short url.
                                <br>
                                <center><a href='localhost/short/confirm/?mail=".$mail_cookie."&&t=".$token_cookie."'>CONFIRM EMAIL</a></center>
                                <br>
                                <b>Please read our - <a href='Privacy.com'>Privacy Policy</a></b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class='style3'>
        </body>
        </html>"
        );  

    	if ($this->email->send()) {
    		echo 'Email sent.';
          //  delete_cookie("mail_cookie");

    	} else {
    		show_error($this->email->print_debugger());
    	}

     	
    	}
}
