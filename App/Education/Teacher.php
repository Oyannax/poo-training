<?php

namespace App\Education;

class Teacher extends People
{
    private array $subjects;

    public function __construct(string $lastname, string $firstname, array $subjects = [], string $school = '')
    {
        parent::__construct($lastname, $firstname, $school);
        $this->subjects = $subjects;
    }

    public function addSubject(string $subject): void
    {
        $this->subjects[] = $subject;
    }

    public function deleteSubject(int $index): void
    {
        unset($this->subjects[$index]);
    }

    public function introduce(): string
    {
        return "Bonjour, je m'appelle {$this->firstname} {$this->lastname} et j'enseigne à l'école {$this->school} les matières suivantes : " . implode(", ", $this->subjects) . ".";
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getSubjects(): array
    {
        return $this->subjects;
    }
    public function setSubjects(array $subjects): void
    {
        $this->subjects = $subjects;
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
