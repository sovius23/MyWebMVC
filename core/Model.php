<?php
	namespace Core;
	
	class Model
	{
		protected static $link;
		
		public function __construct()
		{
			if (!self::$link) {
				self::$link = new \PDO(DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" .CHAR, DB_USER, DB_PASS, OPTIONS);
			}
		}
		
		protected function query($query,$variables=[])
		{
            $stmt = self::$link->prepare($query);
            $stmt->execute($variables);
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
		}


		protected function findMany($query)
		{

		}
	}
