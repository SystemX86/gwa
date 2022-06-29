<?php

namespace App\App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class User extends Command
{
    protected $responsibilities;

    public function __construct(string $name = null)
    {
        parent::__construct($name);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        foreach ($this->responsibilities as $item) {
            $output->writeln($item);
        }

        return Command::SUCCESS;
    }
}