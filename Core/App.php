<?php
// url:
// ?controller=user&action=list ==> xem danh sach user
// ?controller=user&action=add  ==> them moi user
// ?controller=book&action=list ==> xem ds book

class App{
	public $request;
	public function __construct(){
		$this->request = $_GET;
	}
	public function run(){
		echo 'App runing...';
		//1. Kiem tra request
			$controller = $this->request['controller'];
			$action = $this->request['action'];
			switch($controller){
				case 'user': 
					// echo 'UserController';
					require_once app_path .'/Controller/UserController.php';
					$objUser = new UserController();

					switch($action){

						case 'list': 
							$objUser->List();
						 break;
							
						case 'add':
							$objUser->Add();
						   break;
						default: Header404('Action notfound!');
					}

				break;

				case 'book':
					echo 'BookController';
				break;

				default:
					Header404('Controller notfound!');
				break;
			}


		//2. include file


		//3. goi action



	}
}