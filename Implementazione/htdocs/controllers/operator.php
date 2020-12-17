<?php
class Operator extends Controller {
    public function __construct() {
        parent::__construct();
        Session::init();
        if(!Session::get('loggedIn')) {
            Session::destroy();
            header('location: ../index');
            exit;
        }else{
            if(Session::get('role') == 0) {
                header('location: ../../admin');
            }else if(Session::get('role') == 2) {
                header('location: ../../viewer');
            }
        }
    }

    function index() {
        $switches = $this->model->showSwitches();
        $this->view->render('operator/index', $switches);
    }

    function addSwitch() {
        $this->view->render('operator/addswitch');
    }

    function addLink($switch) {
        $options = $this->model->getDevicesNCables();
        $this->view->render('operator/addLink', $switch, $options);
    }

    function newSwitch() {
        $data = array($_POST['posizione'], $_POST['modello'], $_POST['etichetta'],$_POST['porte']);
        $this->model->newSwitch($data);
        header("location: index");
    }

    function deleteSwitch($switch) {
        $this->model->deleteLinks($switch);
        $this->model->deleteSwitch($switch);
        header("location: ../index");
    }

    function showSwitchLinks($switch) {
        $links = $this->model->showSwitchLinks($switch);
        $this->view->render('operator/links', $links, $switch);
    }

    function modifySwitch($switch) {
        $switchdata = $this->model->getSwitchData($switch);
        $this->view->render('operator/modifySwitch', $switchdata);
    }

    function changeSwitch() {
        $data = array($_POST['id'], $_POST['posizione'], $_POST['modello'], $_POST['etichetta'],$_POST['porte']);
        $this->model->changeSwitch($data);
        header("location: index");
    }

    function changeLink($switch, $port) {
        $data = array($switch, $port, $_POST['cavo'], $_POST['dispositivo']);
        $this->model->changeLink($data);
        header("location: ../../showSwitchLinks/$switch");
    }

    function newLink($switch) {
        $data = array($switch, $_POST['porta'], $_POST['cavo'], $_POST['dispositivo']);
        $maxPort =  $this->model->getSwitchData($switch);
        if($_POST['porta'] > 0 && $_POST['porta'] <= $maxPort[0][4]) {
            $this->model->newLink($data);
        }
        header("location: ../showSwitchLinks/$switch");
    }

    function deleteLink($switch, $port) {
        $this->model->deleteLink($switch, $port);
        header("location: ../../showSwitchLinks/$switch");
    }

    function modifyLink($switch, $port) {
        $linkdata = $this->model->getLinkData($switch, $port);
        $options = $this->model->getDevicesNCables();
        $this->view->render('operator/modifylink', $linkdata, $options);
    }

    function logout() {
        Session::destroy();
        header('location: ../index');
        exit;
    }
}
?>