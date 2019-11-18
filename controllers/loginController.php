<?php
class loginController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();

    }

    public function index(){
        $users = new Users();
        $dados = array();


        if(isset($_POST['email']) && empty($_POST['email']) == false){

            $email = addslashes($_POST['email']);
            $pass = md5(addslashes($_POST['psw']));

            $yuser = $users->loginCorrect($pass, $email);
            if($yuser == 1){

                $id = $users->getIdUser($pass, $email);
                $_SESSION['id_user'] = $id;
                header("Location: ".BASE_URL);
            }else{
                header("Location: ".BASE_URL."login");
            }
        }
        
        $this->loadViewLC('login', $dados);


    }
}