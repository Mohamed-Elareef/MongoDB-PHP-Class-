# PHP MongoDB Class

This is a basic PHP class for handling MongoDB operations. It provides methods for CRUD (Create, Read, Update, Delete) operations, as well as handling the MongoDB connection.

## Requirements

- PHP 7.0 or later
- MongoDB PHP driver
- MongoDB server

## Features

- Connection handling
- CRUD (Create, Read, Update, Delete) operations
- Query building

## Documentation

- __construct($uri, $dbname): This method creates a new MongoDB client and sets the database to be used. It takes two arguments: $uri which is the MongoDB connection URI, and $dbname which is the name of the database to be used.

- insert($collection, $document): This method inserts a new document into a collection. It takes two arguments: $collection which is the name of the collection, and $document which is the document to be inserted.

- find($collection, $filter = [], $options = []): This method retrieves documents from a collection that match a specific filter. It takes three arguments: $collection which is the name of the collection, $filter which is an optional array of filter criteria, and $options which is an optional array of options for the find operation.

- update($collection, $filter, $update): This method updates documents in a collection that match a specific filter. It takes three arguments: $collection which is the name of the collection, $filter which is an array of filter criteria, and $update which is an array of update operations to be performed.

- delete($collection, $filter): This method deletes documents from a collection that match a specific filter. It takes two arguments: $collection which is the name of the collection, and $filter which is an array of filter criteria.


## Usage

To use the class, simply include it in your PHP script and create a new instance of the class. The class takes MongoDB connection URI and database name as arguments.
```php
$mongo = new MongoDB("mongodb://localhost:27017", "mydb");
```

You can then use the class methods to interact with the MongoDB database. For example, to insert a document into a collection:

```php
$mongo->insert("users", array("name" => "John", "age" => 25));
```

To find documents from a collection:

```php
$cursor = $mongo->find("users", array("age" => 25));
foreach ($cursor as $document) {
    print_r($document);
}
```
 

