<?php

declare(strict_types=1);

namespace ITCompany\Workers\Designers;

use ITCompany\Salary\SalaryType;
use ITCompany\Workers\Worker;

class Designer extends Worker
{
    public function __construct(string $firstName, string $secondName, string $middleName, SalaryType $salaryType)
    {
        parent::__construct($firstName, $secondName, $middleName, $salaryType);
    }
}
