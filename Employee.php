<?php
require_once 'Person.php';

abstract class Employee extends Person {
    private $companyName;

    public function __construct($name, $address, $age, $companyName) {
        parent::__construct($name, $address, $age);
        $this->companyName = $companyName;
    }

    abstract public function earnings();

    public function getCompanyName() { return $this->companyName; }
    public function setCompanyName($companyName) { $this->companyName = $companyName; }

    public function __toString() {
        return parent::__toString() . ", Company: $this->companyName";
    }
}
?>
