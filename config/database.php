<?php

// Mongodb setting
require 'vendor/autoload.php';
use MongoDB\Client;

class Database {
    protected $client;

    public function __construct() {
        // Make sure MongoDB server is running on this address
        $this->client = new Client("mongodb://localhost:27017");
    }

    // Method to get any collection by database and collection name
    public function getCollection($databaseName = 'data', $collectionName = 'identity') {
        return $this->client->$databaseName->$collectionName;
    }
}