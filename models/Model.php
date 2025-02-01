<?php

abstract class Model
{
    private $db;

    protected function getDB()
    {
        if ($this->db === null) {
            $host = 'localhost';
            $dbname = 'pokemon';
            $username = 'root';
            $password = '';

            $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        }
        return $this->db;
    }

    protected function execRequest($sql, $params = null)
    {
        if ($params === null) {
            $execution = $this->getDB()->query($sql); //exécution directe si pas de paramètres
        } else {
            $execution = $this->getDB()->prepare($sql);
            $execution->execute($params);
        }
        return $execution;
    }
}

?>