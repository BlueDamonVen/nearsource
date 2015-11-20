<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

	public function index()
	{
		$this->load->view('404');
	}

}

/* End of file Errors.php */
/* Location: ./application/controllers/Errors.php */