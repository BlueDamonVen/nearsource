<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->helper('cookie');
		if($this->input->cookie('userlogged')!=''){
			$this->load->view('dashboard');
		}else{
			redirect('/', 'refresh');
		}
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */