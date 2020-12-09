<?php

namespace Handlers;

class Db
{
    public static $connection;

    public function connect()
    {
        if (self::$connection === null) {
            $config = include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
            self::$connection = mysqli_connect($config['host'],$config['user'], $config['password'], $config['db_name']);
        }
        return self::$connection;
    }

    public function closeConnect()
    {
        mysqli_close(self::$connection);
        self::$connection = null;
    }

    public function getData()
    {
        $query = "SELECT *, DATE_FORMAT(date, '%H:%i %d.%m.%Y') as new_date FROM board";
        $result = mysqli_query($this->connect(), $query);

        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

        return array_reverse($data);
    }

    public function setData($post)
    {
        $author = mysqli_real_escape_string($this->connect(), $post['author']);
        $text = mysqli_real_escape_string($this->connect(), $post['text']);
        $query = "INSERT INTO board (author, text, date) VALUES ('$author', '$text', NOW())";
        mysqli_query($this->connect(), $query);
        header("Location: " . $_SERVER['REQUEST_URI']);
    }
}

