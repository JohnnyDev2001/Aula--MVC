<?php
class recuperarController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();

    }

    public function index(){
        $bases = array();
        $recuper = new Recuper();

        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email = addslashes($_POST['email']);

            if($recuper->VerificEmail($email) > 0){
                header('Location: '.BASE_URL.'email');
            }

        }

        $this->loadViewLC("recuperar", $bases);
    }
    
}