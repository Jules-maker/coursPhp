<?php 

abstract class AbstractUser {
    public function __construct(
        private string $firstname,
        private string $lastname,
        private string $email,
    ) {
    }

    public function displayUser() {
        echo $this->getFullName() . " " . $this->email;
    }

    private function getFullName(): string {
        return $this->firstname . " " . $this->lastname;
    }

    //getEmail
    public function getEmail(): string {
        return $this->email;
    }
    //setEmail
    public function setEmail(string $email): void {
        $this->email = $email;
    }
    //getFirstname
    public function getFirstname(): string {
        return $this->firstname;
    }
    //setFirstname
    public function setFirstname(string $firstname): void {
        $this->firstname = strtoupper($firstname);
    }
    //getLastname
    public function getLastname(): string {
        return $this->lastname;
    }
    //setLastname
    public function setLastname(string $lastname): void {
        $this->lastname = $lastname;
    }

  
}




?>