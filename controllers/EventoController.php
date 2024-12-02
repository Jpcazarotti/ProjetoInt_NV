<?php
require_once __DIR__ . '../models/EventoModel.php';

class EventoController {

    private $eventoModel;

    /*
    public function __construct() {
        $this->eventoModel = new EventoModel();
    }
    */
    
    // Listar todos os eventos
    public function listarEventos() {
        return $this->eventoModel->listar();
    }

    // Cadastrar um novo evento
    public function cadastrarEvento() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'titulo' => $_POST['titulo'],
                'descricao' => $_POST['descricao'],
                'data' => $_POST['data'],
                'localizacao' => $_POST['localizacao'],
                'organizador' => $_POST['organizador']
            ];

            $this->eventoModel->cadastrar($dados);

            header('Location: index.php');
            exit;
        }
    }

    // Editar um evento
    public function editarEvento() {
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'titulo' => $_POST['titulo'],
                'descricao' => $_POST['descricao'],
                'data' => $_POST['data'],
                'localizacao' => $_POST['localizacao'],
                'organizador' => $_POST['organizador']
            ];

            $this->eventoModel->editar($id, $dados);

            header('Location: index.php');
            exit;
        }

        return $this->eventoModel->buscar($id);
    }

    // Excluir um evento
    public function excluirEvento($id) {
        $this->eventoModel->excluir($id);

        header('Location: index.php');
        exit;
    }

    // Adicionar participante a um evento
    public function adicionarParticipante($idEvento) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idParticipante = $_POST['id_participante'];
            $this->eventoModel->adicionarParticipante($idEvento, $idParticipante);

            header('Location: index.php?evento=' . $idEvento);
            exit;
        }
    }

    // Remover participante de um evento
    public function removerParticipante($idEvento, $idParticipante) {
        $this->eventoModel->removerParticipante($idEvento, $idParticipante);

        header('Location: index.php?evento=' . $idEvento);
        exit;
    }

    // Buscar detalhes de um evento
    public function detalhesEvento($id) {
        return $this->eventoModel->buscar($id);
    }

    // Buscar eventos por data
    public function buscarEventosPorData($data) {
        return $this->eventoModel->buscarPorData($data);
    }
}
