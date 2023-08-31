<?php

namespace Doctrine\Migrations\Query;

final class RawQuery extends Query
{
    public function __construct(string $statement, array $parameters = [], array $types = [])
    {
        parent::__construct($statement, $parameters, $types);
    }
}