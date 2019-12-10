<?php
class uploadController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();

    }

    public function index(){
        $dados = array();
        $users = new Users();

        if(isset($_POST['submit'])){
            $id_user = $_SESSION['id_user'];

            $formatosPerm = array("png", "jpeg", "jpg", "gif");
            $ext = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);

            if(in_array($ext, $formatosPerm)) {
                $dir = "assets/img_perfil/";
                $temp = $_FILES["img"]["tmp_name"];
                $novoNome = uniqid().".$ext";

                if(move_uploaded_file($temp, $dir.$novoNome)){
                    $users->addImg($id_user, $novoNome);
                    header("Location: ".BASE_URL."perfil");
                }else{
                    echo "Ocorreu algum erro!!!";
                }
            }else{
                header("Location: ".BASE_URL."upload");
            }
        }

        if($users->isLogged() == true){

            $this->loadViewP('upload', $dados);
        }else{
            header("Location: ".BASE_URL);
        }
    }
}