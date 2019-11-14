<?php
class adminController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();

    }

    public function index(){
        $dados = array();
        
        $this->loadView('admin', $dados);
    } 
}