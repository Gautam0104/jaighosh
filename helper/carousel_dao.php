<?php
class CarouselDao{
    public $dbconn;

    function __construct($dbconn){
        $this->dbconn=$dbconn;
    }

    function get_carousel(){
        $query = "Select * from carousel";
        $statement = $this->dbconn->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;
    }
}
 ?>