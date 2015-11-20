<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {

	public function index()
	{
		$this->load->model('Employee');
		$employees = Employee::all();
		if ($employees === null) {
			$response = array('Status' => "Fail", "ErrorMessage" => "No Users Found");
		}else{
			$response = array('Status' => "Success", 'data' => $employees);
		}
		$this->output
        	->set_content_type('application/json')
        	->set_output(json_encode($response));		
	}

}

/* End of file EmployeeController.php */
/* Location: ./application/controllers/EmployeeController.php */