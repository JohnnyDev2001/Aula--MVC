<?php
class Crud extends model {

    public function __construct() {
        parent::__construct();
    }

    public function loginAdmin($user, $pass){
        $a = true;
        if($user == "admin" && $pass == "root"){
            return $a;
        }else{
            return !$a;
        }
    }

    public function getProducts(){
        $sql = "Select * from products";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        return $sql;
    }

    public function checkNum(){
        $sql = "Select * from products";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        $a = true;
        if($sql->rowCount() > 0){
            return $a;
        }else{
            return !$a;
        }
    }

    public function addProducts($name, $desc, $stock, $price, $price_from){
        $sql = "INSERT INTO products SET name = '$name', description = '$desc', stock = '$stock', price = '$price', price_from = '$price_from'";
        $sql = $this->db->prepare($sql);
        $a = true;
        if($sql->execute()){
            return $a;
        }else{
            return !$a;
        }
    }


    public function atualizaProd($id_prod, $name, $desc, $stock, $price, $price_from){
        $sql = "UPDATE products SET name = '$name', description = '$desc', stock = '$stock', price = '$price', price_from = '$price_from' where id = '$id_prod'";
        $sql = $this->db->prepare($sql);
        $a = true;

        if($sql->execute()){
            return $a;
        }else{
            return !$a;
        }
    }

    public function getProductWhere($id){
        $sql = "Select * from products where id = '$id'";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        return $sql;
    }

    public function DeletaProduto($id_del){
        $sql = "Delete from products where id = '$id_del'";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        return $sql;
    }
}