<?php
class Users extends model {

    public function __construct() {
        parent::__construct();
    }

    public function isLogged(){
        if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
            return true;
        }else{
            return false;
        }
    }

    public function loginCorrect($pass, $email){
        $sql = "SELECT * FROM users WHERE password= :pass and email= :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":pass", $pass);
        $sql->bindValue(":email", $email);
		$sql->execute();

        if($sql->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function loginExiste($email){
        $sql = "SELECT * FROM users WHERE email= :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":email", $email);
		$sql->execute();

        if($sql->rowCount() == 0){
            return "true";
        }else{
            return "Esse Email já foi cadastrado";
        }
    }

    public function getIdUser($pass, $email){
        $sql = "SELECT id FROM users WHERE password= :pass and email= :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":pass", $pass);
        $sql->bindValue(":email", $email);
		$sql->execute();
        $dados = $sql->fetch();
        return $dados['id'];
    }

    public function teste($pass, $email){
        $sql = "SELECT * FROM users WHERE password= :pass and email= :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":pass", $pass);
        $sql->bindValue(":email", $email);
		$sql->execute();
        $dados = $sql->fetch();
        return $dados['id']." . ". $dados['email'];
    }

    public function RegisterUser($name, $email, $pass){
        $sql = "INSERT INTO users SET name = :name, email = :email, password = :pass";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":pass", $pass);

        if($sql->execute()){
            $sql = "Select * from users WHERE name = :name and email = :email";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":name", $name);
            $sql->bindValue(":email", $email);
            $sql->execute();
            $_SESSION['sucesso'] = "Cadastrado com sucesso!";
            $dados = $sql->fetch();

            $_SESSION['id_cad'] = $dados['id'];
            return "true";
        }else{
            $_SESSION['erro'] = "Ocorreu um Erro!";
            return "false";
        }
    }

    public function RegisterUserInfo($name, $email){
        $id = $_SESSION['id_cad'];
        $sql = "INSERT INTO users_info SET name = :name, email = :email, id_user = $id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);

        if($sql->execute()){
            $_SESSION['sucesso'] = "Cadastrado com sucesso!";
            return "true";
        }else{
            $_SESSION['erro'] = "Ocorreu um Erro!";
            return "false";
        }
    }

    public function infoPerfil($id_user){
        $sql = "SELECT * FROM users_info WHERE id_user = '$id_user'";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        
        return $sql;
    }

    public function atualizaInfoPerfil($id_user, $cep, $telefone, $endereco, $num_casa, $cidade, $estado, $referencia){
        $sql = "UPDATE users_info SET cep = '$cep', telefone = '$telefone', endereco = '$endereco', num_casa = '$num_casa', cidade = '$cidade', estado = '$estado', referencia = '$referencia' where id_user='$id_user'";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        return $sql;
    }

}