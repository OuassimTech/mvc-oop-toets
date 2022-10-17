<?php
  class RichPerson {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getRichestPeople() {
      $this->db->query("SELECT * FROM `RichestPeople`;");

      $result = $this->db->resultSet();

      return $result;
    }

    public function deleteRichPerson($Id) {
      $this->db->query("DELETE FROM RichPeople WHERE Id = :Id");
      $this->db->bind("Id", $Id, PDO::PARAM_INT);
      return $this->db->execute();
    }
  }

?>