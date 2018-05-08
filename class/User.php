<?php
namespace clases_pdo;

require_once 'Connection.php';

class User{
    
    private $id = '';
    private $nombre;
    private $telefono;
    private $contra;
    private $usuario;
    private $pdo;
    
    public function __construct(){
        $this->pdo = new Conexion();
    }
    
    
    public function addUser ($nombre, $telefono,$usuario,$contra)
    {   
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->usuario = $usuario;
        $this->contra = $contra;
        $result = $this->saveUser();
        return $result;
    }
    
    private function saveUser()
    {
        $pdo = $this->pdo;
        $sql = "INSERT INTO user (Id,Name,Phone,User,Password) VALUES (:id,:nombre,:telefono,:usuario,:contra)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id' => $this->id,
            'nombre' => $this->nombre,
            'telefono' => $this->telefono,
            'usuario' => $this->usuario,
            'contra' => $this->contra
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
        $sql = "DELETE FROM user WHERE Id=:id";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id' => $id
            ]);
            
        return $result;
    }
    
    
    
    public function selectUser($id)
    {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM user WHERE Id =".$id;
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
    }

    public function updateUser($id, $nombre, $telefono, $usuario, $contra)
    {
        $pdo = $this->pdo;
        $sql = "UPDATE user SET Name = :nombre, Phone = :telefono, User = :usuario, Password = :contra WHERE Id = :id";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id' => $id,
            'nombre' => $nombre,
            'telefono' => $telefono,
            'usuario' => $usuario,
            'contra' => $contra
            ]);
            
        return $result;
    }
    
    public function selectVali($usuario)
    {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM user WHERE User = ".$usuario;
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
    }
}







