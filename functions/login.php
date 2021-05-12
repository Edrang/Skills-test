<?php
    require_once './config/connection.php';

    class Login
    {
        private $_db;
        private $_conn;
        private $_table = "users";

        public function __construct()
        {
            $this->_db = Database::getInstance();
            $this->_conn = $this->_db->getConnection();
        }

        public function registerController($data)
        {   
            $string = "INSERT INTO ".$this->_table." (`";
            $string .= implode("`,`", array_keys( $data))."`) VALUES(";
            $string .= "'".implode("',", array_values($data))."')";

            if(mysqli_query($this->_conn, $string))
                return true;
            else
                return false;
        }
    }
?>