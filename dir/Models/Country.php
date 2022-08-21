<?php


namespace Models;


class Country extends ActiveRecordEntity
{

    protected static function getTableName(): string
    {
        return 'country';
    }
}