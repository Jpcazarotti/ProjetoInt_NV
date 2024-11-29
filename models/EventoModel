<?php
require_once 'DBConexao.php';

class EventoModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = DBConexao::getConexao();
    }

    public function getAllEventos()
    {
        try {
            $query = "SELECT id, nome, data, descricao FROM eventos";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao buscar eventos: " . $e->getMessage();
            return false;
        }
    }

    public function getEventoById($id)
    {
        try {
            $query = "SELECT id, nome, data, descricao FROM eventos WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao buscar evento: " . $e->getMessage();
            return false;
        }
    }

    public function createEvento($dados)
    {

        if (empty($dados['nome']) || empty($dados['data']) || empty($dados['descricao'])) {
            echo "Dados incompletos para criar o evento.";
            return false;
        }

        try {
            $query = "INSERT INTO eventos (nome, data, descricao) VALUES (:nome, :data, :descricao)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':nome', $dados['nome']);
            $stmt->bindParam(':data', $dados['data']);
            $stmt->bindParam(':descricao', $dados['descricao']);

            if ($stmt->execute()) {
                return $this->conn->lastInsertId();
            }
            return false;
        } catch (PDOException $e) {
            echo "Erro ao criar evento: " . $e->getMessage();
            return false;
        }
    }

    public function updateEvento($id, $dados)
    {

        if (empty($dados['nome']) || empty($dados['data']) || empty($dados['descricao'])) {
            echo "Dados incompletos para atualizar o evento.";
            return false;
        }

        try {
            $query = "UPDATE eventos SET nome = :nome, data = :data, descricao = :descricao WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':nome', $dados['nome']);
            $stmt->bindParam(':data', $dados['data']);
            $stmt->bindParam(':descricao', $dados['descricao']);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao atualizar evento: " . $e->getMessage();
            return false;
        }
    }

    public function deleteEvento($id)
    {
        try {
            $query = "DELETE FROM eventos WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao excluir evento: " . $e->getMessage();
            return false;
        }
    }
}