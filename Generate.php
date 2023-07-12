<?php

class Generate{

    private $characters = ["A", "a", "B", "b", "C", "c", "D", "d", "E", "e", "F", "f", "G", "g", "H", "h", "I", "i", "J",
            "j", "K", "k", "L", "l", "M", "m", "N", "n", "O", "o", "P", "p", "Q", "q", "R", "r", "S", "s", "T", "t", "U",  "u",
            "V", "v", "W", "w", "X", "x", "Y", "y", "Z", "z"];
    private $simbols = ["@", "!", "#", "$", "%", "*", ".", ","];
    private $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    private $password;
    private $pass = [];
    
    function __construct(int $size){
        $this->shuffle($size);
    }

    private function shuffle(int $varSize){

        $newPass = "";

        /** MESCLA TODOS OS ARRAYS NO ARRAY PASS */
        $this->pass = array_merge($this->characters, $this->simbols, $this->numbers);

        /** EMBARALHA TODOS OS DADOS DO ARRAY */
        shuffle($this->pass);

        /** LOOP PARA PREENCHIMENTO DA SENHA */
        for ($i=0; $i < $varSize ; $i++) {

            $n = random_int(0, sizeof($this->pass) -1);

            $newPass .= $this->pass[$n];
        }        

        $this->setPassword($newPass);
    }

    private function setPassword($pass){
        $this->password = $pass;
    }

    public function getPassword(){
        return $this->password;
    }

}