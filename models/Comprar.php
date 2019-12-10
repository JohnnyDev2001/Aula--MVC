<?php
class Comprar extends model {

    public function addToComprar($id_user, $cep, $telefone, $endereco, $num_casa, $cidade, $estado, $referencia){
        $sql = "UPDATE users_info SET cep = :cep, telefone = :telefone, endereco = :endereco, num_casa = :num_casa, cidade = :cidade, estado = :estado, referencia = :referencia where id_user= :id_user";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":cep", $cep);
        $sql->bindValue(":telefone", $telefone);
        $sql->bindValue(":endereco", $endereco);
        $sql->bindValue(":num_casa", $num_casa);
        $sql->bindValue(":cidade", $cidade);
        $sql->bindValue(":estado", $estado);
        $sql->bindValue(":referencia", $referencia);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();

        return $sql;
    }
}