<?php
    class Index_Model extends Model {
        public function __construct() {
            parent::__construct();
        }

        public function run() {
            $sth = $this->db->prepare("SELECT * FROM utente WHERE nome = :username AND password_utente = MD5(:password)");
            $sth->execute(array(
                ':username' => $_POST['username'],
                ':password' => $_POST['password']
            ));
            //$data = $sth->fetchAll();

            $count = $sth->rowCount();
            if($count == 1) {

                $sthd = $this->db->prepare("SELECT ruolo_id FROM utente WHERE nome=:no;");
                $sthd->execute(array(
                    ':no' => $_POST['username']
                ));
                $role = $sthd->fetchAll();

                Session::init();
                Session::Set('loggedIn', true);
                Session::Set('user', $_POST['username']);
                Session::Set('role', $role[0][0]);
                if(Session::Get('role') == 0) {
                    header('location: ../admin');
                }else if(Session::Get('role') == 1) {
                    header('location: ../operator');
                }else if(Session::Get('role') == 2) {
                    header('location: ../viewer');
                }
            }else{
                header('location: ../index');
            }
        }
    }
?>