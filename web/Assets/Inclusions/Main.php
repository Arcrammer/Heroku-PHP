<?php
  // Enable bebugging
  $app["debug"] = true;
  error_reporting(E_ALL);
  ini_set('display_errors', true);
  
  // Application-wide Properties
  $siteName = "Heroku-PHP";
  
  // Application-wide Classes
  class Person {
    // Properties
    public $firstName;
    public $middleName;
    public $lastName;
    public $age;
    // Methods
    public function name($first, $middle, $last) {
      if ($first && $middle && $last) {
        $this->firstName = $first;
        $this->middleName = $middle;
        $this->lastName = $last;
        return "{$this->firstName} {$this->middleName} {$this->lastName}";
      } else {
        return "{$this->firstName} {$this->middleName} {$this->lastName}";
      }
    }
  }
?>