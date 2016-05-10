<?php

/**
 * Controller Class
 * 
 * This class is intended to control all the connections to Database as well as operations
 * 
 * Author: Eduardo Melo
 * Date..: 09/may/2016
 */

	class DBConnect {
		private $configXML = "resources/config.xml";
		private $dbNam;
		private $dbUsr;
		private $dbPwd;
		private $dbAdd;
		private $xmlFile;
		
		public function DBConnect(){
			$this->xmlFile = simplexml_load_file($this->configXML) or 
				die("Erro leitura do XML de configuração");
			$connData = $this->xmlFile->children();
			$this->dbUsr = $connData->DBUser;
			$this->dbPwd = $connData->DBPassword;
			$this->dbAdd = $connData->DBAddress;
			$this->dbNam = $connData->DBName;
		}
		
		/**
		 * Insert data into database table
		 * @param unknown $arrData
		 */
		public function addData($arrData) {
			
		}
		
		/**
		 * Remove data from database table
		 * @param unknown $arrData
		 */
		public function remData($arrData) {
			
		}
		
		/**
		 * Update array of data on specified table
		 * @param unknown $arrData
		 */
		public function updData($arrData) {
			
		}
		
		/**
		 * Create database Locks
		 * @param unknown $arrData Data Structure to have locks created
		 */
		private function setLock($arrData){
			
		}
		
		/**
		 * Release database Locks
		 * @param unknown $arrData Data Structure to have locks released
		 */
		private function releaseLock($arrData){
		
		}
		
		/**
		 * Open Database connection
		 */
		private function openConnection(){
			
		}
		
		/**
		 * Close Database connection
		 */
		private function closeConnection() {
			
		}
	
		/**
		 * Update Database Log tables
		 * @param unknown $arrData
		 */
		private function updateDBLog($arrData) {
			
		}
	}

?>