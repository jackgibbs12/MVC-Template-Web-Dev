//Does the DB Stuff.

<?php
class Model{

    private $conn;
    private $error=false;

    public function isError(){
        return $this->error!==false;
    }

    public function getError(){
        return $this->error;
    }


}
