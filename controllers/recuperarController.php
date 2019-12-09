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

            $ver = $recuper->VerificEmail($email);

            if($ver){
                
            }
        }

        $this->loadViewLC("recuperar", $bases);
    }
    
}