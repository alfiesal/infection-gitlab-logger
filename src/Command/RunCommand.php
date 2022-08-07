<?php

namespace Alfiesal\InfectionGitlabComment\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

final class RunCommand extends Command
{
    private const OPTION_COMMENTS_MODE = 'comments-mode';

    protected function configure(): void
    {
        $this
            ->setName('run')
            ->setDescription('Prints infection JSON output as Gitlab comments')
            ->addArgument('gitlabAuthToken', InputArgument::REQUIRED, 'Gitlab Authentication Token')
            ->addOption(
                self::OPTION_COMMENTS_MODE,
                null,
                InputOption::VALUE_REQUIRED,
                sprintf(
                    'Choose one of option("%s") to print log as single comments or separate for each mutation',
                    'single, separate'
                ),
                'separate'
            );
    }
}
