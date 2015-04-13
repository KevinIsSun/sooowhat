<?php 
/**
 * 登陆页面
 * @author kevin
 *
 */
class LoginModel extends CI_Model
{

	function __construct()
    {
        parent::__construct();
    }

    function existUser($username, $password)
    {
    	$query = $this->db->get_where('user',array('username' => $username,'password' => $password));

    	$row = $query->row_array();

		if (!empty($row)){
			return true;
		}
		else{
			return false;			
		}
    }
}
?>