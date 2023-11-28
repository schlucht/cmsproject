<?php

trait Model {

    use Database;

   protected $limit = 10; 
   protected $offset = 0; 
   protected $orderType = ' DESC ';
   protected $orderColumn = ' id ';


   public function findAll() {
    $query = "SELECT * FROM {$this->table} ORDER BY {$this->orderColumn} {$this->orderType} LIMIT {$this->limit} OFFSET {$this->offset}";
    echo $query;
    $res = $this->query($query);
    return $res;
   }

    public function where($data, $data_not=[]) {
        $keys = array_keys($data);
        $query = "SELECT * FROM {$this->table} WHERE ";
        $keys_not= array_keys($data_not);
        $str = '';
        foreach ($keys as $key) {
            $str .= $key . ' = :' . $key . ' && ';
        }
        foreach ($keys_not as $key) {
            $str .= $key . ' != :' . $key . ' && ';
        }
        $query .= trim($str, " && ");
        $query .= " ORDER BY {$this->orderColumn} {$this->orderType} LIMIT {$this->limit} OFFSET {$this->offset}";
        $data = array_merge($data, $data_not);
        $res = $this->query($query, $data);
        return $res;
    }
    public function first($data) {

        $res = $this->where($data, $data_not=[]);
        if ($res) {
            return $res[0];
        }
        return false;

    }

    public function insert($data) {
        $data = checkColumn($data);
        $arrkeys = array_keys($data);
        $str = implode(", ", $arrkeys); 
        $strP = implode(", :", $arrkeys);
        $query = "INSERT INTO {$this->table} ({$str}) VALUES (:${strP})";
        $result = $this->query($query, $data);
        return $result;
    }

    public function update($id, $data, $id_column='id') {
       $data = checkColumn($data);
       $arrkeys = array_keys($data);
       $str = "";
       foreach($arrkeys as $key) {
            $str .= $key . " = :" . $key . ", ";
       } 
       $str = trim($str, ", ");

       $query = "UPDATE {$this->table} SET {$str} WHERE {$id_column} = :{$id_column}";
       $arr = array_merge($data, [$id_column => $id]);
       $result = $this->query($query, $arr);
       return $result;
    }

    public function delete($id, $id_column='id') {
       $query = "DELETE FROM {$this->table} WHERE {$id_column} = :{$id_column}";
       $result = $this->query($query, [$id_column => $id]);
        return $result;
        }
    
    private function checkColumn($data) {
        if (!empty($this->allowedColumns)) {
            foreach($data as $key => $value) {
                if(!in_array($key, $this->allowedColumn)){
                    unset($data[$key]);
                }
            }
        }
        return $data;
    } 
}