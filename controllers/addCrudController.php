<?php
class addCrudController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();

    }

    public function index(){
        $dados = array();
        $crud = new Crud();

        if(isset($_POST['name']) && !empty($_POST['name'])){
            $name = addslashes($_POST['name']);
            $desc = addslashes($_POST['desc']);
            $stock = addslashes($_POST['stock']);
            $price = addslashes($_POST['price']);
            $price_from = addslashes($_POST['price_from']);

            $add = $crud->addProducts($name, $desc, $stock, $price, $price_from);
            if($add == true){
                header("Location: ".BASE_URL."listCrud");
            }else{
                header("Location: ".BASE_URL."addCrud");
            }

        }
        
        $this->loadViewCrud('addCrud', $dados);
    } 
}