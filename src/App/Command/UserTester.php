<?php
namespace App\App\Command;

class UserTester extends User
{
    protected static $defaultName = 'user:tester';
    protected static $defaultDescription = 'Displays a list of tester responsibilities';

    public function __construct(string $name = null)
    {
        parent::__construct($name);

        $this->setResponsibilities([
            'code testing',
            'communication with manager',
            'create tasks'
        ]);
    }

    protected function setResponsibilities($responsibilities)
    {
        $this->responsibilities = $responsibilities;
    }
}