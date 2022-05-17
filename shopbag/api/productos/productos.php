<?php
include_once '../../lib/db.php';

/*$objConne = new DB();
$qp=$objConne->connect()->prepare('SELECT * FROM items WHERE id = 1 LIMIT 0,12');
$qp->execute();
$result = $qp->fetch();
print_r($result);*/

class Productos extends DB{

    function __construct(){
        parent::__construct();
    }

    

    //Obtain the products by id
    public function get($id){
        $query = $this->connect()->prepare('SELECT * FROM items WHERE id = :id LIMIT 0,12');
        $query->execute(['id' => $id]);

        $row = $query->fetch();

        return [
            'id'        => $row['id'],
            'nombre'    => $row['nombre'],
            'precio'    => $row['precio'],
            'categoria' => $row['categoria'],
            'imagen'    => $row['imagen'],
        ];
    }


    //Obtain the products by category
    public function getItemsByCategory($category){
        $query = $this->connect()->prepare('SELECT * FROM items WHERE categoria = :cat LIMIT 0,12');
        $query->execute(['cat' => $category]);

        $items = [];

        while($row = $query->fetch(PDO::FETCH_ASSOC)){

            $item = [
                'id'        => $row['id'],
                'nombre'    => $row['nombre'],
                'precio'    => $row['precio'],
                'categoria' => $row['categoria'],
                'imagen'    => $row['imagen'],
            ];

            array_push($items, $item);
        }
        return $items;
    }

    public function getAllItems(){
        $query = $this->connect()->prepare('SELECT * FROM items');
        $query->execute();

        $items = [];

        while($row = $query->fetch(PDO::FETCH_ASSOC)){

            $item = [
                'id'        => $row['id'],
                'nombre'    => $row['nombre'],
                'precio'    => $row['precio'],
                'categoria' => $row['categoria'],
                'imagen'    => $row['imagen'],
            ];

            array_push($items, $item);
        }
        return $items;
    }

}

?>