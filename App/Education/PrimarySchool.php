<?php
namespace App\Education;

class PrimarySchool extends School {
    private static array $grades = ["CP", "CE1", "CE2", "CM1", "CM2"];

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