<?php

class Job
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    //
     //insert city
     function insert_city($data) {
         
        $this->db->query = ("INSERT INTO city (Name, CountryCode,District,Population) VALUES (:city, :countrycode, :district, :population)");

        $this->db->bind(':city',$data['city']);
        $this->db->bind(':countrycode',$data['countrycode']);
        $this->db->bind(':district', $data['district']);
        $this->db->bind(':population', $data['population']);
        
         //execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }


    //get all data 
    public function getallJobs() {
        $this->db->query("SELECT * FROM city ORDER BY ID DESC ");

        $results = $this->db->resultset();

        return $results;
    }


}
