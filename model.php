<?php
class Model{

    //Create private conn variable for the connection
    private $conn;

    //Create private error variable and initialise to false
    private $error=false;

    //Check whether there has been an error
    public function isError(){
        return $this->error!==false;
    }

    //If there has been an error, return the error that has occured
    public function getError(){
        return $this->error;
    }

    //Set up the connection to the database
    public function __construct(){
      //Require the connect.php script which contains database credentials
      require_once "Secure/connect.php";

      $this->conn = new mysqli($server, $username, $password, $dbname);
      if ($conn->connect_error){
        die ("Connection failure: " .$this->conn->connect_error);
      }
    }

    //Close the database connection
    public function __destruct(){
        $this->conn->close();
    }
}
