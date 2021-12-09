<?php

namespace MVC\Core;

use MVC\Core\ResourceModelInterface;
use MVC\Config\Database;
use MVC\Core\Model;
use PDO;

class ResourceModel implements ResourceModelInterface {

    private $table;
    private $id;
    private $model;
    private $myID;

    public function _init($table, $id, $model)
    {
        $this->table = $table;
        $this->id = $id;
        $this->model = $model;
    }

    public function save($model)
    {
        $arrayModel = $model->getProperties();
        if (isset($arrayModel[$this->id])) {
            $id = $arrayModel[$this->id];
            unset($arrayModel[$this->id]);
        }
        else {
            $id = null;
        }
        $stringModel='';
        foreach ($arrayModel as $key => $value) {
            $stringModel .= "$key = :$key, ";
        }
        $stringModel = rtrim($stringModel, ', ');

        echo $stringModel."<br>";

        if ($id != null) {
            $sql_insert = "UPDATE {$this->table} SET {$stringModel} where {$this->id} = $id";
        }
        else {
            $sql_insert = "INSERT INTO {$this->table} SET {$stringModel}";
            echo $sql_insert;
        }

        $req = Database::getBdd()->prepare($sql_insert);
        return $req->execute($arrayModel);
    }

    public function delete($model)
    {
        $arrayModel = $model->getProperties();
        $id = $arrayModel[$this->id];
        echo $id;
        $sql = "DELETE FROM {$this->table} where {$this->id} = {$id}";
        echo $sql;
        $req = Database::getBdd()->prepare($sql);
        return $req->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->table}";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_CLASS, get_class($this->model));
    }

    public function get($id)
    {
        $sql = "SELECT * from {$this->table} where {$this->id} = {$id}";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchObject(get_class($this->model));
    }
}