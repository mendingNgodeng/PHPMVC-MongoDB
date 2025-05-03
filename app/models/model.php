<?php
require_once __DIR__ . '/../../config/database.php';

class Model extends Database {
    private $collection;

    public function __construct($collectionName = "identity") {
        // Call parent constructor to initialize $client
        parent::__construct();
        // Set initial collection (you can override it later)
        $this->collection = $this->getCollection("data", $collectionName);
    }

    public function setCollection($collectionName) {
        $this->collection = $this->getCollection("data", $collectionName);
    }

    public function read_data($filter = [], $options = []) {
        $cursor = $this->collection->find($filter, $options);
        $data = [];
        foreach ($cursor as $document) {
            $data[] = $document;
        }
        return $data;
    }

    // READ ONE DOCUMENT BY ID
    public function read_data_id($id) {
        return $this->collection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
    }

    // INSERT DOCUMENT
    public function insert_data($data) {
        $result = $this->collection->insertOne($data);
        return $result->getInsertedId(); // return ID of inserted document
    }

    // UPDATE DOCUMENT BY ID
    public function update_data($id, $data) {
        $result = $this->collection->updateOne(
            ['_id' => new MongoDB\BSON\ObjectId($id)],
            ['$set' => $data]
        );
        return $result->getModifiedCount(); // number of modified docs
    }

    // DELETE DOCUMENT BY ID
    public function delete_data($id) {
        $result = $this->collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
        return $result->getDeletedCount(); // number of deleted docs
    }
}
