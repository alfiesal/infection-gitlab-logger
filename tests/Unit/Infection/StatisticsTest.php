<?php

declare(strict_types=1);

use Alfiesal\InfectionGitlabComment\Infection\Statistics;

it('should create statistic from array', function () {
    $statistics = Statistics::fromArray([
        'totalMutantsCount' => '100',
        'killedCount' => '90',
        'notCoveredCount' => '5',
        'escapedCount' => '5',
        'msi' => '90.5',
        'mutationCodeCoverage' => '85.5',
        'coveredCodeMsi' => '80.8',
    ]);

    $this->assertEquals($statistics->totalMutants(), 100);
    $this->assertEquals($statistics->killed(), 90);
    $this->assertEquals($statistics->notCovered(), 5);
    $this->assertEquals($statistics->escaped(), 5);
    $this->assertEquals($statistics->msi(), 90.5);
    $this->assertEquals($statistics->mutationCodeCoverage(), 85.5);
    $this->assertEquals($statistics->coveredCodeMsi(), 80.8);
});
