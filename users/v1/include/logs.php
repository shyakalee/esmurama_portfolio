<?php
require_once(LIB_PATH.DS.'database.php');
class Log {
	protected static  $tblname = "wp_logs";

	function dbfields () {
		global $mydb;
		return $mydb->getfieldsononetable(self::$tblname);
	}
	
	function getLogs(){
		global $mydb;
		$mydb->setQuery("SELECT wp_users.first_name as fn, wp_users.last_name as ln, wp_users. username as username, wp_logs.last_update as lastu, wp_users.type as typ, wp_logs.flag as flag, wp_positions.title as title, wp_logs.created_at as created FROM wp_users INNER JOIN wp_logs ON wp_users.id=wp_logs.user_id INNER JOIN wp_positions on wp_users.type=wp_positions.id ");
		$cur = $mydb->loadResultList();
		return $cur;
	}


	function find_group($id="",$name=""){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname." 
			WHERE CUSTOMERID = {$id} OR FNAME = '{$name}'");
		$cur = $mydb->executeQuery();
		$row_count = $mydb->num_rows($cur);
		return $row_count;
	}

 
	function find_all_customer($name=""){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname." 
			WHERE FNAME = '{$name}'");
		$cur = $mydb->executeQuery();
		$row_count = $mydb->num_rows($cur);
		return $row_count;
	}
	
	 
	function single_group($id=""){
			global $mydb;
			$mydb->setQuery("SELECT * FROM ".self::$tblname." 
				Where id= {$id} LIMIT 1");
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
		$sql .= " WHERE CUSTOMERID=". $id;
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