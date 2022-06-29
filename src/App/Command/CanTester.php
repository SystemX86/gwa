<?php

namespace App\App\Command;

class CanTester extends Can
{
    protected static $defaultName = 'can:tester';
    protected static $defaultDescription = 'Checking Tester Responsibilities';

    public function __construct(string $name = null)
    {
        parent::__construct($name);

        $this->setResponsibilities([
            'testingCode',
            'communicateWithManager',
            'createTask'
        ]);
    }

    protected function setResponsibilities($responsibilities)
    {
        $this->responsibilities = $responsibilities;
    }
}