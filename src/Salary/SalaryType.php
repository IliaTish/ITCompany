<?php

declare(strict_types=1);

namespace ITCompany\Salary;

interface SalaryType
{
    public function calculateSalary() : float;
}
