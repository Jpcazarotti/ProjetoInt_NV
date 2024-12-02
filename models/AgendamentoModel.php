<?php
require_once 'DBConexao.php';

class AgendamentoModel
{
    private $agendamento;
    private $conn;

    public function __construct()
    {
        $this->conn = DBConexao::getConexao();
    }

    public function getAllAgendamentos()
    {
        try {
            $query = "SELECT * FROM agendamentos";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {

            echo "Erro ao obter agendamentos: " . $e->getMessage();
            return false;
        }
    }

    public function getAgendamentoById($id)
    {
        try {
            $query = "SELECT * FROM agendamentos WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao obter agendamento: " . $e->getMessage();
            return false;
        }
    }

    public function createAgendamento($dados)
    {
        $this->agendamento = new AgendamentoModel(); 

        if (!isset($dados['paciente_id'], $dados['psicologo_id'], $dados['evento_id'], $dados['data_agendamento'])) {
            echo "Dados incompletos para o agendamento.";
            return false;
        }

        try {
            $query = "INSERT INTO agendamentos (paciente_id, psicologo_id, evento_id, data_agendamento) 
                      VALUES (:paciente_id, :psicologo_id, :evento_id, :data_agendamento)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':paciente_id', $dados['paciente_id'], PDO::PARAM_INT);
            $stmt->bindParam(':psicologo_id', $dados['psicologo_id'], PDO::PARAM_INT);
            $stmt->bindParam(':evento_id', $dados['evento_id'], PDO::PARAM_INT);
            $stmt->bindParam(':data_agendamento', $dados['data_agendamento']);


            if ($stmt->execute()) {
                return $this->conn->lastInsertId();
            }
            return false;
        } catch (PDOException $e) {
            echo "Erro ao criar agendamento: " . $e->getMessage();
            return false;
        }
    }

    public function updateAgendamento($id, $dados)
    {

        if (!isset($dados['paciente_id'], $dados['psicologo_id'], $dados['evento_id'], $dados['data_agendamento'])) {
            echo "Dados incompletos para atualização.";
            return false;
        }

        try {
            $query = "UPDATE agendamentos 
                      SET paciente_id = :paciente_id, psicologo_id = :psicologo_id, evento_id = :evento_id, 
                          data_agendamento = :data_agendamento 
                      WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':paciente_id', $dados['paciente_id'], PDO::PARAM_INT);
            $stmt->bindParam(':psicologo_id', $dados['psicologo_id'], PDO::PARAM_INT);
            $stmt->bindParam(':evento_id', $dados['evento_id'], PDO::PARAM_INT);
            $stmt->bindParam(':data_agendamento', $dados['data_agendamento']);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao atualizar agendamento: " . $e->getMessage();
            return false;
        }
    }

    public function deleteAgendamento($id)
    {
        try {
            $query = "DELETE FROM agendamentos WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao excluir agendamento: " . $e->getMessage();
            return false;
        }
    }
}