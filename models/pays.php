<?php
    class Pays {
        private $id, $name, $description, $status, $img;

        // Constructor
        function __construct($name = "", $description = "", $status = 0, $img = "") {
            $this->name = $name;
            $this->description = $description;
            $this->status = $status;
            $this->img = $img;
        }

        // Getter methods

        public function getName() {
            return $this->name;
        }

        public function getDescription() {
            return $this->description;
        }

        public function getStatus() {
            return $this->status;
        }

        public function getImg() {
            return $this->img;
        }

        // Setter methods


        public function setName($name) {
            $this->name = $name;
        }

        public function setDescription($description) {
            $this->description = $description;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function setImg($img) {
            $this->img = $img;
        }
    }
?>