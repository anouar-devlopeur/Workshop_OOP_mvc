<?php
require_once( APPROOT . '/models/client.php');
class ClientDao{
    private $db;
    private client $client;
    public function __construct(){
        $this->db=new Database();
        $this->client=new Client();
    }
    public function getAll(){
        $req="SELECT client.nom nom,client.prenom prenom,login.email email,login.role role FROM client,login where client.id_login=login.id_login";
        $this->db->query($req);
       $res= $this->db->resultset();
       $client=array();
       foreach($res as $row){
        $CLIENT=new Client();
        $CLIENT->setNom($row->nom);
        $CLIENT->setPrenom($row->prenom);
      $CLIENT->getLogin()->setEmail($row->email);
        $CLIENT->getLogin()->setRole($row->role);
        array_push($client,$CLIENT);
       }
  
       return $client;
    
    }
}


?>