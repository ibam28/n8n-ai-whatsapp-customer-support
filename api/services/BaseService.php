<?php

declare(strict_types=1);

namespace Services;

use PDO;

abstract class BaseService
{
    protected PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
}