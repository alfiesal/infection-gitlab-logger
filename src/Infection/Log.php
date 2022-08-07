<?php

namespace Alfiesal\InfectionGitlabComment\Infection;

final class Log
{
    public function __construct(
        private Statistics $statistics,
        private array $escaped,
        private array $uncovered
    ) {
    }

    public function statistics(): Statistics
    {
        return $this->statistics;
    }

    public function escaped(): array
    {
        return $this->escaped;
    }

    public function uncovered(): array
    {
        return $this->uncovered;
    }
}
