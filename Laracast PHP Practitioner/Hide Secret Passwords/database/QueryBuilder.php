<?php



class QueryBuilder
// 5. returns an instance of this class^//
//contains lots of helpful methods for querying the database//
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        // 7. give me all records from the 'todos' table

        $statement->execute();


        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
};
