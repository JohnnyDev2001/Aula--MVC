<?php
class emailController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();

    }

    public function index(){
        header("Location: ".BASE_URL."aviso");
    }
}