<?php

  // print_r();
class Pages extends Controller {
    private $login;
    private $client ;

    public function __construct() {
        $this->login = $this->model('loginDao');
        $this->client = $this->model('clientDao');
    }

    public function index() {
        $data = [
            'title' => 'OOP',
        ];

        $this->view('pages/home', $data);
    }

    public function login() {
        $data = [
            'title' => 'login',
        ];
        $this->view('pages/login');
    }

    public function signUp() {
        $data = [
            'title' => 'signUp',
        ];
        $this->view('pages/signUp');
    }

    public function client() {

     if(!empty($_SESSION['email'])){
      $email = $_SESSION['email'];
      $data = [
        'title' => 'client',
        'email' => $email,
        'client'=> $this->client->getAll()
    ];

  
    $this->view('pages/client', $data);
     }
      
    
    else{
      header('Location: ' . URLROOT . '/pages/login');
    }
   }
}
?>