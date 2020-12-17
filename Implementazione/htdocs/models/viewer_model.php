<?php
    class Viewer_Model extends Model {
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
            $query = $this->db->prepare("SELECT * FROM collegamento, cavo, dispositivo WHERE cavo_id=cavo.id AND dispositivo_id=dispositivo.id AND switch_id=:sw;");
            $query->execute(array(
                ':sw' => $switch
            ));
            $links = $query->fetchAll();
            return $links;
        }

        public function getEtichettaSwitch($switch) {
            $query = $this->db->prepare("SELECT etichetta FROM switch WHERE id=:id;");
            $query->execute(array(
                ':id' => $switch
            ));
            $etichetta = $query->fetchAll();
            return $etichetta;
        }
    }
?>