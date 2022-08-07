<?php

namespace Alfiesal\InfectionGitlabComment\Infection;


final class Mutation
{
    private function __construct(
        private string $mutatorName,
        private string $originalFilePath,
        private int $originalStartLine,
        private string $diff
    ){

    }

    public static function fromArray(array $data): Mutation
    {
        return new Mutation(
            mutatorName: $data['mutator']['mutatorName'],
            originalFilePath: $data['mutator']['originalFilePath'],
            originalStartLine: $data['mutator']['originalStartLine'],
            diff: $data['diff'],
        );
    }

    public function mutatorName(): string
    {
        return $this->mutatorName;
    }

    public function originalFilePath(): string
    {
        return $this->originalFilePath;
    }

    public function originalStartLine(): int
    {
        return $this->originalStartLine;
    }

    public function diff(): string
    {
        return $this->diff;
    }
}

