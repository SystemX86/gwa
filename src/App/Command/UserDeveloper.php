<?php

namespace App\App\Command;

class UserDeveloper extends User
{
    protected static $defaultName = 'user:developer';
    protected static $defaultDescription = 'Displays a list of developer responsibilities';

    public function __construct(string $name = null)
    {
        parent::__construct($name);

        $this->setResponsibilities([
            'code writing',
            'code testing',
            'communication with manager'
        ]);
    }
}