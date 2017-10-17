<?php

declare(strict_types=1);

namespace ITCompany\Salary;

class PerHourSalaryType implements SalaryType
{
    private $salaryPerHour;
    private $hours;

    public function __construct(float $salaryPerHour, int $hours)
    {
        $this->salaryPerHour = $salaryPerHour;
        $this->hours = $hours;
    }

    public function calculateSalary() : float
    {
        return $this->hours*$this->salaryPerHour;
    }
}

