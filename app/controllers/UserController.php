<?php

  class UserController extends Controller {
    private $login ;
    public function __construct(){
        $this->login =$this->model('loginDao');
     
  
      }
      public function LogOut(){
        if(isset($_POST['logOut']) && !empty($_SESSION['email'])){
            $_SESSION['email']="";
            unset($_SESSION['email']);
            session_destroy();
    
 
            header('location: '.URLROOT.'/pages/login');
            
            // For testing, echo a message
            // echo "Logged out successfully!";
        }
        if($_SESSION['email']==""){
            
            header('location: '.URLROOT.'/pages/login');
        }
    }
    
      public function loginUser(){
        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $pass = $_POST['pass'];
    
            $login = new Login();
            $login->setEmail($email);
            $login->setPassword($pass);
    
          
            if($this->login->loginIn($login)){
              $_SESSION['email']=$email;
                header('location: '.URLROOT.'/pages/client');
            } else {
              
                header('location: '.URLROOT.'/pages/login');
            }
        }
    }

    public function addlogin(){
        
      if(isset($_POST['add'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $role=$_POST['role'];
        $login = new Login();
        $login->setName($name);
        $login->setEmail($email);
        $login->setPassword($pass);
        $login->setRole($role);
     $res=  $this->login->InsertLogin($login);
     if($res){
        header('location: '.URLROOT.'/pages/login');   

     }
       header('location: '.URLROOT.'/pages/signUp');   
      }
      }
    }