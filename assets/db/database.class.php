<?php

/**
 * Database
 *
 * @author     Michel Zuidema <michelgzuidema@gmail.com>
 */
class Database {
    private $host;
    private $username;
    private $password;
    private $database;

    /**
     *
     * Connects to the database
     *
     * @return connection
     */
    protected function connect() {
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "Kaas@360!420";
        $this->database = "F4BEROEPS";

        $connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if($connection->connect_error) {
            die("Connection error!");
        } else {
            return $connection;
        }
    }
}
?>
