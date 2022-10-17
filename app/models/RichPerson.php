<?php
  class Country {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getRichestPeople() {
      $this->db->query("SELECT * FROM `RichestPeople`;");

      $result = $this->db->resultSet();

      return $result;
    }
  }

?>