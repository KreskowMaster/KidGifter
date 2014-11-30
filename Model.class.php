<?php

class Model {

    private $dbstring;
    private $username;
    private $password;
    private $pdo;

    public function __construct($host, $port, $username, $password, $database) {
        $this->dbstring = 'mysql:host=' . $host . ';dbname=' . $database . ';port=' . $port;
        $this->username = $username;
        $this->password = $password;
        $this->pdo = new PDO($this->dbstring, $this->username, $this->password);
    }

    public function saveList($data) {
        $password = md5(microtime());
        $sql = "INSERT INTO lists (password) VALUES (:password)";
        $q = $this->pdo->prepare($sql);
        $q->execute(
                array(
                    ":password" => $password
                )
        );
        $list_id = $this->pdo->lastInsertId();

        foreach ($data as $key => $value) {
            $this->addGift($value['name'], $value['desc'], $value['img_url'], $list_id);
        }
        return $list_id;
    }


    public function addGift($name, $desc, $img_url, $list_id) {
        $sql = "INSERT INTO gifts (name, `desc`, img_url, list_id) VALUES (:name, :desc, :img_url, :list_id)";
        $q = $this->pdo->prepare($sql);
        $result = $q->execute(
                array(
                    ":name" => $name,
                    ":desc" => $desc,
                    ":img_url" => $img_url,
                    ":list_id" => (int) $list_id
                )
        );
    }

    public function getList($list_id) {
        $sql = "SELECT * FROM gifts WHERE list_id = " . $list_id;
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }


}
