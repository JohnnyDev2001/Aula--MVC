<?php

    class langController extends controller
    {
        private $user;

        public function __contructor()
        {
            parent::__construct();
        }


        public function set($lang)
        {
            $_SESSION['lang'] = $lang;
            header("location:"."http://localhost/loja_michael/");
        }


    }



?>