<?php

namespace Doctrine\Migrations\Query;

class PreparableQuery extends Query
{
    public function __construct(string $statement, array $parameters = [], array $types = [])
    {
        if(strpos( $statement,';')!==false){
            throw new \ValueError('Preparable statement must contain single statement');
        }
        parent::__construct($statement, $parameters, $types);
    }
}