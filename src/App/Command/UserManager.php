<?php
namespace App\App\Command;

class UserManager extends User
{
    protected static $defaultName = 'user:manager';
    protected static $defaultDescription = 'Displays a list of manager responsibilities';

    public function __construct(string $name = null)
    {
        parent::__construct($name);

        $this->setResponsibilities([
            'create tasks'
        ]);
    }
}