<?php
	header("Content-type: text/html; charset=utf-8");
	$controller = isset($_GET['c']) ?$_GET['c'] : 'User';
	$action     = isset($_GET['a']) ?$_GET['a'] : 'login';
	function __autoload($class){
		if(strpos($class, "Controller")){
			$dir = "controller";
		}elseif (strpos($class, "Model")) {
			$dir = "model";
		}else{
			die($class."不存在");
		}
		include "./{$dir}/{$class}.class.php";
	}
	$className = "{$controller}Controller";
	$con = new $className();
	$con ->$action();