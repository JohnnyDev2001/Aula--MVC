<?php
class listCrudController extends controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $dados = array();

        $this->loadViewCrud('listCrud', $dados);
    }

    public function getId($id){
        // edita ou exclui
    }
}