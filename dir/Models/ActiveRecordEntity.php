<?php


namespace Models;


abstract class ActiveRecordEntity
{
    abstract protected static function getTableName(): string;

    public static function getAll()
    {
        $sql = 'SELECT * FROM ' . static::getTableName() . ';';
        $db = \Services\Db::getInstance();
        $entities = $db->query(
            $sql,
            [],
            static::class
        );
        return $entities ?: null;
    }

    public static function getById(int $id)
    {
        $sql = 'SELECT * FROM ' . static::getTableName() . ' WHERE id = :id;';
        $db = \Services\Db::getInstance();
        $entities = $db->query(
            $sql,
            [':id' => $id],
            static::class
        );
        return $entities ? $entities[0] : null;
    }

    public static function getByArr(array $arr)
    {
        $arrSql = []; //массив для строки запроса
        $arrBin = []; //массив для bin param

        foreach ($arr as $key => $value) {
            $arrSql[] = "$key = :$key";
            $arrBin[":".$key] = $value;
        }

        $db = \Services\Db::getInstance();
        $entities = $db->query(
            'SELECT * FROM ' . static::getTableName() . ' WHERE  ' . implode(' AND ', $arrSql) . ' ORDER BY id ASC;',
            $arrBin,
            static::class
        );
        return $entities ?: null;
    }

}