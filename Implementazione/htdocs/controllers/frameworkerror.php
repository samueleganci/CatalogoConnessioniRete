<?php
class FrameworkError extends Controller {
	
	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->view->msg = "This page doesn't exists";
		$this->view->render('frameworkerror/index');
	}
}
?>