<?php

namespace App\App\Command;

class CanDeveloper extends Can
{
    protected static $defaultName = 'can:developer';
    protected static $defaultDescription = 'Checking Developer Responsibilities';

    public function __construct(string $name = null)
    {
        parent::__construct($name);

        $this->setResponsibilities([
            'writeCode',
            'testingCode',
            'communicateWithManager'
        ]);
    }

    protected function setResponsibilities($responsibilities)
    {
        $this->responsibilities = $responsibilities;
    }
}