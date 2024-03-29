<?php
    class Database {
        private static $instance = NULL;
        private $db = NULL;

        private function __construct() {
            $this->db = new PDO('sqlite:../database/invicta.db'); //don't change this, somehow it's the only thing that makes it work
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->query('PRAGMA foreign_keys = ON');
            if (NULL == $this->db) 
                throw new Exception("Failed to open database");
        }

        public function db() {
            return $this->db;
        }

        static function instance() {
            if(self::$instance == NULL) {
                self::$instance = new Database();
            }

            return self::$instance;
        }
    }
?>