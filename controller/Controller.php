<?php 

abstract class Controller {
	public function redirect($url) {
		header("location: ".$url);
	}

	public function loadView($name, $path='view/') {
		$path = $path.$name.'.php';
		try {
			if(is_file($path)) {
				require $path;
				$view = new $name();
			} else {
				throw new Exception('Cannot open view '.$name.' in: '.$path);
			}
		}
		catch(Exception $e) {
			echo $e->getMessage().'<br />
                File: '.$e->getFile().'<br />
                Code line: '.$e->getLine().'<br />
                Trace: '.$e->getTraceAsString();
            exit;
		}
		return $view;
	}

	public function loadModel($name,$values=NULL, $tempValues =NULL, $path='model/') {
		$path = $path.$name.'.php';
		try {
			if(is_file($path)) {
				require $path;
				$model =$tempValues ? new $name($values,$tempValues) : new $name($values);
			} else {
				throw new Exception('Cannot open model '.$name.' in: '.$path);
			}
		} catch(Exception $e) {
			echo $e->getMessage().'<br />
                File: '.$e->getFile().'<br />
                Code line: '.$e->getLine().'<br />
                Trace: '.$e->getTraceAsString();
            exit;
		}
		return $model;
	}
}