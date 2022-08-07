<?php

namespace Alfiesal\InfectionGitlabComment\Infection;

final class LogFactory
{
    public static function fromJson(string $logPath): Log
    {
        $content = json_decode(file_get_contents($logPath), true);

        return new Log(
            Statistics::fromArray($content['stats']),
            self::mutations($content['killed']),
            self::mutations($content['escaped'])
        );
    }

    public static function mutations(array $mutations): array
    {
        return array_map(static function ($mutation) {
            return Mutation::fromArray($mutation);
        }, $mutations);
    }
}
