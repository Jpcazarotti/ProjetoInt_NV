<?php
require_once __DIR__ . '../models/AgendamentoModel.php';
require_once __DIR__ . '../models/PsicologoModel.php';
require_once __DIR__ . '../models/PacienteModel.php';

class AgendamentoController {

    private $agendamentoModel;
    private $psicologoModel;
    private $pacienteModel;

    /*
    public function __construct() {
        $this->agendamentoModel = new AgendamentoModel();
        $this->psicologoModel = new PsicologoModel();
        $this->pacienteModel = new PacienteModel();
    }
    */
    // Listar todos os agendamentos
    public function listarAgendamentos() {
        return $this->agendamentoModel->listar();
    }

    // Cadastrar um novo agendamento
    public function cadastrarAgendamento() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'id_psicologo' => $_POST['id_psicologo'],
                'id_paciente' => $_POST['id_paciente'],
                'data_horario' => $_POST['data_horario'],
                'descricao' => $_POST['descricao']
            ];

            $this->agendamentoModel->cadastrar($dados);

            header('Location: index.php');
            exit;
        }
    }

    // Editar um agendamento
    public function editarAgendamento() {
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'id_psicologo' => $_POST['id_psicologo'],
                'id_paciente' => $_POST['id_paciente'],
                'data_horario' => $_POST['data_horario'],
                'descricao' => $_POST['descricao']
            ];

            $this->agendamentoModel->editar($id, $dados);

            header('Location: index.php');
            exit;
        }

        return $this->agendamentoModel->buscar($id);
    }

    // Excluir um agendamento
    public function excluirAgendamento($id) {
        $this->agendamentoModel->excluir($id);

        header('Location: index.php');
        exit;
    }
}
