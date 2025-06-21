<?php

class Login extends Controller {

    public function index() {		
	    $this->view('login/index');
    }
    
    public function verify(){
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];

			if(isset($_SESSION['failedAuth']) && $_SESSION['failedAuth'] >= 3) {
				$elapsed_time = time() - $_SESSION['lastFailedTime'];
				if ($elapsed_time < 120) {
					$_SESSION['flash'] = "You have failed too many times. Please wait " . (60 - $elapsed_time) . " seconds before you can try logging in again.";
					header("Location: /login");
					exit;
				} else {
					unset($_SESSION['failedAuth']);
					unset($_SESSION['lastFailedTime']);
				}
			}
			$user = $this->model('User');
			$user->authenticate($username, $password); 
    }

}
