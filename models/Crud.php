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
}