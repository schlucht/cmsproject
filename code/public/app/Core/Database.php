<?php

 trait Database {

    private function connect() {

        $string = "mysql:host=" . DBHOST . ";dbname=" . DBNAME; 
        $pdo = new PDO($string, DBUSER, DBPW);
        return $pdo;
    }
    public function query($query, $data = []) {
        $con = $this->connect();
        $stmt = $con->prepare($query);

        $check = $stmt->execute($data);
        if($check) {
            $result = $stmt->fetchALl(PDO::FETCH_OBJ);
            if(is_array($result) && count($result)) {
                return  $result;
            }
        }
        return false;
    }
    public function get_row($query, $data = []) {
        $con = $this->connect();
        $stmt = $con->prepare($query);

        $check = $stmt->execute($data);
        if($check) {
            $result = $stmt->fetchALl(PDO::FETCH_OBJ);
            if(is_array($result) && count($result)) {
                return  $result;
            }
        }
        return false;
    }
}
