<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');

class Project{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}
public function checkUserName($username){
	$query="SELECT * FROM user where username='$username'";
	$getuser= $this->db->select($query);

	if ($username=="") {
		echo "<span class='error'>please enter username</span>";
		exit();
		# code...
	}elseif ($getuser) {
		echo "<span class='error'> $username Not Available</span>";
		exit();
	}else{
		echo "<span class='success'> $username Available</span>";
		exit();
	}
}
	
}
?>