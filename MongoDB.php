<?php

class MongoDB {
    private $client;
    private $db;

    public function __construct($uri, $dbname) {
        $this->client = new MongoDB\Client($uri);
        $this->db = $this->client->$dbname;
    }

    // Insert document
    public function insert($collection, $document) {
        $this->db->$collection->insertOne($document);
    }

    // Find documents
    public function find($collection, $filter = [], $options = []) {
        return $this->db->$collection->find($filter, $options);
    }

    // Update document
    public function update($collection, $filter, $update) {
        $this->db->$collection->updateOne($filter, $update);
    }

    // Delete document
    public function delete($collection, $filter) {
        $this->db->$collection->deleteOne($filter);
    }
}

?>
