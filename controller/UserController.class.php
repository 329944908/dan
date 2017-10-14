<?php
	class UserController{
		public function login(){
			include "./view/login.html";
		}
		public function doLogin(){
			$name = $_POST['name'];
			$password = $_POST['password'];
			$usermodel = new UserModel();
			$userInfo = $usermodel->getInfoByName($name);
			if($userInfo['password']==$password){
				unset($userInfo['password']);
				$_SESSION['me'] = $userInfo;
				// header('Refresh:3,Url=index.php?c=Blog&a=lists');
				echo '登录成功';
				die();
			}else{
				echo '登录不成功';
				die();
			}
		}
	}