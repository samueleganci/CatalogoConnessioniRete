<?php
    class Index extends Controller {
        function __construct() {
            parent::__construct();
        }

        function index() {
            $this->view->render('index/index', 0, 0, true);
        }

        function run() {
            $this->model->run();
        }
    }
?>