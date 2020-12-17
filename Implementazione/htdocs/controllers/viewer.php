<?php
class Viewer extends Controller {
    public function __construct() {
        parent::__construct();
        Session::init();
        if(!Session::get('loggedIn')) {
            Session::destroy();
            header('location: ../index');
            exit;
        }else{
            if(Session::get('role') == 1) {
                header('location: ../../operator');
            }else if(Session::get('role') == 0) {
                header('location: ../../admin');
            }
        }
    }

    function index() {
        $switches = $this->model->showSwitches();
        $this->view->render('viewer/index', $switches);
    }

    function showSwitchLinks($switch) {
        $links = $this->model->showSwitchLinks($switch);
        $etichetta = $this->model->getEtichettaSwitch($switch);
        $file = fopen("output/" . $etichetta[0][0] . ".csv","w");
        fputcsv($file, array("Numero_porta", "Cavo", "Dispositivo"));
        for($i = 0; $i < count($links); $i++) {
            fputcsv($file, array($links[$i][1], $links[$i][5], $links[$i][7]));
        }
        fclose($file);
        $this->view->render('viewer/links', $links, $etichetta);
    }

    function logout() {
        Session::destroy();
        header('location: ../index');
        exit;
    }
}
?>