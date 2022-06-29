<?php

namespace App\App\Command;

class UserDesigner extends User
{
    protected static $defaultName = 'user:designer';
    protected static $defaultDescription = 'Displays a list of designer responsibilities';

    public function __construct(string $name = null)
    {
        parent::__construct($name);

        $this->setResponsibilities([
            'draw',
            'communication with manager'
        ]);
    }
}