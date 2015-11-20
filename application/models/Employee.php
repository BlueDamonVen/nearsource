<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;
class Employee extends Eloquent {
	protected $table = 'tb_employees';
	
}

/* End of file Employee.php */
/* Location: ./application/models/Employee.php */