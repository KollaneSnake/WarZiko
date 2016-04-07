<?php 
	class Model
	{
		private $dbh;
		private $user="DB_USER";
		private $pass="DB_PASSWORD";
		private $db="DB_NAME";
		private $charset="UTF-8";
		private $host="DB_HOST";

		function Model()
		{	
			$dsn = "mysql:host=$this->host;
						  dbname=$this->db;
						  charset=$this->charset;";

			$opt = array(
			    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			);

			try 
			{
				$this->dbh = new PDO($dsn, $this->user, $this->pass, $opt);
				
			} 
			
			catch (Exception $e) 
			{
				echo "Error: " + $e;
			}
		}

		public function get_all_posts() 
		{
			
			$sql='SELECT id, title FROM Post';
			$stmt=$this->dbh->query($sql);		
			$posts = array();
			while ($row = $stmt->fetch()) {
				$posts[] = $row;
			}		
			return $posts;
		}

	}
?>