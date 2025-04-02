<?php
// Clase para manejar la conexión y operaciones CRUD
class Database {
    // Propiedades privadas
    private $servername = "fdb29.awardspace.net";
    private $username = "4612609_gm";
    private $password = "unoydos12";
    private $dbname = "4612609_gm";
    private $conn;

    // Constructor
    public function __construct() {
        try {
            $this->conn = new mysqli(
                $this->servername,
                $this->username,
                $this->password,
                $this->dbname
            );

            if ($this->conn->connect_error) {
                throw new Exception("Error de conexión: " . $this->conn->connect_error);
            }
            
            $this->conn->set_charset("utf8");
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // Método para obtener la conexión
    public function getConnection() {
        return $this->conn;
    }

    // Cerrar conexión
    public function closeConnection() {
        $this->conn->close();
    }
}