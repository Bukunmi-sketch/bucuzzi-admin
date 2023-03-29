<?php

//namespace pay;

require '../Includes/db.inc.php';
 // session_start();

   class Dashboard{
        private $db;
       
        public function __construct($conn)
        {
            $this->db= $conn;
        }

        public function countUsers(){
          $query="SELECT * FROM anonyusers";
          $stmt=$this->db->prepare($query);
          $stmt->execute();
          return $stmt->rowCount();
        }
      
        public function countPosts(){
          $query="SELECT * FROM categories";
          $stmt=$this->db->prepare($query);
          $stmt->execute();
          return $stmt->rowCount();
        }
      
        public function verifiedUsers(){
          $query="SELECT SUM(amount) AS amount FROM orders WHERE payment_status=:status ";
          $status="paid";
          $statement=$this->db->prepare($query);
          $statement->bindParam(':status',$status );
          $statement->execute();
          return $statement;
        }

        public function countImages(){
          $query="SELECT MAX(amount) AS amount,customers_name FROM orders WHERE payment_status=:status ";
          $status="paid";
          $statement=$this->db->prepare($query);
          $statement->bindParam(':status',$status );
          $statement->execute();
          return $statement;
        }

        public function postWithHighestLikes(){
          $query="SELECT MIN(amount) AS amount,customers_name FROM orders WHERE payment_status=:status ";
          $status="paid";
          $statement=$this->db->prepare($query);
          $statement->bindParam(':status',$status );
          $statement->execute();
          return $statement;
        }

        public function lastSignupUsers(){
          $query="SELECT * FROM orders ORDER BY id ASC  LIMIT 21";
          $statement=$this->db->prepare($query);
          $statement->execute();
          return $statement;
        }
       
        public function mostFollowedUsers(){
          $query="SELECT * FROM orders";
          $statement=$this->db->prepare($query);
          $statement->execute();
          return $statement->rowCount();
        }
        
        public function noOfChats(){
          $query="SELECT * FROM orders WHERE  payment_status=:status ";
          $status="unpaid";
          $statement=$this->db->prepare($query);
          $statement->bindParam(':status',$status );
          $statement->execute();
          return $statement->rowCount();
        }

        public function totalNoOFChats(){
          $query="SELECT * FROM orders WHERE  payment_status=:status ";
          $status="paid";
          $statement=$this->db->prepare($query);
          $statement->bindParam(':status',$status );
          $statement->execute();
          return $statement->rowCount();
        }
      
      
     public function countNewPayment(){
      $query="SELECT * FROM orders WHERE  notify_newpay=:newklump OR notify_newpay=:newFlutter";
      $newklump="unreadKlump";
      $newFlutter="unreadFlutterwave";
      $statement=$this->db->prepare($query);
      $statement->bindParam(':newklump',$newklump );
      $statement->bindParam(':newFlutter',$newFlutter);
      $statement->execute();
      return $statement->rowCount();
    }   
            
     
     public function countKlumpPayment(){
      $query="SELECT * FROM orders WHERE  payment_type=:type ";
      $type="klump";
      $statement=$this->db->prepare($query);
      $statement->bindParam(':type',$type );
      $statement->execute();
      return $statement->rowCount();
    }   
    
    public function countFlutterwavePayment(){
      $query="SELECT * FROM orders WHERE  payment_type=:type ";
      $type="flutterwave";
      $statement=$this->db->prepare($query);
      $statement->bindParam(':type',$type );
      $statement->execute();
      return $statement->rowCount();
    }   

    public function countUndeliveredOrders(){
      $query="SELECT * FROM orders WHERE  order_status=:status ";
      $status="undelivered";
      $prepnotify=$this->db->prepare($query);
      $prepnotify->bindParam(':status',$status );
      $prepnotify->execute();
      return $prepnotify->rowCount();
    }          
  
    public function countdeliveredOrders(){
      $query="SELECT * FROM orders WHERE  order_status=:status ";
      $status="delivered";
      $prepnotify=$this->db->prepare($query);
      $prepnotify->bindParam(':status',$status );
      $prepnotify->execute();
      return $prepnotify->rowCount();
    }          
  

}        

?>