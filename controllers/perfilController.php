<?php
class perfilController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
        $users = new Users();
        
        if(isset($_POST['cep']) || isset($_POST['telefone']) || isset($_POST['endereco']) || isset($_POST['num_casa']) || isset($_POST['cidade']) || isset($_POST['estado']) || isset($_POST['referencia'])){
            
            $cep = addslashes($_POST['cep']);
            $telefone = addslashes($_POST['telefone']);
            $endereco = addslashes($_POST['endereco']);
            $num_casa = addslashes($_POST['num_casa']);
            $cidade = addslashes($_POST['cidade']);
            $estado = addslashes($_POST['estado']);
            $referencia = addslashes($_POST['referencia']);
            $id_user = $_SESSION['id_user'];
            
            $users->atualizaInfoPerfil($id_user, $cep, $telefone, $endereco, $num_casa, $cidade, $estado, $referencia);
        }

        if($users->isLogged() == true){

            $this->loadViewP('perfil', $dados);
        }else{
            header("Location: ".BASE_URL);
        }
    }
}
