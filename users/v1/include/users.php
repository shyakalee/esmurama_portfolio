<?php
require_once(LIB_PATH.DS.'database.php');
class User {
	protected static  $tblname = "wp_users";

	function dbfields () {
		global $mydb;
		return $mydb->getfieldsononetable(self::$tblname);
	}

	function pass_id($id) {
		return $id;
	}

	function all_users(){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname);
		return $cur;
	}

	function countUsers() {
		global $mydb;
		$query="SELECT * FROM `wp_users`";
		$mydb->setQuery($query);
		$cur = $mydb->executeQuery();
		$row_count=$mydb->num_rows($cur); 
		return $row_count;	 
	}

	function list_all_staff() {
		global $mydb;
		$status="1";
		$mydb->setQuery("select wp_users.id, wp_users.first_name, wp_users.last_name, wp_users.address,	wp_users.gender, wp_positions.title, 
		wp_users.tel_number, wp_users.show_card, wp_users.username, wp_users.joined_date from wp_users inner join wp_positions on wp_users.type=wp_positions.id ");
		$cur = $mydb->loadResultList();
		return $cur;
	}

	function find_customer($id="",$name=""){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname." 
			WHERE CUSTOMERID = {$id} OR FNAME = '{$name}'");
		$cur = $mydb->executeQuery();
		$row_count = $mydb->num_rows($cur);
		return $row_count;
	}

	function checkAuthentication($session) {
		if(!isset($session)) {
			return false;
		} else {
			return true;
		}
	}

 
	function find_all_customer($name=""){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname." 
			WHERE FNAME = '{$name}'");
		$cur = $mydb->executeQuery();
		$row_count = $mydb->num_rows($cur);
		return $row_count;
	}
	
	static function Authenticate($username,$m_pwd){
		global $mydb;
		$h_pass=md5($m_pwd);
		$mydb->setQuery("SELECT * FROM  ".self::$tblname."  WHERE `username` = '".$username."' and `password` = '". $h_pass ."'");
		$cur = $mydb->executeQuery();
		if($cur==false){
			die(mysql_error());
		}
		$row_count = $mydb->num_rows($cur);//get the number of count
		 if ($row_count == 1){
		 $user_found = $mydb->loadSingleResult();
		 	$_SESSION['id']   		= $user_found->id;
		 	$_SESSION['first_name']     = $user_found->first_name;
			$_SESSION['last_name']     = $user_found->last_name;
			$_SESSION['tel_number']    = $user_found->tel_number;
			$_SESSION['username']      = $user_found->username;
			$_SESSION['type']      	= $user_found->type;
		   return true;
		 } else {
		 	return false;
			 $_SESSION['error']   = "Account Disabled";
		 }
	}
	
	 
	function single_user($id=""){
			global $mydb;
			$mydb->setQuery("SELECT * FROM ".self::$tblname." 
				Where id= {$id} LIMIT 1");
			$cur = $mydb->loadSingleResult();
			return $cur;
	}
	function find_phone($phone=""){
			global $mydb;
			$mydb->setQuery("SELECT * FROM ".self::$tblname." 
				Where PHONE= {$phone} LIMIT 1");
			$cur = $mydb->loadSingleResult();
			return $cur;
	}
	/*---Instantiation of Object dynamically---*/
	static function instantiate($record) {
		$object = new self;

		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		} 
		return $object;
	}
	
	
	/*--Cleaning the raw data before submitting to Database--*/
	private function has_attribute($attribute) {
	  // We don't care about the value, we just want to know if the key exists
	  // Will return true or false
	  return array_key_exists($attribute, $this->attributes());
	}

	protected function attributes() { 
		// return an array of attribute names and their values
	  global $mydb;
	  $attributes = array();
	  foreach($this->dbfields() as $field) {
	    if(property_exists($this, $field)) {
			$attributes[$field] = $this->$field;
		}
	  }
	  return $attributes;
	}
	
	protected function sanitized_attributes() {
	  global $mydb;
	  $clean_attributes = array();
	  // sanitize the values before submitting
	  // Note: does not alter the actual value of each attribute
	  foreach($this->attributes() as $key => $value){
	    $clean_attributes[$key] = $mydb->escape_value($value);
	  }
	  return $clean_attributes;
	}
	
	
	/*--Create,Update and Delete methods--*/
	public function save() {
	  // A new record won't have an id yet.
	  return isset($this->id) ? $this->update() : $this->create();
	}
	
	public function create() {
		global $mydb;
		// Don't forget your SQL syntax and good habits:
		// - INSERT INTO table (key, key) VALUES ('value', 'value')
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		$attributes = $this->sanitized_attributes();
		$sql = "INSERT INTO ".self::$tblname." (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
	echo $mydb->setQuery($sql);
	
	 if($mydb->executeQuery()) {
	    $this->id = $mydb->insert_id();
	    return true;
	  } else {
	    return false;
	  }
	}

	public function update($id=0) {
	  global $mydb;
		$attributes = $this->sanitized_attributes();
		$attribute_pairs = array();
		foreach($attributes as $key => $value) {
		  $attribute_pairs[] = "{$key}='{$value}'";
		}
		$sql = "UPDATE ".self::$tblname." SET ";
		$sql .= join(", ", $attribute_pairs);
		$sql .= " WHERE id=". $id;
	  $mydb->setQuery($sql);
	 	if(!$mydb->executeQuery()) return false; 	
		
	}

	public function delete($id=0) {
		global $mydb;
		  $sql = "DELETE FROM ".self::$tblname;
		  $sql .= " WHERE CUSTOMERID=". $id;
		  $sql .= " LIMIT 1 ";
		  $mydb->setQuery($sql);
		  
			if(!$mydb->executeQuery()) return false; 	
	
	}	


}
?>