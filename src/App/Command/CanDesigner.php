<?php

namespace App\App\Command;

class CanDesigner extends Can
{
    protected static $defaultName = 'can:designer';
    protected static $defaultDescription = 'Checking Designer Responsibilities';

    public function __construct(string $name = null)
    {
        parent::__construct($name);

        $this->setResponsibilities([
            'draw',
            'communicateWithManager'
        ]);
    }
}