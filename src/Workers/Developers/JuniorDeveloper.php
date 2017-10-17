<?php

declare(strict_types=1);

namespace ITCompany\Workers\Developers;

use ITCompany\Salary\SalaryType;

class JuniorDeveloper extends Developer
{
    public function __construct(string $firstName, string $secondName, string $middleName, SalaryType $salaryType)
    {
        parent::__construct($firstName, $secondName, $middleName, $salaryType);
    }
}
