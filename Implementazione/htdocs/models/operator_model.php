<?php
    class Operator_Model extends Model {
        public function __construct() {
            parent::__construct();
        }
        
        public function showSwitches() {
            $query = $this->db->prepare("SELECT * FROM switch;");
            $query->execute();
            $switches = $query->fetchAll();
            return $switches;
        }

        public function showSwitchLinks($switch) {
            $query = $this->db->prepare("SELECT * FROM collegamento, cavo, dispositivo WHERE cavo_id=cavo.id AND dispositivo_id=dispositivo.id AND switch_id=:id;");
            $query->execute(array(
                ':id' => $switch
            ));
            $links = $query->fetchAll();
            return $links;
        }

        public function newSwitch($data) {
            $query = $this->db->prepare("INSERT INTO switch (posizione, modello, etichetta, numero_porte) VALUES (:pos, :mod, :et, :nmp);");
            $query->execute(array(
                ':pos' => $data[0],
                ':mod' => $data[1],
                ':et' => $data[2],
                ':nmp' => $data[3]
            ));
        }

        public function deleteLinks($switch) {
            $query = $this->db->prepare("DELETE FROM collegamento WHERE switch_id=:id;");
            $query->execute(array(
                ':id' => $switch
            ));
        }

        public function deleteSwitch($switch) {
            $query = $this->db->prepare("DELETE FROM switch WHERE id=:id;");
            $query->execute(array(
                ':id' => $switch
            ));
        }

        public function getSwitchData($switch) {
            $query = $this->db->prepare("SELECT * FROM switch WHERE id=:id;");
            $query->execute(array(
                ':id' => $switch
            ));
            $switchdata = $query->fetchAll();
            return $switchdata;
        }

        public function changeSwitch($data) {
            $query = $this->db->prepare("UPDATE switch SET posizione=:pos, modello=:mod, etichetta=:et, numero_porte=:po WHERE id=:id;");
            $query->execute(array(
                ':id' => $data[0],
                ':pos' => $data[1],
                ':mod' => $data[2],
                ':et' => $data[3],
                ':po' => $data[4]
            ));
        }

        public function changeLink($data) {
            $query = $this->db->prepare("UPDATE collegamento SET cavo_id=:cab, dispositivo_id=:disp WHERE switch_id=:sw AND numero_porta=:po;");
            $query->execute(array(
                ':sw' => $data[0],
                ':po' => $data[1],
                ':cab' => $data[2],
                ':disp' => $data[3]
            ));
        }

        public function newLink($data) {
            $query = $this->db->prepare("INSERT INTO collegamento VALUES (:switchid, :porta, :cavo, :dispositivo);");
            $query->execute(array(
                ':switchid' => $data[0],
                ':porta' => $data[1],
                ':cavo' => $data[2],
                ':dispositivo' => $data[3]
            ));
        }

        public function getDevicesNCables() {
            $queryC = $this->db->prepare("SELECT * FROM cavo;");
            $queryC->execute();
            $cables = $queryC->fetchAll();
            $queryD = $this->db->prepare("SELECT * FROM dispositivo;");
            $queryD->execute();
            $devices = $queryD->fetchAll();
            return array($cables, $devices);
        }

        function deleteLink($switch, $port) {
            $query = $this->db->prepare("DELETE FROM collegamento WHERE switch_id=:switch AND numero_porta=:porta;");
            $query->execute(array(
                ':switch' => $switch,
                ':porta' => $port
            ));
        }

        function getLinkData($switch, $port) {
            $query = $this->db->prepare("SELECT * FROM collegamento WHERE switch_id=:switch AND numero_porta=:porta;");
            $query->execute(array(
                ':switch' => $switch,
                ':porta' => $port
            ));
            return $query->fetchAll();
        }
    }
?>