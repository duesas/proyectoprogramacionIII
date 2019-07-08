<?php
include 'db.php';
class User extends DB{
    private $email;
    private $pass;
    public function userExists($email, $pass){
        
        $query = $this->connect()->prepare('SELECT * FROM Registro WHERE email = :email AND password = :pass');
        $query->execute(['email' => $email, 'pass' => $pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
     
    public function setUser($email){
        $query = $this->connect()->prepare('SELECT * FROM Registro WHERE email = :email');
        $query->execute(['email' => $email]);
        
        foreach ($query as $currentUser) {
            $this->email = $currentUser['email'];
        }
    }
    public function getEmail(){
        return $this->email;
    }
}
?>