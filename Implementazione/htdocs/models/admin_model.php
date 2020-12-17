<?php
    class Admin_Model extends Model {
        function __construct() {
            parent::__construct();
        }

        function showUsers() {
            $query = $this->db->prepare("SELECT * FROM utente, ruolo WHERE utente.ruolo_id = ruolo.id;");
            $query->execute();
            $users = $query->fetchAll();
            return $users;
        }

        function showCables() {
            $query = $this->db->prepare("SELECT * FROM cavo;");
            $query->execute();
            $cables = $query->fetchAll();
            return $cables;
        }

        function showDevices() {
            $query = $this->db->prepare("SELECT * FROM dispositivo;");
            $query->execute();
            $devices = $query->fetchAll();
            return $devices;
        }

        function deleteUser($user) {
            $query = $this->db->prepare("DELETE FROM utente WHERE nome=:us;");
            $query->execute(array(
                ':us' => $user
            ));
        }

        function deleteCable($cable) {
            $query = $this->db->prepare("DELETE FROM cavo WHERE id=:cab;");
            $query->execute(array(
                ':cab' => $cable
            ));
        }

        function deleteDevice($device) {
            $query = $this->db->prepare("DELETE FROM dispositivo WHERE id=:id;");
            $query->execute(array(
                ':id' => $device
            ));
        }

        function getUserData($user) {
            $query = $this->db->prepare("SELECT * FROM utente, ruolo WHERE utente.ruolo_id = ruolo.id AND utente.nome=:us;");
            $query->execute(array(
                ':us' => $user
            ));
            $userdata = $query->fetchAll();
            return $userdata;
        }

        function getCableData($cable) {
            $query = $this->db->prepare("SELECT * FROM cavo WHERE id=:cab;");
            $query->execute(array(
                ':cab' => $cable
            ));
            $cabledata = $query->fetchAll();
            return $cabledata;
        }

        function getDeviceData($device) {
            $query = $this->db->prepare("SELECT * FROM dispositivo WHERE id=:dev;");
            $query->execute(array(
                ':dev' => $device
            ));
            $devicedata = $query->fetchAll();
            return $devicedata;
        }

        function changeUser($data) {
            $query = $this->db->prepare("UPDATE utente SET nome=:nom, password_utente=MD5(:pw), ruolo_id=:rl WHERE nome=:nm;");
            $query->execute(array(
                ':nom' => $data[1],
                ':pw' => $data[2],
                ':rl' => $data[3],
                ':nm' => $data[0]
            ));
        }

        function changeNtPass($data) {
            $query = $this->db->prepare("UPDATE utente SET nome=:nom, ruolo_id=:rl WHERE nome=:nm;");
            $query->execute(array(
                ':nom' => $data[1],
                ':rl' => $data[2],
                ':nm' => $data[0]
            ));
        }

        function changeMainUser($data) {
            $query = $this->db->prepare("UPDATE utente SET password_utente=MD5(:pw) WHERE nome=:nm;");
            $query->execute(array(
                ':nm' => $data[0],
                ':pw' => $data[1]
            ));
        }

        function changeCable($data) {
            $query = $this->db->prepare("UPDATE cavo SET cavo=:cv WHERE id=:id;");
            $query->execute(array(
                ':cv' => $data[1],
                ':id' => $data[0]
            ));
        }

        function changeDevice($data) {
            $query = $this->db->prepare("UPDATE dispositivo SET dispositivo=:disp WHERE id=:id;");
            $query->execute(array(
                ':disp' => $data[1],
                ':id' => $data[0]
            ));
        }

        function newUser($data) {
            $query = $this->db->prepare("INSERT INTO utente (nome, password_utente, ruolo_id) VALUES (:nome, MD5(:pw), :id);");
            $query->execute(array(
                ':nome' => $data[0],
                ':pw' => $data[1],
                ':id' => $data[2]
            ));
        }

        function newCable($data) {
            $query = $this->db->prepare("INSERT INTO cavo (cavo) VALUES (:cav);");
            $query->execute(array(
                ':cav' => $data[0]
            ));
        }

        function newDevice($data) {
            $query = $this->db->prepare("INSERT INTO dispositivo (dispositivo) VALUES (:disp);");
            $query->execute(array(
                ':disp' => $data[0]
            ));
        }
    }
?>