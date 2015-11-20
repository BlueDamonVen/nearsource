<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->helper('cookie');
		if($this->input->cookie('userlogged')!=''){
			redirect('/dashboard', 'refresh');
		}else{
			$this->load->view('login');
		}
	}

	public function doLogin()
	{
		$user = $this->input->get('user');
		$password = $this->input->get('password');
		$this->load->model('User');
		$users = User::where('user_name', '=', $user)->where('user_password', '=', $password)->first();
		if ($users === null) {
			$response = array('Status' => "Fail", "ErrorMessage" => "User and Password Invalids");
		}else{
			$response = array('Status' => "Success", 'data' => $users);
			// $logged = array(
   //                 'user_name'  => $users->user_name,
   //                 'user_fullname'  => $users->user_fullname,
   //                 'logged' => TRUE
   //             );			
			// $this->session->set_userdata($logged);			
		}
		$this->output
        	->set_content_type('application/json')
        	->set_output(json_encode($response));
	}

}

/* End of file LoginController.php */
/* Location: ./application/controllers/LoginController.php */