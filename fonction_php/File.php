<?php

// fichier
class file {
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

//objet
$file = new file








?>