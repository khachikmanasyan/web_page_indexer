<?php


class DatabaseConnection
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "indexer";
    private $connection;

    public function insertNodeArray($nodeArray) {
        if (!isset($this->connection)){
            $this->connect();
        }


        foreach ($nodeArray as $node) {

            if ($this->connection->connect_error) {
                        die("Connection failed: " . $this->connection->connect_error);
            }
            $url = $node->getUrl();
            $parentUrl = $node->getParentUrl();
            $sql = "INSERT INTO `web_page_links` (`link_name`,`parent_link_name`) VALUES ('$url', '$parentUrl')";
            mysqli_query($this->connection, $sql);
        }
    }
    private function connect()
    {
        $this->connection = mysqli_connect($this->servername, $this->username, $this->password, $this->dbName);
    }

}