<?php
class adminController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();

    }

    public function index(){
        $dados = array();
        $crud = new Crud();

        if(isset($_POST['user']) && !empty($_POST['user'])){

            $user = addslashes($_POST['user']);
            $pass = addslashes($_POST['pass']);

            if($crud->loginAdmin($user, $pass) == true){
                header("Location: ".BASE_URL."listCrud");
            }else{
                header("Location: ".BASE_URL);
            }
        }
        
        $this->loadViewCrud('admin', $dados);
    } 
}