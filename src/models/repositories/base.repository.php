<?php
// src/models/repositories/base.repository.php - (created by: logicinfo.com.br/ael)
require_once 'src/models/utils/database.php';
require_once 'src/models/repositories/ibase.repository.php';



abstract class BaseRepository implements IBaseRepository
{
    protected $entity;
    protected $table;
    protected $db;


    
    public function __construct($table)
    {
        // Cria a conexão com o banco de dados
        $this->db = Database::getConnection();

        $this->table = $table;
    }



    public function getAll()
    {
        $query = "SELECT * FROM $this->table";
     
        $result = $this->fetchData($query);

        if (count($result) == 0) {
            throw new Exception('registro(s) não encontrado(s)');
        }

        return $result;
    }



    public function getById($id)
    {
        $query = "SELECT * FROM $this->table WHERE id = :id";
        $params = [':id' => $id];

        $result = $this->fetchData($query, $params);

        if (count($result) == 0) {
            throw new Exception('registro não encontrado');
        }

        return $result[0];
    }



    public function getListByKey($key, $field)
    {
        $query = "SELECT * FROM $this->table WHERE $field = :key";
        $params = [':key' => $key];

        $result = $this->fetchData($query, $params);

        if (count($result) == 0) {
            throw new Exception('registro(s) não encontrado(s)');
        }

        return $result;
    }



    public function create($data)
    {
        $columns = implode(", ", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));

        $query = "INSERT INTO $this->table ($columns) VALUES ($values)";
        $this->executeQuery($query, $data);

        return $this->getById($this->db->lastInsertId());
    }



    public function update($id, $data)
    {
        $columns = "";

        foreach ($data as $key => $value) {

            $columns .= "$key=:$key, ";

        }

        $columns = rtrim($columns, ", ");

        $query = "UPDATE $this->table SET $columns WHERE id = :id";
        $data[':id'] = $id;

        $this->executeQuery($query, $data);

        return $this->getById($id);
    }



    public function erase($id)
    {
        $query = "DELETE FROM $this->table WHERE id = :id";

        $params = [':id' => $id];

        return $this->executeQuery($query, $params);
    }



    protected function fetchData($query, $params = [])
    {
        try {
            $statement = $this->db->prepare($query);
            $statement->execute($params);

            $result = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        } catch (PDOException $e) {

            throw new PDOException('Error fetching data: ' . $e->getMessage());
        }
    }



    protected function executeQuery($query, $params = [])
    {
        try {
            $statement = $this->db->prepare($query);
            $statement->execute($params);

            return $statement->rowCount();

        } catch (PDOException $e) {

            throw new PDOException('Error executing query: ' . $e->getMessage());
        }
    }
}