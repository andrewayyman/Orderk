<?php 
 
class DBController 
{ 
    public $dbHost="localhost";
    public $dbUser="root";
    public $dbPassword="";
    public $dbName="orderk";
    public $connection;

    public function __construct() {
        $this->connection=mysqli_connect( $this->dbHost, $this->dbUser, $this->dbPassword,$this->dbName);
        if(!$this->connection) {
            die("ERROR".mysqli_connect_error());
    }
    }
    public function insert($query) {      // insert data into a table in db
        if(mysqli_query($this->connection,$query)) {
            return "added succes";
        }
        else {
            die("ERROR".mysqli_error($this->connection));
     }

}
function read($query) {                 // read data from a table in db
    $result = mysqli_query($this->connection,$query);
    while($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    if(!empty($data)) {
        return $data;
    }
}


// function delete($table,$id) {                 // delete data from a table in db with id
//     $query= "DELETE FROM $table WHERE 'id'='$id' ";
//     if(mysqli_query($this->connection,$query)) {
//         return "deleted succes";
//     }
//     else {
//         die("ERROR".mysqli_error($this->connection));
//  }


// }

}

?>