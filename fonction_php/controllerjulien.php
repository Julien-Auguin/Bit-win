<?php

// by julien
// utilisateur
class User  
{
    private $_id; 

        public function setId($_id){
            $this->id = $_id;
        }
        public function getId(){
            return $this->id;
        }

    private $_name;

        public function setName($_name){
            $this->name = $_name;
        }
        public function getName(){
            return $this->name;
        }


    private $_mail;

        public function setMail($_mail){
            $this->mail = $_mail;
        }
        public function getMail(){
            return $this->mail;
        }
        

}
// by julien
// Téléverser
class Upload
{
    private $_idUplaod;

        public function setIdupload($_idUpload){
            $this->idUpload = $_idUpload;
        }
        public function getIdUpload(){
            return $this->idUpload;
        }

    private $_sender;

        public function setSender($_sender){
            $this->sender = $_sender;
        }
        public function getSender(){
            return $this->sender;
        }

    private $_recipient;

        public function setRecipient($_recipient){
            $this->recipient = $_recipient;
        }
        public function getRecipient(){
            return $this->recipient;
        }

    private $_link;

        public function setLink($_link){
            $this->link = $_link;
        }
        public function getLink(){
            return $this->link;
        }

    private $_message;

        public function setMessage($_message){
            $this->message = $_message;
        }
        public function getMessage(){
            return $this->message;
        }

    private $_dateUpload;

        public function setDateUpload($_dateUpload){
            $this->dateUpload = $_dateUpload;
        }
        public function getDateUpload(){
            return $this->dateUpload;
        }

    private $_dateExpiration;

        public function setDateExpiration($_dateExpiration){
            $this->dateExpiration = $_dateExpiration;
        }
        public function getDateExpiration(){
            return $this->dateExpiration;
        }


}



// objet

$user = new User;
$upload = new Upload;


?>