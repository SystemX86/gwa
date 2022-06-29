<?php

namespace App\App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class Can extends Command
{
    protected $responsibilities;

    public function __construct(string $name = null)
    {
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->addArgument('duty', InputArgument::REQUIRED, 'Duty of an employee');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if (in_array($input->getArgument('duty'), $this->responsibilities)) {
            $output->writeln('true');
        } else {
            $output->writeln('false');
        }

        return Command::SUCCESS;
    }

    protected function setResponsibilities($responsibilities)
    {
        $this->responsibilities = $responsibilities;
    }
}