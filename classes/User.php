<?php

declare(strict_types=1);
//plus le droit d'instancier user avec abstract (class pas terminer, on peut ajouter des proprietes ou ethodes), ces classes doivent hériter de user
abstract class User {
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
    private function setFullName($firstname,$lastname): void {
       echo $this->firstname . " " . $this->lastname;
    }

    public function getFirstname(): string {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void {
        $this->firstname = strtoupper($firstname);
    }
}

?>