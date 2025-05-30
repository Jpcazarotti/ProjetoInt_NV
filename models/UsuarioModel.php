<?php
require_once 'DBConexao.php';

class UsuarioModel
{
    private $usuario;
    private $conn;

    public function __construct()
    {
        $this->conn = DBConexao::getConexao();
    }

    public function getAllUsuarios()
    {
        $query = "SELECT id, nome, email, tipo FROM usuarios";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUsuarioById($id)
    {
        $query = "SELECT id, nome, email, tipo FROM usuarios WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$usuario) {
            return null;
        }

        return $usuario;
    }

    public function createUsuario($dados)
    {
        $this->usuario = new UsuarioModel();
        
        try {
            $query = "INSERT INTO usuarios (nome, email, senha, tipo) VALUES (:nome, :email, :senha, :tipo)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':nome', $dados['nome']);
            $stmt->bindParam(':email', $dados['email']);
            $stmt->bindParam(':senha', password_hash($dados['senha'], PASSWORD_DEFAULT));
            $stmt->bindParam(':tipo', $dados['tipo']);
            return $stmt->execute();
        } catch (PDOException $e) {

            throw new Exception("Erro ao criar usuário: " . $e->getMessage());
        }
    }

    public function updateUsuario($id, $dados)
    {

        if (isset($dados['senha']) && !empty($dados['senha'])) {
            $query = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha, tipo = :tipo WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':senha', password_hash($dados['senha'], PASSWORD_DEFAULT));
        } else {
            $query = "UPDATE usuarios SET nome = :nome, email = :email, tipo = :tipo WHERE id = :id";
            $stmt = $this->conn->prepare($query);
        }

        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':email', $dados['email']);
        $stmt->bindParam(':tipo', $dados['tipo']);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    public function deleteUsuario($id)
    {
        $query = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}