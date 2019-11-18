<?php
class panController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $users = new Users();
    
        if($users->isLogged() == true){
            unset($_SESSION['id_user']);
            header("Location: ".BASE_URL);
        }
    }
}
