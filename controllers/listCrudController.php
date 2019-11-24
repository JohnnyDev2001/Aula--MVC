<?php
class listCrudController extends controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $dados = array();
        $crud = new Crud();
        
        if(isset($_POST['id_del']) && !empty($_POST['id_del'])){
            $id_del = addslashes($_POST['id_del']);

            $crud->DeletaProduto($id_del);
        }

        $this->loadViewCrud('listCrud', $dados);
    }
}