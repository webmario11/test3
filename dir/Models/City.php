<?php


namespace Models;


class City extends ActiveRecordEntity
{
    protected static function getTableName(): string
    {
        return 'city';
    }
}