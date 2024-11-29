<?php
require_once 'DBConexao.php';

class PsicologoModel
{
    private $psicologo;
    private $conn;

    public function __construct()
    {
        $this->conn = DBConexao::getConexao();
    }

    public function getAllPsicologos()
    {
        try {
            $query = "SELECT p.id_psicologo, u.nome, u.email, u.data_nascimento, u.tipo, p.crp, p.especialidade, p.agenda 
                      FROM psicologos p
                      INNER JOIN usuarios u ON p.id_usuario = u.id_usuario";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return ['status' => true, 'data' => $stmt->fetchAll(PDO::FETCH_ASSOC)];
        } catch (PDOException $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }

    public function getPsicologoById($id)
    {
        try {
            $query = "SELECT p.id_psicologo, u.nome, u.email, u.data_nascimento, u.tipo, p.crp, p.especialidade, p.agenda 
                      FROM psicologos p
                      INNER JOIN usuarios u ON p.id_usuario = u.id_usuario
                      WHERE p.id_psicologo = :id_psicologo";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':id_psicologo', $id);
            $stmt->execute();
            return ['status' => true, 'data' => $stmt->fetch(PDO::FETCH_ASSOC)];
        } catch (PDOException $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }

    public function createPsicologo($dados)
    {
        $this->psicologo = new PsicologoModel();

        if (empty($dados['id_usuario']) || empty($dados['crp']) || empty($dados['especialidade']) || empty($dados['agenda'])) {
            return ['status' => false, 'error' => 'Todos os campos são obrigatórios.'];
        }

        try {
            $query = "INSERT INTO psicologos (id_usuario, crp, especialidade, agenda) 
                      VALUES (:id_usuario, :crp, :especialidade, :agenda)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':id_usuario', $dados['id_usuario']);
            $stmt->bindValue(':crp', $dados['crp']);
            $stmt->bindValue(':especialidade', $dados['especialidade']);
            $stmt->bindValue(':agenda', $dados['agenda']);
            $stmt->execute();
            return ['status' => true, 'message' => 'Psicólogo criado com sucesso.'];
        } catch (PDOException $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }

    public function updatePsicologo($id, $dados)
    {
        try {
            $query = "UPDATE psicologos 
                      SET crp = :crp, especialidade = :especialidade, agenda = :agenda 
                      WHERE id_psicologo = :id_psicologo";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':crp', $dados['crp']);
            $stmt->bindValue(':especialidade', $dados['especialidade']);
            $stmt->bindValue(':agenda', $dados['agenda']);
            $stmt->bindValue(':id_psicologo', $id);
            $stmt->execute();
            return ['status' => true, 'message' => 'Psicólogo atualizado com sucesso.'];
        } catch (PDOException $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }

    public function deletePsicologo($id)
    {
        try {
            $query = "DELETE FROM psicologos WHERE id_psicologo = :id_psicologo";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':id_psicologo', $id);
            $stmt->execute();
            return $stmt->rowCount() > 0
                ? ['status' => true, 'message' => 'Psicólogo deletado com sucesso.']
                : ['status' => false, 'error' => 'Psicólogo não encontrado.'];
        } catch (PDOException $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
}
