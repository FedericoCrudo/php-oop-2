<?php

class User{
    public $id;
    public $nome;
    public $cognome;
    public $password;
    public $data;
    public $post;
    public function setID(){
     
        $this->id=rand(0,100);
    }
    public function __construct($_nome,$_cognome,$_password){
        $this->nome=$_nome;
        $this->cognome=$_cognome;
        $this->password=$_password;
    }

}

$Federico= new User('Federico','Crudo','password');
$Federico->setID();
$Lorenzo= new User('Lorenzo','Licci','lorenzo');
$Lorenzo->setID();
$raccolta=[];
array_push($raccolta,$Federico,$Lorenzo);