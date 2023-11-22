<?php
namespace App\Education;

class HighSchool extends School {
    private static array $grades = ["Seconde", "Première", "Terminale"];

    public function __construct(string $name, string $city)
    {
        parent::__construct($name, $city);
    }

    public static function getGrades(): array
    {
        return self::$grades;
    }
    public static function setGrades(array $grades): void
    {
        self::$grades = $grades;
    }
}