<?php
class cadastroController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();

    }

    public function index(){
        $users = new Users();
        $dados = array();

        $_SESSION['erro'] = "";

        if(isset($_POST['email']) && empty($_POST['email']) == false){

            $name = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $pass = md5(addslashes($_POST['psw']));

            $yuser = $users->loginExiste($email);
            if($yuser == "true"){

                if($users->RegisterUser($name, $email, $pass) == "true"){
                    header("Location: ".BASE_URL."login");
                }else{
                    header("Location: ".BASE_URL."cadastro");
                    echo $_SESSION['erro'];
                }
            }else{
                $_SESSION['erro'] = $yuser;
                header("Location: ".BASE_URL."cadastro");
            }
        }

        echo $_SESSION['erro'];
        $this->loadViewLC('cadastro', $dados);
    } 
}