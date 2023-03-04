<?php
//namespace Users;
require '../Includes/db.inc.php';



class Auth
{
    private $db;

    public function __construct($conn)
    {
        $this->db = $conn;
    }


    public function escapeString($biotext)
    {
        $biotext = $this->db->quote($biotext);
        return $biotext;
    }

    //check if user  is logged in auth
    /*  public function isloggedin(){
        if($_SESSION['loggedin'] == true ){
             return true;
           }        
       }

      */
    public function custom_trim(?string $value)
    {
        return trim($value ?? '');
    }


    public function validLetters($name)
    {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            return false;
        } else {
            return true;
        }
    }


    //redirect the user  //auth
    public function redirect(string $url): never
    {
        header('location:' . $url);
        exit();
    }

    //log out user   //auth
    public function logout($sessionid)
    {
        $sql2 = "UPDATE administrator SET Status='offline' WHERE id=:sessionid ";
        $stmt = $this->db->prepare($sql2);
        $stmt->bindParam(":sessionid", $sessionid);
        if ($stmt->execute()) {
            session_destroy();
            //unset($_SESSION['id'] );
            unset($sessionid);
            return true;
        }
    }
    //validate input forms //auth
    public function validate($input)
    {
        $input = trim($input ?? "");
        $input = stripslashes($input ?? "");
        $input = htmlspecialchars($input ?? '');
        return $input;
    }
    //filter email  auth
    public function filteremail(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //  echo 'correct email address';
            return true;
        } else {
            //   echo "invalid email address";
            return false;
        }
    }

    public function matchpassword($password, $confirmpass)
    {
        if ($password !== $confirmpass) {
            //   echo "password does not match";
            return false;
        } else {
            //    echo "password is the same";
            return true;
        }
    }

    public function secretKey($defaultKey, $userKey)
    {
        if ($defaultKey !== $userKey) {
            //   echo "secretkey not correct";
            return false;
        } else {
            //    echo "secretkey is the correct";
            return true;
        }
    }


    public function passwordlength($password)
    {
        if (strlen($password) < 6) {
            // echo "password length is too small";
            return false;
        } else {
            //  echo "exactly";
            return true;
        }
    }

    public function phoneNolength($phoneno)
    {
        if (strlen($phoneno) < 11 || strlen($phoneno) > 11) {
            // echo "phoneno is too short or to long";
            return false;
        } else {
            //  echo "phoneno is appropriate";
            return true;
        }
    }

    public function createOTP($userid, $otp)
  {
    $sql = "UPDATE user SET otp=:otp WHERE id=:userid";
    $stmtupdate = $this->db->prepare($sql);
    $stmtupdate->bindParam(":userid", $userid);
    $stmtupdate->bindParam(":otp", $otp);
    if ($stmtupdate->execute()) {
      return true;
    } else {
      return false;
    }
  }


    //authenticate otp
    public function authOTP($sessionid, $otp)
    {
        try {
            $sql = "SELECT * FROM users WHERE id =:userid";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':userid', $sessionid);
            $stmt->execute();
            // Check if row is actually returned
            if ($stmt->rowCount() > 0) {
                //Return row as an array indexed by both column name
                $returned_row = $stmt->fetch(PDO::FETCH_ASSOC);
                // Verify hashed otp against entered otp
                if ($otp == $returned_row['otp']) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo  $e->getMessage();
        }
    }  //otp


    //authenticate password
    public function authPassword($sessionid, $password)
    {
        try {

            $sql = "SELECT * FROM anonyusers WHERE id =:userid";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':userid', $sessionid);
            $stmt->execute();
            // Check if row is actually returned
            if ($stmt->rowCount() > 0) {
                //Return row as an array indexed by both column name
                $returned_row = $stmt->fetch(PDO::FETCH_ASSOC);
                // Verify hashed password against entered password
                if (password_verify($password, $returned_row['password'])) {
                    return true;
                } else {

                    return false;
                }
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo  $e->getMessage();
        }
    }  //login



}
