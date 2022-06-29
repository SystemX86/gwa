<?php

namespace App\App\Command;

class CanManager extends Can
{
    protected static $defaultName = 'can:manager';
    protected static $defaultDescription = 'Checking Manager Responsibilities';

    public function __construct(string $name = null)
    {
        parent::__construct($name);

        $this->setResponsibilities([
            'createTask'
        ]);
    }

    protected function setResponsibilities($responsibilities)
    {
        $this->responsibilities = $responsibilities;
    }
}