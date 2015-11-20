<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;
class User extends Eloquent {
	protected $table = 'tb_user';
	protected $hidden = array('user_password');
	
}

/* End of file User.php */
/* Location: ./application/models/User.php */