<?php
class Person {
    private $firstName;
    private $lastName;

    /**
     * Person constructor.
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function showFullName() {
        return $this->lastName . $this->firstName;
    }
}
