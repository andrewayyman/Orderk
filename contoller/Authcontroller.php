<?php
require_once '../model/users.php';
require_once '../contoller/DBControllers2.php';
class AUC
{
  
   protected $db;
   //1 : Open connection
   //2 : Run query & Logic
   //3 : Colse connection
   public function login(Users $user)
   {
     $this->db = new DBC;
     if($this->db->openConnection())
     {
          $query = "SELECT * FROM customer where Email='$user->email' and Password='$user->password'";
          $result = $this->db->select($query);
          if($result === false)
          {
            echo 'Error in query';
            return false;
          }
          else
          {
            if(count($result) == 0)
            {
                session_start();
                $_SESSION["errMsg"] = "Wrong Email or password";
                return false;
            }
            else
            {
                session_start();
                $_SESSION["userId"] = $result[0]["id"];
                $_SESSION["userName"] = $result[0]["name"];
                $_SESSION["userRole"] = $result[0]["roleid"];
                $this->db->closeConnection();
                return true;
            }
          }

     }
     else
     {
        echo 'Error in database connection';
        return false;
     }
   }


   public function register(Users $user)
   {
     $this->db =new DBC;
     if($this->db->openConnection())
     {

      $query = "INSERT INTO customer VALUES('',  '$user->firstname','$user->email', '$user->password','','','', 2)";
        $result=$this->db->insert($query);
       if($result != false)
       {
        session_start();
        $_SESSION["userId"] = $result;
        $_SESSION["userName"] = $user->firstname;
        $_SESSION["userRole"] = "Client";
        $this->db->closeConnection();
                return true;
       }
       else
       {
        $_SESSION["errMsg"] = "something went wromg!! - try again later";
        return false;
       }
     }
     else
     {
      echo 'Error in database connection';
        return false;
     }
  
   }
  






}








?>