<?php

$url = 'localhost/php/dev/bitwin';

// by Laure
class Mail
{
  private $_sender;
  private $_recipient;
  private $_object;
  private $_content;
  private $_link;

  public function getSender() {
    return $this->sender;
  };
  public function setSender($_sender) {
    $this->sender = $_sender;
  }

  public function getRecipient() {
    return $this->recipient;
  };
  public function setRecipient($_recipient) {
    $this->recipient = $_recipient;
  }

  public function getObject() {
    return $this->object;
  };
  public function setObject($_object) {
    $n = 0;
    foreach ($files as $file {
      $n++;
    };
    $this->object = $this->$_sender . "has uploaded" . $n . "files for you";
  }

  public function getContent() {
    return $this->content;
  };
  public function setContent($_content) {
    $files = [];
    foreach ($files as $file {
      $files[] = $file;
    };
    $this->content = $_content;
  }

  public function getLink() {
    return $this->link;
  };
  public function setLink($_link) {
    $this->link = $url . '/' . $_folder;
  }
}

$mail = new Mail;

$mail->_sender = $_SESSION['mailSender'];
$mail->_recipient = $_SESSION['mailRecipient'];

// fichier
// by Samuel
class File {
  private $_id;
  private $_nameFile;
  private $_size;
  private $_Folder;
  private $_IdUpload;

  // recupere l'id_file in file_upload
  public function setId($_Id){
      $this->Id = $_Id;
  }
  public function getId(){
      return $this->Id;
  }

  //send file_name in file_upload
  public function setNameFile($_NameFile){
      $this->nameFile = $_nameFile;
  }
  public function getNameFile(){
      return $this->nameFile;
  }

  //send size_file in file_upload
  public function setsize($_size){
      $this->size = $_size;
  }
  public function getsize(){
      return $this->$_size;
  }

  // create and send directory_name in file_upload
  public function setfolder($_folder){
      $this->Folder = $_folder;
  }
  public function getfolder(){
      return $this->folder;
  }

  //recupere l'id_upload in users_upload
  public function setIdUpload($_idUpload){
      $this->idUpload = $_idUpload;
  }
  public function getIdUpload(){
      return $this->idUpload;
  }
}

$file = new file

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
