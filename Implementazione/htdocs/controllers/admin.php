<?php
class Admin extends Controller {
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
            }else if(Session::get('role') == 2) {
                header('location: ../../viewer');
            }
        }
    }

    function index() {
        $users = $this->model->showUsers();
        $this->view->render('admin/index', $users);
    }

    function devices() {
        $devices = $this->model->showDevices();
        $this->view->render('admin/devices', $devices);
    }

    function cables() {
        $cables = $this->model->showCables();
        $this->view->render('admin/cables', $cables);
    }

    function modifyUser($user) {
        $userdata = $this->model->getUserData($user);
        if(!(strcmp($userdata[0][0], "Amministratore") == 0)) {
            if(!(strcmp($userdata[0][0], "Operatore") == 0)) {
                if(!(strcmp($userdata[0][0], "Viewer") == 0)) {
                    if(!(strcmp($userdata[0][0], Session::get('user')) == 0)) {
                        $this->view->render('admin/modifyuser', $userdata);
                    }else{
                        header("location: ../index");
                    }
                }else{
                    header("location: ../index");
                }
            }else{
                header("location: ../index");
            }
        }else{
            header("location: ../index");
        }
    }

    function modifyMainUser($user) {
        $userdata = $this->model->getUserData($user);
        $this->view->render('admin/modifymainuser', $userdata);
                    
    }

    function modifyCable($cable) {
        $cabledata = $this->model->getCableData($cable);
        $this->view->render('admin/modifycable', $cabledata);
    }

    function modifyDevice($device) {
        $devicedata = $this->model->getDeviceData($device);
        $this->view->render('admin/modifydevice', $devicedata);
    }

    function changeUser() {
        $data = array($_POST['vecchioUtente'], $_POST['utente'], $_POST['password'], $_POST['ruolo']);
        if(!(strcmp($data[0], "Amministratore") == 0)) {
            if(!(strcmp($data[0], "Operatore") == 0)) {
                if(!(strcmp($data[0], "Viewer") == 0)) {
                    if(strcmp($_POST['password'], $_POST['vecchiaPassword']) == 0) {
                        $data = array($_POST['vecchioUtente'], $_POST['utente'], $_POST['ruolo']);
                        $this->model->changeNtPass($data);
                    }else{
                        $this->model->changeUser($data);
                    }
                }
            }
        }
        header("location: index");
    }

    function changeMainUser() {
        if(!(strcmp($_POST['password'], $_POST['vecchiaPassword']) == 0)) {
            $data = array($_POST['utente'], $_POST['password']);
            $this->model->changeMainUser($data);
        }
        header("location: index");
    }

    function changeCable() {
        $data = array($_POST['idCavo'], $_POST['cavo']);
        $this->model->changeCable($data);
        header("location: cables");
    }

    function changeDevice() {
        $data = array($_POST['idDispositivo'], $_POST['dispositivo']);
        $this->model->changeDevice($data);
        header("location: devices");
    }

    function deleteUser($user) {
        $username = $this->model->getUserData($user);
        if(!(strcmp($username[0][0], "Amministratore") == 0)) {
            if(!(strcmp($username[0][0], "Operatore") == 0)) {
                if(!(strcmp($username[0][0], "Viewer") == 0)) {
                    if(!(strcmp($username[0][0], Session::get('user')) == 0)) {
                        $this->model->deleteUser($user);
                    }
                }
            }
        }
        header("location: ../index");
    }

    function deleteCable($cable) {
        $this->model->deleteCable($cable);
        header("location: ../cables");
    }

    function deleteDevice($device) {
        $this->model->deleteDevice($device);
        header("location: ../devices");
    }

    function addUser() {
        $this->view->render('admin/adduser');
    }

    function addCable() {
        $this->view->render('admin/addcable');
    }

    function addDevice() {
        $this->view->render('admin/adddevice');
    }

    function newUser() {
        $data = array($_POST['utente'], $_POST['password'], $_POST['ruolo']);
        $this->model->newUser($data);
        header("location: index");
    }

    function newCable() {
        $data = array($_POST['cavo']);
        $this->model->newCable($data);
        header("location: cables");
    }

    function newDevice() {
        $data = array($_POST['dispositivo']);
        $this->model->newDevice($data);
        header("location: devices");
    }

    function logout() {
        Session::destroy();
        header('location: ../../index');
        exit;
    }
}
?>