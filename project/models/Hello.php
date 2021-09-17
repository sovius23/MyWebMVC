<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Hello extends Model
	{
		public function checkDB(){
		    $query="SELECT id from `userstore` WHERE id>0 LIMIT 1";
		    return empty($this->query($query, $variables = []));
}

	}
