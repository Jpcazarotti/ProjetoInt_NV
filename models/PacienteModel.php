<?php
require_once 'DBConexao.php';

class PacienteModel
{
    private $paciente;
    private $conn;

    public function __construct()
    {
        $this->conn = DBConexao::getConexao();
    }

    public function getAllPacientes()
    {
        try {
            $query = "SELECT id_usuario, nome, email, data_nascimento, telefone, deficiencia, tipo FROM pacientes";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return ['status' => true, 'data' => $stmt->fetchAll(PDO::FETCH_ASSOC)];
        } catch (PDOException $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }

    public function getPacienteById($id)
    {
        try {
            $query = "SELECT id_usuario, nome, email, data_nascimento, telefone, deficiencia, tipo FROM pacientes WHERE id_usuario = :id_usuario";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':id_usuario', $id);
            $stmt->execute();
            return ['status' => true, 'data' => $stmt->fetch(PDO::FETCH_ASSOC)];
        } catch (PDOException $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }

    public function createPaciente($dados)
    {
        $this->paciente = new PacienteModel();

        if (empty($dados['nome']) || empty($dados['email']) || empty($dados['data_nascimento']) || empty($dados['telefone']) || empty($dados['deficiencia']) || empty($dados['tipo'])) {
            return ['status' => false, 'error' => 'Todos os campos são obrigatórios.'];
        }

        try {
            $query = "INSERT INTO pacientes (nome, email, data_nascimento, telefone, deficiencia, tipo) VALUES (:nome, :email, :data_nascimento, :telefone, :deficiencia, :tipo)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':nome', $dados['nome']);
            $stmt->bindValue(':email', $dados['email']);
            $stmt->bindValue(':data_nascimento', $dados['data_nascimento']);
            $stmt->bindValue(':telefone', $dados['telefone']);
            $stmt->bindValue(':deficiencia', $dados['deficiencia']);
            $stmt->bindValue(':tipo', $dados['tipo']);
            $stmt->execute();
            return ['status' => true, 'message' => 'Paciente criado com sucesso.'];
        } catch (PDOException $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }

    public function updatePaciente($id, $dados)
    {
        try {
            $query = "UPDATE pacientes SET nome = :nome, email = :email, data_nascimento = :data_nascimento, telefone = :telefone, deficiencia = :deficiencia, tipo = :tipo WHERE id_usuario = :id_usuario";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':nome', $dados['nome']);
            $stmt->bindValue(':email', $dados['email']);
            $stmt->bindValue(':data_nascimento', $dados['data_nascimento']);
            $stmt->bindValue(':telefone', $dados['telefone']);
            $stmt->bindValue(':deficiencia', $dados['deficiencia']);
            $stmt->bindValue(':tipo', $dados['tipo']);
            $stmt->bindValue(':id_usuario', $id);
            $stmt->execute();
            return ['status' => true, 'message' => 'Paciente atualizado com sucesso.'];
        } catch (PDOException $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }

    public function deletePaciente($id)
    {
        try {
            $query = "DELETE FROM pacientes WHERE id_usuario = :id_usuario";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':id_usuario', $id);
            $stmt->execute();
            return $stmt->rowCount() > 0
                ? ['status' => true, 'message' => 'Paciente deletado com sucesso.']
                : ['status' => false, 'error' => 'Paciente não encontrado.'];
        } catch (PDOException $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
}
