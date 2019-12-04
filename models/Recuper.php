<?php
class Recuper extends model {

    public function VerificEmail($email){
        $sql = "SELECT * FROM users WHERE email= :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":email", $email);
		$sql->execute();

        return $sql;
    }

}