<?php

declare(strict_types=1);

namespace ITCompany\Workers;

use ITCompany\Salary\SalaryType;

abstract class Worker
{
    private $firstName;
    private $secondName;
    private $middleName;
    private $salaryType;

    public function __construct(string $firstName, string $secondName, string $middleName, SalaryType $salaryType)
    {
        $this->firstName = $firstName;
        $this->secondName = $secondName;
        $this->middleName = $middleName;
        $this->salaryType = $salaryType;
    }

    public function getSalary() : float
    {
        return $this->salaryType->calculateSalary();
    }
}
