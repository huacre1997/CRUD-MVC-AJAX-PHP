<?php 

class users_model extends Connect
{
	private $db;
	private $users;
	
	public function __construct(){
		$this->db = Connect::connection();
		$this->users = array();
	}

	public function get_users(){
		$query = $this->db->query("SELECT * FROM users");
		while ($rows = $query->fetch_assoc()){
			$this->users[] = $rows;
		}
		return $this->users;
	}
	public function getUser($id)
	{
		$query = $this->db->query("SELECT * FROM users where id='$id' LIMIT 1");
		$row = $query->fetch_assoc();
		return $row;
	}
	public function insert_users($name, $email, $phone){
		$resul = $this->db->query("INSERT INTO users (`name`, `email`, `phone`) VALUES ('$name','$email','$phone')");
	}
	public function update_users($name, $email, $phone,$id){
	
		$resul = $this->db->query("UPDATE  users  set `modified`=(SELECT now()),`name`='$name',`email`='$email', `phone`='$phone' where id='$id'");
	}
	public function delete_user($id){
		
		$resul = $this->db->query("DELETE from users  where id='$id'");
	}
	
}

?>