<?php
class editarCrudController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
        $crud = new Crud();
        
        if(isset($_POST['name']) || isset($_POST['desc']) || isset($_POST['stock']) || isset($_POST['price']) || isset($_POST['price_from'])){
            
            $name = addslashes($_POST['name']);
            $desc = addslashes($_POST['desc']);
            $stock = addslashes($_POST['stock']);
            $price = addslashes($_POST['price']);
            $price_from = addslashes($_POST['price_from']);
            $id_prod = $_SESSION['id_prod'];
            
            $log = $crud->atualizaProd($id_prod, $name, $desc, $stock, $price, $price_from);

            if($log == true){
                header("Location: ".BASE_URL."listCrud");
            }else{
                header("Location: ".BASE_URL."editarCrud");
            }
        }

            $this->loadViewCrud('editarCrud', $dados);
    }

    public function getid($id){
        $_SESSION['id_prod'] = $id;

        header("Location: ".BASE_URL."editarCrud");
    }
}
