<?php 

	class Database 
	{

		//database credentials
		private $host = "localhost";
		private $db_name = "api_db";
		private $username = "root";
		private $password = "";
		public $conn;
		
		//get database connection 
		public function getConnection()
		{
			$this->conn = null;
			
			try {
				
				$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
				$this->conn->exec("set names utf8");
				
				//$this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
				
				/*if(!$this->conn)
				{
					echo 'Connection failure';
				}
				else
				{
					echo 'Connection success';
				}*/
								
			}catch(PDOException $exception)
			{
				echo "Connection error: " . $exception->getMessage();
			}
			
			return $this->conn;
		}

	}

?>