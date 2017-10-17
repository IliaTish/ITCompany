<?php

declare(strict_types=1);

namespace ITCompany\Salary;

class FixedSalaryType implements SalaryType
{
    private $salary;

    public function __construct(float $salary)
    {
        $this->salary = $salary;
    }

    public function calculateSalary() : float
    {
        return $this->salary;
    }
}

