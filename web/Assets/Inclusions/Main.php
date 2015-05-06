<?php
  $siteName = "Heroku-PHP";
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