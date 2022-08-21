<?php


namespace Services;


class Db
{
    private static $instance;

    /** @var \PDO */
    private $pdo;

    private function __construct()
    {
        $this->pdo = new \PDO(
            'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
            DB_USER,
            DB_PASSWORD
        );
        $this->pdo->exec('SET NAMES utf8mb4');
        $this->pdo->exec('SET CHARACTER SET utf8mb4');
        $this->pdo->exec('SET SESSION collation_connection = utf8mb4_unicode_ci');
    }

    public function query(string $sql, array $params = [], string $className = 'stdClass'): ?array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);
        if (false === $result) {
            return null;
        }

        return $sth->fetchAll(\PDO::FETCH_CLASS, $className);
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}