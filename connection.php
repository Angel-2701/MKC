<?php 

class connection{
    //Parameters for db Connection
    private $server = 'localhost';
    private $username = "root";
    private $password = '';
    private $database = 'MKC_login';
    private $connection;
    //Connection to DB
    public function __construct(){
        try{
            $this->connection = new PDO("mysql:host=$this->server;dbname=$this->database;",$this->username,$this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            print_r("SUCCESS");
        }catch(PDOException $e){
            return 'Connection failed:' .$e;
        }
    }
    //Function to execute sql operations
    public function ejec($sql){
        $this->connection->exec($sql);
        return $this->connection->lastInsertId();
    }
    //Function to get the data from DB
    public function consult($sql){
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}



?>