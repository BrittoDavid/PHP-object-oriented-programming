<?php
namespace clases_pdo;

require_once 'Connection.php';

class User{
    
    private $id = '';
    private $nombre;
    private $telefono;
    private $pdo;
    
    public function __construct(){
        $this->pdo = new Conexion();
    }
    
    
    public function addUser ($nombre, $telefono)
    {   
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $result = $this->saveUser();
        return $result;
    }
    
    private function saveUser()
    {
        $pdo = $this->pdo;
        $sql = "INSERT INTO usser (ID,NOMBRE,TELEFONO) VALUES (:id,:nombre,:telefono)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id' => $this->id,
            'nombre' => $this->nombre,
            'telefono' => $this->telefono
            ]);
            
        return $result;
    }
    
    public function getUsers()
    {
      $pdo = $this->pdo;
      $sql = "SELECT * FROM user";
      $query = $pdo->query($sql);
      $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
      return $queryResult;
    }
    
    
    public function deleteUser($id)
    {
        $pdo = $this->pdo;
        $sql = "DELETE FROM usser WHERE ID=:id";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id' => $id
            ]);
            
        return $result;
    }
    
    
    
    public function selectUser($id)
    {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM usser WHERE ID = " . $id;
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
    }
    
    public function updateUser($id,$name,$phone)
    {
        $pdo = $this->pdo;
        $sql = "UPDATE  usser SET  NOMBRE = :nombre , TELEFONO = :telefono WHERE ID = :id";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id' => $id,
            'nombre' => $name,
            'telefono' => $phone
            ]);
            
        return $result;
    }
}







