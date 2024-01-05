<?php 
require_once( APPROOT . '/models/login.php');
class LoginDao{
      private $db;
      private Login $login;
      public function __construct(){
        $this->db=new Database();
        $this->login=new Login();
      }
      
      //function insert
      public function InsertLogin(Login $login){
        $email = $login->getEmail();
        $pass = $login->getPassword();
        $role = $login->getRole();
        $name = $login->getName();
        
        $req = "INSERT INTO login(email, password, role, name)
                VALUES (:email, :password, :role, :name)";
        
        $this->db->query($req);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $pass);
        $this->db->bind(':role', $role);
        $this->db->bind(':name', $name); 
        $res = $this->db->execute();
        
        return $res;
    }
    public function loginIn(Login $login){
      $email=$login->getEmail();
      $pass=$login->getPassword();
      // var_dump($email);
      // var_dump($pass);
      // die();
      $req="SELECT * FROM `login` WHERE email=:email and password=:pass";
      $this->db->query($req);
      $this->db->bind(':email',$email);
      $this->db->bind(':pass',$pass);
      $res = $this->db->single();
      
      
     
      return $res;
    }
    
}