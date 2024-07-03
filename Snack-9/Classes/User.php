<?php 
class User {
private $email;
private $password;

public function __construct($email, $password) {
    $this->email = $email;
    $this->password = $password;
}

public function getEmail($email){
    return $this->email;
}

public function setEmail($email){
    $this->email = $email;
}

public function getPassword($password){
    return $this->password;
}

public function setPassword($password){
    $this->password = $password;
}
} 
?>