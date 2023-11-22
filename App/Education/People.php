<?php

namespace App\Education;

class People
{
    protected string $lastname;
    protected string $firstname;
    protected string $school;

    public function __construct(string $lastname, string $firstname, string $school)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->school = $school;
    }

    public function getLastName(): string
    {
        return $this->lastname;
    }
    public function setLastName(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getFirstName(): string
    {
        return $this->firstname;
    }
    public function setFirstName(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getSchool(): string
    {
        return $this->school;
    }
    public function setSchool(string $school): void
    {
        $this->school = $school;
    }
}
