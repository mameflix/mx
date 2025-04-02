<?php

require 'db.php';


class Content {
    private $db;

    // Constructor que recibe la conexión
    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }




    // READ - Leer todos los contenidos
    public function readAll() {
        try {
            $sql = "SELECT * FROM contenidos";
            $result = $this->db->query($sql);
            $contenidos = array();
            
            while ($row = $result->fetch_assoc()) {
                $contenidos[] = $row;
            }
            return $contenidos;
        } catch (Exception $e) {
            echo "Error al leer: " . $e->getMessage();
            return false;
        }
    }


    public function close() {
        $this->database->closeConnection();
    }



}

// Ejemplo de uso
try {
    $data = new Content();

    


    $contenidos = $data->readAll();
    

    if ($contenidos !== false) {
        header('Content-Type: application/json; charset=utf-8');
        
        echo json_encode($contenidos, JSON_PRETTY_PRINT);
    } else {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'error' => true,
            'message' => 'No se pudieron obtener los contenidos'
        ]);
    }

    //Cerrar la conexión explícitamente
    $data->close();


} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>