<?php

declare(strict_types=1);

namespace ITCompany\Team;

use ITCompany\Workers\Worker;

class Team
{
    private $teamName;
    private $workers;

    public function __construct(string $teamName)
    {
        $this->teamName = $teamName;
        $this->workers = array();
    }

    public function addWorker(Worker $worker) : void
    {
        $this->workers[] = $worker;
    }

    public function calculateAllSalary() : float
    {
        $allSalary = 0;
        foreach ($this->workers as $worker){
            $allSalary += $worker->getSalary();
        }

        return $allSalary;
    }
}
