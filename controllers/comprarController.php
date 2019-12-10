<?php
class comprarController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();

    }

    public function index(){
        $dados = array();
        $comprar = new Comprar();
        
        if(isset($_SESSION["id_produto"]) && !empty($_SESSION["id_produto"])){
            if(isset($_POST['cep']) && isset($_POST['telefone']) && isset($_POST['endereco']) && isset($_POST['num_casa']) && isset($_POST['cidade']) && isset($_POST['estado']) && isset($_POST['referencia'])){
            
                $cep = addslashes($_POST['cep']);
                $telefone = addslashes($_POST['telefone']);
                $endereco = addslashes($_POST['endereco']);
                $num_casa = addslashes($_POST['num_casa']);
                $cidade = addslashes($_POST['cidade']);
                $estado = addslashes($_POST['estado']);
                $referencia = addslashes($_POST['referencia']);
                $cep = addslashes($_POST['cep']);


                $comprar->addToComprar($id_user, $cep, $telefone, $endereco, $num_casa, $cidade, $estado, $referencia);

                header("Location: ".BASE_URL."aviso");
            }

            $this->loadView('comprar', $dados);
        }else{
            header("Location: ".BASE_URL);
        }
    } 

    public function getId($id){
        $_SESSION["id_produto"] = $id;
        header("Location: ".BASE_URL.'comprar');
    }
}