<?php

class Generate{

    private $characters = ["A", "a", "B", "b", "C", "c", "D", "d", "E", "e", "F", "f", "G", "g", "H", "h", "I", "i", "J",
            "j", "K", "k", "L", "l", "M", "m", "N", "n", "O", "o", "P", "p", "Q", "q", "R", "r", "S", "s", "T", "t", "U",  "u",
            "V", "v", "W", "w", "X", "x", "Y", "y", "Z", "z"];
    private $simbols = ["@", "!", "#", "$", "%", "*", ".", ","];
    private $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    private $password;
    private $pass = [];
    
    function __construct($var, $var1, $var2, int $size){
        $this->merge($var, $var1, $var2, $size);
    }

    private function merge($characters, $numbers, $simbols, $size){

        if(!empty($characters) && !empty($numbers) && !empty($simbols)){

            // MESCLA TODOS OS ARRAY
            $this->pass = array_merge($this->characters, $this->simbols, $this->numbers);

        }else if(!empty($characters) && !empty($numbers) && empty($simbols)){

            //MESCLA OS ARRAYS CHARACTERS E NUMBERS
            $this->pass = array_merge($this->characters, $this->numbers);

        }else if(empty($characters) && !empty($numbers) && !empty($simbols)){

            // MESCLA OS ARRAYS SIMBOLS E NUMBERS
            $this->pass = array_merge($this->simbols, $this->numbers);

        }else if(!empty($characters) && empty($numbers) && !empty($simbols)){

            //MESCLA OS ARRAYS CHARACTERES E SIMBOLS
            $this->pass = array_merge($this->characters, $this->simbols);

        }else if(!empty($characters) && empty($numbers) && empty($simbols)){

            // CRIA UM ARRAY SOMENTE COM CARACTERES
            $this->pass = array_merge($this->characters);

        }else if(empty($characters) && !empty($numbers) && empty($simbols)){
            
            //CRIA UM ARRAY COM NÚMEROS
            $this->pass = array_merge($this->numbers);

        }else if(empty($characters) && empty($numbers) && !empty($simbols)){

            //CRIA UM ARRAY COM SÍMBOLOS
            $this->pass = array_merge($this->simbols);

        }     
                
        shuffle($this->pass);
        
        $this->makePassword($this->pass, $size);
        
    }

    private function makePassword($arr, int $varSize){
        
        $newPass = "";

        /** LOOP PARA PREENCHIMENTO DA SENHA */
        for ($i=0; $i < $varSize ; $i++) {

            $n = random_int(0, sizeof($arr) -1);

            $newPass .= $arr[$n];
        }  
        
        //echo $newPass;

        $this->setPassword($newPass);
    }

    public function setPassword($varPass){
        $this->password = $varPass;
    }

    public function getPassword(){
        return $this->password;
    }
}