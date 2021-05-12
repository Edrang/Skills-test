<?php
    include __DIR__ . './config.php';

    class Database
    {
        private $_conn;
        private $_user = DB_USER;
        private $_pass = DB_PASS;
        private $_host = DB_HOST;
        private $_name = DB_NAME;
        private $_instance;

        public function __construct()
        {
            $this->_conn = new mysqli($this->_host, $this->_user, $this->_pass, $this->_name);
        }
    }
?>