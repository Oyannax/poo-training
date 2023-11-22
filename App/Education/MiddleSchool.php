<?php
namespace App\Education;

class MiddleSchool extends School {
    private static array $grades = ["6ème", "5ème", "4ème", "3ème"];

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