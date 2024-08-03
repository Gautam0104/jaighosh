<?php
class NewsDao{
    public $dbconn;

    function __construct($dbconn){
        $this->dbconn=$dbconn;
    }

    function get_news(){
        $query = "Select * from latestnews";
        $statement = $this->dbconn->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;
    }
    function insert_test($username){
        try {
            //code...
            $query = "insert into testing (name, title) values (:nAme, :tItle)";
            $statement = $this->dbconn->prepare($query);
            
            $statement->execute([
                'nAme' => $username,
                'tItle' => "Singh"
            ]);
            echo "data inserted successfully";
            return true;   
        } catch (PDOException $e) {
            //throw $e;
            echo "something went wrong" .$e->getMessage();
        }
         
        }
}


?>