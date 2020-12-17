<?php
    class View {
        function __construct() {
            //echo "This is the view";
        }

        public function render($name, $data = false, $data2 = false, $noInclude = false) {
            if($noInclude == true) {
                if($data != false) {
                    $data = $data;
                }
                require 'views/' . $name . '.php';
            }else{
                if($data != false) {
                    $data = $data;
                }
                require 'views/header.php';
                require 'views/' . $name . '.php';
                require 'views/footer.php';
            }
        }
    }