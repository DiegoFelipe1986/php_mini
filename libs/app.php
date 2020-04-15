<?php
require_once 'controllers/error.php';

class App{
   function __construct(){
		echo "<p>Nueva App</p>";
		// Getting Url
		$url = $_GET['url'];
		$url = rtrim($url, '/');
		// Control about URL parameters
		$url = explode('/', $url);
		$fileController = 'controllers/'. $url[0]. '.php';
		// var_dump($fileController);
		if(file_exists($fileController)){
			require_once $fileController;
			$controller = new $url[0];
			if(isset($url[1])){
				$controller->{$url[1]}();
			}
		} else {
			$controller = new ErrorMain();
		}
   }
}
?>
