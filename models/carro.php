<?php
class Carro{
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // obtener todos los libros
    public function obtenerTodos(){
        $stmt = $this->pdo->query("SELECT * FROM carrito ORDER BY id_carrito DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener por ID
    public function obtenerporid($id_carrito){
        $stmt = $this->pdo->prepare("SELECT * FROM carrito WHERE id_carrito=?");
        $stmt->execute([$id_carrito]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Agregar libro al carrito

    public function agregarlibro($id){
        $stmt= $this->pdo->prepare("INSERT INTO carrito(id_carrito,id_libro,cantidad) VALUES(?,?,?)");
        return $stmt->execute([$id_usuario,$id_libro,$cantidad]);
    }
    
    // Eliminar libro del carrito

    public function eliminarlibro($id){
        $stmt= $this->pdo->prepare("DELETE FROM carrito WHERE id_carrito =?");
        return $stmt->execute([$id_carrito]);
    }

    // Vaciar carrito

    public function vaciarcarrito(){
        $stmt= $this->pdo->prepare("DELETE FROM carrito WHERE id_usuario =? ");
        return $stmt->execute([$id_usuario]);
    }

}


?>

