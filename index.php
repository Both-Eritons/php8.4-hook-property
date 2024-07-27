<?php

class User
{
  
  public function __construct() {}

  public string $email{
    set {
      if(!filter_var($value, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("email is wrong");
      }
    
      $this->email = $value;
    }

    get => $this->email;
  }

}

$user = new User();
try {
  $user->email = "eriton@gmail.com";
  echo $user->email.PHP_EOL;
} catch(Exception $e) {
  echo $e->getMessage().PHP_EOL;
}
