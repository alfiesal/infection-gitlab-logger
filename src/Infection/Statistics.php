<?php

declare(strict_types=1);

namespace Alfiesal\InfectionGitlabComment\Infection;

final class Statistics
{
    private function __construct(
        private int $totalMutants,
        private int $killed,
        private int $notCovered,
        private int $escaped,
        private float $msi,
        private float $mutationCodeCoverage,
        private float $coveredCodeMsi
    ) {
    }

    public static function fromArray(array $data): Statistics
    {
        return new Statistics(
            totalMutants: (int) $data['totalMutantsCount'],
            killed: (int) $data['killedCount'],
            notCovered: (int) $data['notCoveredCount'],
            escaped: (int) $data['escapedCount'],
            msi: (float) $data['msi'],
            mutationCodeCoverage: (float) $data['mutationCodeCoverage'],
            coveredCodeMsi: (float) $data['coveredCodeMsi'],
        );
    }

    public function totalMutants(): int
    {
        return $this->totalMutants;
    }

    public function killed(): int
    {
        return $this->killed;
    }

    public function notCovered(): int
    {
        return $this->notCovered;
    }

    public function escaped(): int
    {
        return $this->escaped;
    }

    public function msi(): float
    {
        return $this->msi;
    }

    public function mutationCodeCoverage(): float
    {
        return $this->mutationCodeCoverage;
    }

    public function coveredCodeMsi(): float
    {
        return $this->coveredCodeMsi;
    }
}
