<?php

Trait Model{

    use Database;
    protected $limit =10;
    protected $offset ='0';
    protected $order_column = "id";
    protected $order_type = "desc";
    public $errors = [];


    public function first($data,$data_not = []){

        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query="SELECT * FROM $this->table WHERE ";

        foreach($keys as $key){
            $query .= $key . "=:" .$key . " && ";
        }

        foreach($keys_not as $key){
            $query .= $key . "!=:" .$key . " && ";
        }

        $query =trim($query," && ");

        $query .=" limit $this->limit offset $this->offset" ;

        $data = array_merge($data,$data_not);

        $result = $this->query($query,$data);

        if($result)
            return $result[0];

        return false;

    }
    public function findAll(){

        $query="SELECT * FROM $this->table ";

        $query .="order by $this->order_column $this->order_type limit $this->limit offset $this->offset" ;

        return $this->query($query);

    }
    public function where($data,$data_not = []){

        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query="SELECT * FROM $this->table WHERE ";

        foreach($keys as $key){
            $query .= $key . "=:" .$key . " && ";
        }

        foreach($keys_not as $key){
            $query .= $key . "!=:" .$key . " && ";
        }

        $query =trim($query," && "). " ";

        $query .="order by $this->order_column $this->order_type limit $this->limit offset $this->offset" ;

        $data = array_merge($data,$data_not);

        return $this->query($query,$data);

    }
    public function insert($data)
{
    // Filter out keys that are not allowed in the database table
    if (!empty($this->allowedColumns)) {
        foreach ($data as $key => $value) {
            if (!in_array($key, $this->allowedColumns)) {
                unset($data[$key]); // Remove disallowed columns
            }
        }
    }

    // Prepare the keys and values for the SQL query
    $keys = array_keys($data);
    $query = "INSERT INTO $this->table (" . implode(",", $keys) . ") VALUES (:" . implode(", :", $keys) . ")";

    // Execute the query using the provided data
    $result = $this->query($query, $data);

    // Check if the insert was successful
    if ($result) {
        return true; // Return true if insertion was successful
    } else {
        return false; // Return false if there was an error during insertion
    }
}


    public function update($id, $data, $id_column = 'id') {
        $keys = array_keys($data);
        $columns = implode(' = :', $keys);
        $query = "UPDATE $this->table SET " . $columns . " = :" . implode(', ' . $columns . " = :", $keys) . " WHERE $id_column = :id";
        
        $data['id'] = $id;
        
        return $this->query($query, $data);
    }

    public function delete($id,$id_column = 'id'){
       
        $data[$id_column] = $id;
        $query= "DELETE FROM $this->table WHERE $id_column = :$id_column ";

        $this->query($query,$data);
        
    }   
}