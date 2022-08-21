<?php


namespace Models;


class Region extends ActiveRecordEntity
{
    protected static function getTableName(): string
    {
        return 'region';
    }
}