<?php

declare(strict_types=1);

use Alfiesal\InfectionGitlabComment\Infection\LogFactory;

it('should create log from json file', function () {
    $log = LogFactory::fromJson(getcwd().'/tests/fixtures/infection.json');
});
