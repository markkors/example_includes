<?php

class gastenboek {

    private $conn;
    private $table_name = "berichten";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getEntries() : array {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $entries = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $entries;
    }

    public function insertEntry(string $name, string $message) : bool {
        $query = "INSERT INTO " . $this->table_name . " (`naam`, `bericht`) VALUES (:name, :message)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':message', $message);
        return $stmt->execute();
    }


}