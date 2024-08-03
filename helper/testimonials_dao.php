<?php 
class TestimonialsDao{
    public $dbconn;

    function __construct($dbconn){
        $this->dbconn=$dbconn;
    }

    function get_testimonials(){
        $query = "Select * from testimonials";
        $statement = $this->dbconn->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
}
?>