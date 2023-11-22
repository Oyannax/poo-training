<?php

namespace App\Education;

use DateTime;

class Student extends People
{
    private DateTime $birthdate;
    private int $age;
    private int $grade;

    public function __construct(string $lastname, string $firstname, DateTime $birthdate, int $grade, string $school = '')
    {
        parent::__construct($lastname, $firstname, $school);
        $this->birthdate = $birthdate;
        $this->grade = $grade;
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

    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }
    public function setBirthdate(DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    public function getAge(DateTime $birthdate)
    {
        if (isset($this->birthdate)) {
            $interval = $birthdate->diff(new DateTime('now'));
            return $this->age = $interval->format('%y');
        }
    }

    public function getGrade(): int
    {
        return $this->grade;
    }
    public function setGrade(int $grade): void
    {
        $this->grade = $grade;
    }
}
