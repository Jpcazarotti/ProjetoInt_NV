<?php
require_once __DIR__ . '../models/UsuarioModel.php';
require_once __DIR__ . '../models/PacienteModel.php';
require_once __DIR__ . '../models/PsicologoModel.php';

class UsuarioController {

    private $usuarioModel;
    private $pacienteModel;
    private $psicologoModel;

    // public function __construct()
    // {
    //     $this->usuarioModel = new Usuario();
    //     $this->pacienteModel = new Paciente();
    //     $this->psicologoModel = new Psicologo();
    // }

    // Listar todos os usuários
    public function listarUsuario(){
        return $this->usuarioModel->listar();
    }

    // Cadastrar um novo usuário
    public function cadastrarUsuario(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
                'tipo' => $_POST['tipo']  // Tipo pode ser: 'usuario', 'psicologo', 'adm'
            ];

            $this->usuarioModel->cadastrar($dados);

            // Se for psicólogo, cadastrar também na tabela psicologos
            if ($_POST['tipo'] == 'psicologo') {
                $psicologoDados = [
                    'id_usuario' => $this->usuarioModel->getLastInsertedId(),
                    'crp' => $_POST['crp'],
                    'especialidade' => $_POST['especialidade'],
                    'agenda' => $_POST['agenda']
                ];
                $this->psicologoModel->cadastrar($psicologoDados);
            }

            // Se for paciente, cadastrar também na tabela pacientes
            if ($_POST['tipo'] == 'paciente') {
                $pacienteDados = [
                    'id_usuario' => $this->usuarioModel->getLastInsertedId(),
                    'telefone' => $_POST['telefone'],
                    'deficiencia' => $_POST['deficiencia']
                ];
                $this->pacienteModel->cadastrar($pacienteDados);
            }

            header('Location: index.php');
            exit;
        }
    }

    // Editar um usuário
    public function editarUsuario(){
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
                'tipo' => $_POST['tipo']
            ];

            $this->usuarioModel->editar($id, $dados);

            // Atualizar dados na tabela psicologos ou pacientes se necessário
            if ($_POST['tipo'] == 'psicologo') {
                $psicologoDados = [
                    'crp' => $_POST['crp'],
                    'especialidade' => $_POST['especialidade'],
                    'agenda' => $_POST['agenda']
                ];
                $this->psicologoModel->editar($id, $psicologoDados);
            }

            if ($_POST['tipo'] == 'paciente') {
                $pacienteDados = [
                    'telefone' => $_POST['telefone'],
                    'deficiencia' => $_POST['deficiencia']
                ];
                $this->pacienteModel->editar($id, $pacienteDados);
            }

            header('Location: index.php');
            exit;
        }

        return $this->usuarioModel->buscar($id);
    }

    // Função para excluir um usuário
    public function excluirUsuario($id){
        // Excluir dados de psicólogo ou paciente se necessário
        $usuario = $this->usuarioModel->buscar($id);
        if ($usuario['tipo'] == 'psicologo') {
            $this->psicologoModel->excluir($id);
        }
        if ($usuario['tipo'] == 'paciente') {
            $this->pacienteModel->excluir($id);
        }

        // Excluir o usuário
        $this->usuarioModel->excluir($id);
        header('Location: index.php');
        exit;
    }
}