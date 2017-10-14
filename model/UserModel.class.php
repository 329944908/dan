<?php
	class UserModel{
		public $mysqli;
		function __construct(){
			$this->mysqli = new mysqli("localhost","root","","stu");
			$this->mysqli->query('set names utf8');
		}
		public function getInfoByName($name){
			$sql = "select * from user where name = '{$name}'";
			$res = $this->mysqli->query($sql);
			$data = $res->fetch_all(MYSQL_ASSOC);
			return isset($data[0])?$data[0]: 0;
		} 
	}