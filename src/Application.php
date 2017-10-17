<?php

declare(strict_types=1);

namespace ITCompany;

use ITCompany\Workers\Designers\Designer;
use ITCompany\Workers\Developers\MiddleDeveloper;
use ITCompany\Workers\Developers\SeniorDeveloper;
use ITCompany\Workers\PageMakers\PageMaker;
use ITCompany\Salary\FixedSalaryType;
use ITCompany\Salary\PerHourSalaryType;
use ITCompany\Team\Team;

class Application
{
    public function run(){
        $designer = new Designer("Jone","Jhonson","Whechester",new FixedSalaryType(3000));
        $seniorDeveloper = new SeniorDeveloper("Natasha","Pishtruk","Borisovna", new PerHourSalaryType(10,60));
        $firstMiddleDeveloper = new MiddleDeveloper("Max","Chervez","Ilich", new FixedSalaryType(1000));
        $secondMiddleDeveloper = new MiddleDeveloper("Ilon","Max","Thomas", new FixedSalaryType(1000));
        $pageMaker = new PageMaker("Ilia", "Netishonok","Aleksandrovich",new PerHourSalaryType(5,120));

        $team = new Team("X");

        $team->addWorker($designer);
        $team->addWorker($seniorDeveloper);
        $team->addWorker($firstMiddleDeveloper);
        $team->addWorker($secondMiddleDeveloper);
        $team->addWorker($pageMaker);


        echo "Team salary: ".$team->calculateAllSalary();
    }
}
