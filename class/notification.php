<?php

class Notification{

    private $conn;
    private $table = "notification";

    public $id_notification;
    public $name;
    public $lastname;
    public $description;
    public $created;
    public $modified;
    public $price;
    public $timestamp;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    function getTimestamp(){
        $this->timestamp = date('Y-m-d H:i:s');
    }

    function delete(){

        $query = "DELETE FROM " . $this->table . " WHERE id_notification = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id_notification);

        if($result = $stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    function create()
    {
        $this->getTimestamp();

        $query = "INSERT INTO
                    " . $this->table . "
                SET
                    name = ?, lastname = ?, price = ?, description = ?, created = ?";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->lastname);
        $stmt->bindParam(3, $this->price);
        $stmt->bindParam(4, $this->description);
        $stmt->bindParam(5, $this->timestamp);

        if($stmt->execute()){
            return true;
        }else{
            echo 'error';
            print_r($stmt->errorInfo());

            return false;
        }

    }

    function readAll(){

        $query = "SELECT *
            FROM
                " . $this->table . "
            ORDER BY
                id_notification DESC
        ";

        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        return $stmt;
    }

    function update(){

        $this->getTimestamp();

        $query = "UPDATE notification
            SET
                name = :name,
                price = :price,
                lastname = :lastname,
                description = :description,
                modified = :modified
             WHERE
                id_notification = :id_notification";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':lastname', $this->lastname);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':modified', $this->timestamp);
        $stmt->bindParam(':id_notification', $this->id_notification);

        // execute the query
        if($stmt->execute()){
            print_r($stmt->errorInfo());
            return true;
        }else{
            return false;
        }
    }

    function readOne(){

        $query = "SELECT *
            FROM
                " . $this->table . "
            WHERE
                id_notification = ?
            LIMIT
                0,1";

        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->id_notification);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->name = $row['name'];
        $this->price = $row['price'];
        $this->lastname = $row['lastname'];
        $this->description = $row['description'];
    }



}