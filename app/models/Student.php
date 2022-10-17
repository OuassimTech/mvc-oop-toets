<?php
/**
 *  Student model hoort bij de students controller 
 *
 */

 class Student 
 {
    // Properties
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getLessons()
    {
        $this->db->query(
            'SELECT lessen.*, leerling.* 
             FROM lessen 
             INNER JOIN leerling 
             ON leerling.Id = lessen.leerling 
             AND leerling.Id = 3'
        );
        $result = $this->db->resultSet();
        return $result;
    }

    public function addRemark($post)
    {
        $this->db->query(
            "INSERT INTO opmerkingen (ID, 
                                      Les, 
                                      Opmerkingen) 
             VALUES                  (NULL, 
                                      :Id, 
                                      :remark);"
        );
       
        $this->db->bind(':Id', $post['Id'], PDO::PARAM_STR);
        $this->db->bind(':remark', $post['remark'], PDO::PARAM_STR);

        return $this->db->execute();
    }
 }