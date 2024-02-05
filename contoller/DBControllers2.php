<?php

class DBC
{
   public $dbHost = "localhost";
   public $dbName = "orderk";
   public $dbUser="root";
   public $dbPassword = "";
   public $connection;
  
   public function openConnection()
   {
     $this->connection = new mysqli($this->dbHost,$this->dbUser,$this->dbPassword,$this->dbName);
     if($this->connection->connect_error)
     {
          echo "Error in connection : ".$this->connection->connect_error;
          return false;
     }
     else
     {
        return true;
     }
   }

   public function closeConnection()
   {
     if($this->connection)
     {
        $this->connection->close();
     }
     else
     {
        echo 'Connection is not open';
     }
     
   }
   
   public function select($qry)
   {
      $result = $this->connection->query($qry);
      if(!$result)
      {
         echo 'Error : '.mysqli_error($this->connection);
         return false;
      }
      else
      {
        return $result->fetch_all(MYSQLI_ASSOC);
      }
   }

   public function insert($qry)
   {
      $result = $this->connection->query($qry);
      if(!$result)
      {
         echo 'Error : '.mysqli_error($this->connection);
         return false;
      }
      else
      {
         return $this->connection->insert_id;
      }
   }


}








?>